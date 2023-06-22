<?php

header("Access-Control-Allow-Origin: http://localhost:5175");
header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$file = "data.json";

$newtask = $_POST;
$dataStr = file_get_contents($file);
$data = json_decode($dataStr);
$data[] = $newtask;

$encData = json_encode($data);

file_put_contents($file, $encData);

echo $encData;
