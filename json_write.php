<?php

$titles = $_GET["title"];
$images = $_GET["image"];
$subtitles = $_GET["subtitle"];
$texts = $_GET["text"];
$count = count($images);

$data = file_get_contents('projects.json');
$dataDecoded = json_decode($data, true);

for ($i = 0; $i < $count; $i++) {
   $dataDecoded['posts'][$i]['title'] = $titles[$i];
   $dataDecoded['posts'][$i]['image'] = $images[$i];
   $dataDecoded['posts'][$i]['subtitle'] = $subtitles[$i];
   $dataDecoded['posts'][$i]['text'] = $texts[$i];
   foreach($dataDecoded['posts'] as $key => $value) {
   	if (in_array('delete', $value)) {
   		unset($dataDecoded['posts'][$i]);
   	}

 }

$json = json_encode($dataDecoded);
file_put_contents('projects.json', $json);
header('Location: '.'admin.php');
 ?>
