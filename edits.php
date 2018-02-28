<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('LOCATION:log.php'); die();
}

include 'partials/header.php';

$json = file_get_contents('http://localhost:8888/derp/info.json');
$data = json_decode($json);
$about = $data->about;
$pricing = $data->pricing;
$commissions = $data->commissions;
$ending = $data->ending;
$number = $data->number;
?>

<section class="ae-container-fluid ae-container-fluid--inner rk-main">
<a href="edit.php"class="button is-outlined">Front Page</a>
<br><br><br><br>
<h4>About</h4>
<form action='json_write_info.php' method='get'>
<textarea class='woopa' name='edit-about'><?php echo $about; ?></textarea>
<br><br><br>
<hr>
<br><br><h4>Pricing</h4>
<textarea class='woopa' name='edit-pricing'><?php echo $pricing; ?></textarea>
<br><br><h4>Commissions</h4>
<textarea class='woopa' name='edit-commissions'><?php echo $commissions; ?></textarea>
<br><br><h4>Ending</h4>
<textarea class='woopa' name='edit-ending'><?php echo $ending; ?></textarea>
<br><br><br>
<hr>
<br><br><h4>Phone</h4>
<textarea class='woopa' name='edit-number'><?php echo $number; ?></textarea>
<button class="log" type="submit">SAVE</button>
</form>


</section>

<?php include 'partials/footer.php';?>
