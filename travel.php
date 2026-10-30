<?php
// api.php - Unified API for destinations, foods, hotels, activities
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$allowed_types = ['destinations', 'foods', 'hotels', 'activities'];
$type = isset($_GET['type']) ? strtolower(trim($_GET['type'])) : 'destinations';

if (!in_array($type, $allowed_types)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid entity type. Use: ' . implode(', ', $allowed_types)]);
    exit;
}

$jsonFile = $type . '.json';

function readJSON($file) {
    if (!file_exists($file)) return [];
    $content = file_get_contents($file);
    return json_decode($content, true) ?? [];
}

function writeJSON($file, $data) {
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_GET['id'])) {
        echo json_encode(readJSON($jsonFile));
        exit;
    }
    $id = intval($_GET['id']);
    $records = readJSON($jsonFile);
    $found = array_filter($records, fn($r) => intval($r['id']) === $id);
    echo json_encode($found ? array_values($found)[0] : []);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (!$input) { http_response_code(400); echo json_encode(['error' => 'Invalid JSON data']); exit; }
    
    $records = readJSON($jsonFile);
    $newId = empty($records) ? 1 : max(array_column($records, 'id')) + 1;
    $input['id'] = $newId;
    $records[] = $input;
    writeJSON($jsonFile, $records);
    echo json_encode(['status' => 'success', 'id' => $newId, 'type' => $type]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
?>