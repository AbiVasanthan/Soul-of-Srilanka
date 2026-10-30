<?php
$data = json_decode(file_get_contents("data.json"), true);
$id = $_GET['id'];

foreach ($data as $item) {
    if ($item['id'] == $id) {
        echo json_encode($item);
        break;
    }
}
?>