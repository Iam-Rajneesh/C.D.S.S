<?php

$apiKey = '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';

// Search function
function mlRequest($prompt, $apiKey)
{
    $url = 'https://api.openai.com/v1/engines/text-davinci-003/completions';
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ];

    $data = [
        'prompt' => $prompt . " in healthcare",
        'max_tokens' => 1500,
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
}

$prompt = $_GET['query'];
$response = mlRequest($prompt, $apiKey);


// Extract the generated text from the response
$generatedText = $response['choices'][0]['text'];

echo $generatedText;


?>