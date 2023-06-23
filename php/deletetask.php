<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');


$datastr = file_get_contents("data.json");
$data = json_decode($datastr);

$index = $_POST['index'];
array_splice($data, $index, 1);

$datastr = json_encode($data);
file_put_contents("data.json", $datastr);
echo $datastr;
