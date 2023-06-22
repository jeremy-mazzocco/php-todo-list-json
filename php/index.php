<?php

header("Access-Control-Allow-Origin: http://localhost:5175");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$dataStr = file_get_contents('data.json');
$decData = json_decode($dataStr, true);
// $encData = json_encode($dataStr);
echo $decData;

var_dump($decData);
