<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$dataStr = file_get_contents('data.json');
$decData = json_decode($dataStr, true);
$encData = json_encode($decData);
echo $encData;
