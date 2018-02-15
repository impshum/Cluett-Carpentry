<?php

session_start();

$json = file_get_contents('http://localhost:8888/dan/new/projects.json');
$data = json_decode($json);

$one = $data->posts[0];
$two = $data->posts[1];
$three = $data->posts[2];
$_SESSION["allofit"] = $data->posts;
$_SESSION["one-title"] = $one->title;
$_SESSION["one-subtitle"] = $one->subtitle;
$_SESSION["one-image"] = $one->image;
$_SESSION["one-text"] = $one->text;

$_SESSION["two-title"] = $two->title;
$_SESSION["two-subtitle"] = $two->subtitle;
$_SESSION["two-image"] = $two->image;
$_SESSION["two-text"] = $two->text;

$_SESSION["three-title"] = $three->title;
$_SESSION["three-subtitle"] = $three->subtitle;
$_SESSION["three-image"] = $three->image;
$_SESSION["three-text"] = $three->text;

console_log("session vars loaded into memory");

//function sessional() {
//if(isset($_SESSION['one-title']) && !empty($_SESSION['one-title'])) {
//  console_log("session vars already in memory");
//} else {
//  $json = file_get_contents('http://localhost:8888/dan/new/config.json');
//  $data = json_decode($json);

//  $one = $data->posts[0];
//  $two = $data->posts[1];
//  $three = $data->posts[2];
//  $_SESSION["allofit"] = $data->posts;
//  console_log("session vars loaded into memory");
//}
//}

?>
