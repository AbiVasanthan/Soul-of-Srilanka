<?php
$data = json_decode(file_get_contents("data.json"), true);

$new = [
    "id" => $_POST['id'],
    "name" => $_POST['name'],
    "location" => $_POST['location'],
    "type" => $_POST['type'],
    "bestTime" => $_POST['bestTime'],
    "description" => $_POST['description']
];

$data[] = $new;

file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

echo "New destination added!";
?>