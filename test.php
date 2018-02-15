<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

function gallery()
{
    $dirname = "assets/img/projects/";
    $images = glob($dirname . "*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);

    echo '<div class="row">';
    foreach ($images as $image) {
        echo "<img style='height:100px;margin-bottom:20px;' class='boop' src='$image' alt='wallpaper'></a>";
        $base = basename($image, ".jpg");
        $splitTokens = explode("-", $base);
        $string1 = $splitTokens[0];
        $string2 = $splitTokens[1];
        echo '<br>' . $string1;
        echo '<br>' . $string2;


    }
}
//gallery();

session_start();

$json = file_get_contents('http://localhost:8888/dan/new/config.json');
$data = json_decode($json);

$one = $data->projects->posts[0];
$two = $data->projects->posts[1];
$three = $data->projects->posts[2];

$_SESSION["allofit"] = $data->projects->posts;
$_SESSION["one-title"] = $one->title;
$_SESSION["one-subtitle"] = $one->subtitle;
$_SESSION["one-text"] = $one->text;

$_SESSION["two-title"] = $two->title;
$_SESSION["two-subtitle"] = $two->subtitle;
$_SESSION["two-text"] = $two->text;

$_SESSION["three-title"] = $three->title;
$_SESSION["three-subtitle"] = $three->subtitle;
$_SESSION["three-text"] = $three->text;

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
console_log("session vars loaded");

if(isset($_SESSION['one-title']) && !empty($_SESSION['one-title'])) {
   echo '<br>Set and not empty, and no undefined index error!';
} else {
  echo "<br>Session vars loaded into memory";
}

function jsonwrite(){
    //Load the file
  $contents = file_get_contents('example.json');

  //Decode the JSON data into a PHP array.
  $contentsDecoded = json_decode($contents, true);
   
  //Modify the counter variable.
  $contentsDecoded['counter']++;

  //Encode the array back into a JSON string.
  $json = json_encode($contentsDecoded);

  //Save the file.
  file_put_contents('example.json', $json);
}


?>
<br>
<a href="test2.php">GO</a>
