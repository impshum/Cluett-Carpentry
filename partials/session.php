<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$json = file_get_contents('http://localhost:8888/derp/projects.json');
$data = json_decode($json);
$allofit = $data->posts;

$json1 = file_get_contents('http://localhost:8888/derp/info.json');
$data1 = json_decode($json1);
$about = $data1->about;
$pricing = $data1->pricing;
$commissions = $data1->commissions;
$ending = $data1->ending;
$number = $data1->number;
?>
