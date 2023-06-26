<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$index = $_POST['index'];

$datastr = file_get_contents("data.json");
$data = json_decode($datastr, true);


$data[$index]["crossed"] = !$data[$index]["crossed"] == 'true';

$datastr = json_encode($data);
file_put_contents('data.json', $datastr);
echo $datastr;
