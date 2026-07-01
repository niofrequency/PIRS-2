<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    // BUG FIX: Secure API Key handling using environment variables
    // Never hardcode API keys in source control. Set this in your server environment or .env file.
    $apiKey = getenv('XAI_API_KEY');
    
    if (empty($apiKey)) {
        http_response_code(500);
        echo json_encode(['error' => 'API Key not configured on the server.']);
        exit;
    } 

    $input = json_decode(file_get_contents('php://input'), true);
    $messages = $input['messages'] ?? [];

    $systemPrompt = "You are 'PIRS Customer Support' and a diagnostic expert for PT. Panjasa IRS Eastern (PIRS).
Your responsibilities:
1. General Support: Answer questions about PIRS services, global freight, warehousing, and digital operations.
2. Reefer Diagnostics (Daikin Focus): You possess comprehensive technical knowledge of refrigerated container units, specifically Daikin (e.g., LXE10E, ZESTIA). When a user asks about an alarm code (e.g., E101, F803) or describes a mechanical issue, you must provide the exact cause, component at fault, and step-by-step troubleshooting instructions as documented in the official Daikin service manuals.
3. Professionalism: Be concise, highly technical when dealing with reefer units, and maintain a corporate yet approachable tone.
If you don't know something, advise the user to contact PIRS support at info@pirs.co.id or +62 81359 646964.";

    $payload = [
        "model" => "grok-3", // Or the specific model endpoint assigned
        "messages" => array_merge([["role" => "system", "content" => $systemPrompt]], $messages),
        "temperature" => 0.2
    ];

    $ch = curl_init('https://api.x.ai/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => 'cURL Error: ' . curl_error($ch)]);
        curl_close($ch);
        exit;
    }
    curl_close($ch);

    // Ensure proper format mapping
    $responseData = json_decode($response, true);
    if (!$responseData || !isset($responseData['choices'])) {
        http_response_code(502);
        echo json_encode(['error' => 'Invalid or unexpected format received from upstream API.']);
        exit;
    }

    http_response_code($httpCode);
    echo $response;
    exit;
}
?>
