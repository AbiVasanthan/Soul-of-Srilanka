<?php
header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

$dataFile = 'destinations.json';


function readData($file) {

    if (!file_exists($file)) {
        file_put_contents($file, json_encode(array(), JSON_PRETTY_PRINT));
        return array();
    }

    $fileContents = file_get_contents($file);

    $dataArray = json_decode($fileContents, true);

    if ($dataArray === null) {
        return array();
    }

    return $dataArray;
}


function writeData($file, $dataArray) {

    $jsonString = json_encode($dataArray, JSON_PRETTY_PRINT);

    $result = file_put_contents($file, $jsonString);
    
    return $result !== false;
}


$requestType = $_SERVER['REQUEST_METHOD'];


// read data
if ($requestType == 'GET') {

    $allRecords = readData($dataFile);

    if (isset($_GET['id'])) {

        $searchId = $_GET['id'];

        $foundRecord = null;

        foreach ($allRecords as $record) {
            if ($record['id'] == $searchId) {
                $foundRecord = $record;
                break;
            }
        }

        if ($foundRecord != null) {
            $response = array(
                "status" => "success",
                "data"   => $foundRecord
            );
            echo json_encode($response);

        } else {
            http_response_code(404);
            $response = array(
                "status"  => "error",
                "message" => "No destination found with that ID."
            );
            echo json_encode($response);
        }

    } else {

        $response = array(
            "status" => "success",
            "count"  => count($allRecords),
            "data"   => $allRecords
        );
        echo json_encode($response);
    }

// add a new record
} elseif ($requestType == 'POST') {
    $requestBody = file_get_contents("php://input");

    $newData = json_decode($requestBody, true);

    if ($newData === null) {
        http_response_code(400);
        $response = array(
            "status"  => "error",
            "message" => "Invalid JSON data received."
        );
        echo json_encode($response);
        exit();
    }

    $requiredFields = array('name', 'district', 'category', 'description', 'best_season', 'rating');
    $missingFields = array();

    foreach ($requiredFields as $field) {
        if (empty($newData[$field])) {
            $missingFields[] = $field;
        }
    }

    if (!empty($missingFields)) {
        http_response_code(400);
        $response = array(
            "status"  => "error",
            "message" => "Missing required fields: " . implode(", ", $missingFields)
        );
        echo json_encode($response);
        exit();
    }

    $allRecords = readData($dataFile);

    $highestId = 0;
    foreach ($allRecords as $record) {
        if ($record['id'] > $highestId) {
            $highestId = $record['id'];
        }
    }
    $nextId = $highestId + 1;

    $newRecord = array(
        "id"            => $nextId,
        "name"          => $newData['name'],
        "district"      => $newData['district'],
        "category"      => $newData['category'],
        "description"   => $newData['description'],
        "entry_fee_usd" => isset($newData['entry_fee_usd']) ? $newData['entry_fee_usd'] : "0",
        "best_season"   => $newData['best_season'],
        "rating"        => $newData['rating']
    );

    $allRecords[] = $newRecord;
    $writeSuccess = writeData($dataFile, $allRecords);

    if (!$writeSuccess) {
        http_response_code(500);
        $response = array(
            "status"  => "error",
            "message" => "Failed to write to file. Check folder permissions."
        );
        echo json_encode($response);
        exit();
    }

    http_response_code(201);
    $response = array(
        "status"  => "success",
        "message" => "New destination added successfully!",
        "data"    => $newRecord
    );
    echo json_encode($response);


// delete
} elseif ($requestType == 'DELETE') {

    // Get the id from the URL (e.g. connect.php?id=3)
    if (!isset($_GET['id'])) {
        http_response_code(400);
        $response = array(
            "status"  => "error",
            "message" => "Please provide an id in the URL."
        );
        echo json_encode($response);
        exit();
    }

    $deleteId = $_GET['id'];

    // read all records
    $allRecords = readData($dataFile);

    $updatedRecords = array();
    $wasFound = false;

    foreach ($allRecords as $record) {
        if ($record['id'] == $deleteId) {
            $wasFound = true;
        } else {
            $updatedRecords[] = $record;
        }
    }

    // send an error if id not found
    if ($wasFound == false) {
        http_response_code(404);
        $response = array(
            "status"  => "error",
            "message" => "No destination found with that ID."
        );
        echo json_encode($response);
        exit();
    }

    // save the update
    writeData($dataFile, $updatedRecords);

    // send a success msg
    $response = array(
        "status"    => "success",
        "message"   => "Destination deleted successfully.",
        "remaining" => count($updatedRecords)
    );
    echo json_encode($response);

} else {
    // Unknown request type
    http_response_code(405);
    $response = array(
        "status"  => "error",
        "message" => "Method not allowed. Use GET, POST, or DELETE."
    );
    echo json_encode($response);
}

?>
