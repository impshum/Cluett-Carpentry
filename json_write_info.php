<?php
$about = $_GET["edit-about"];

$pricing = $_GET["edit-pricing"];
$commissions = $_GET["edit-commissions"];
$ending = $_GET["edit-ending"];
$number = $_GET["edit-number"];

$data = file_get_contents('info.json');
$dataDecoded = json_decode($data, true);

$dataDecoded['about'] = $about;

$dataDecoded['pricing'] = $pricing;
$dataDecoded['commissions'] = $commissions;
$dataDecoded['ending'] = $ending;

$dataDecoded['number'] = $number;

$json = json_encode($dataDecoded);
file_put_contents('info.json', $json);
header('Location: '.'edits.php');
?>
