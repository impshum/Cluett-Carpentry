<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>  //Some decoration to prevent your eyes getting hurt
a{
    text-decoration: none;
    color: #98a09d;
}
</style>
<body style="background-color: rgb(16, 16, 16);color: #827f7f;">

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>

<?php
$thelist = "";
$dir = "uploads/";
  if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="'.$dir.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<h1>List of files:</h1>
<ul><?php echo $thelist; ?></ul>

</body>
