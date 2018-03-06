<?php
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){
  $username = $_POST['username']; $password = $_POST['password'];
  if($username === 'user' && $password === 'password'){
    $_SESSION['login'] = true; header('LOCATION:edit.php'); die();
  }
  if($username !== 'admin')$userError = 'Invalid Username';
  if($password !== 'password')$passError = 'Invalid Password';
}
?>

<?php include 'partials/header.php';?>

<section class="ae-container-fluid ae-container-fluid--inner rk-main">
  <div class="ae-grid__item item-lg-6 item-lg--offset-3">
    <br><br><br>
  <form name='input' action='<?php echo $_SERVER['PHP_SELF'];?>' method='post' class="ae-form--full">
    <label for='username'></label><input type='text' value='<?php echo $username;?>' id='username' name='username' placeholder="Username"/>
    <label for='password'></label><input type='password' value='<?php echo $password;?>' id='password' name='password' placeholder="Password">
    <button class="log" type='submit' name='sub'>LOGIN</button>
    <div class='error'><?php echo $userError;?></div>
    <div class='error'><?php echo $passError;?></div>
  </form>

  </div>
</section><br><br><br><br><br><br>

  <?php include 'partials/footer.php';?>
