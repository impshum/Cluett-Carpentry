<a href='test.php'>GO</a><br>
<?php
session_start();

$i = 1;
foreach($_SESSION["allofit"] as $item) {
    $title = $item->title;
    $subtitle = $item->subtitle;
    $text = $item->text;
    echo "<img src='assets/img/projects/$i.jpg' height='100px'>";
    echo "<h3>$title</h3>";
    echo "<h5>$subtitle</h5>";
    echo "<h5>$text</h5>";
    echo $i;
    $i++;
}
?>
