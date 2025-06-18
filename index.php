<?php
header('Content-Type: application/json');

// Read the data.json file
$jsonData = file_get_contents('data.json');

// Check if file was read successfully
if ($jsonData === false) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Could not read data.json file'
    ]);
    exit;
}

// Optionally decode and re-encode to validate
$data = json_decode($jsonData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid JSON in data.json file'
    ]);
    exit;
}

// Send the JSON data
echo json_encode($data);
?>