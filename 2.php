<?php include 'partials/header.php';?>
<?php include 'partials/helpers.php';?>
<?php include 'partials/session.php';?>


      <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">
        <div class="ae-grid ae-grid--collapse au-xs-ptp-2">
          <div class="ae-grid__item item-lg-5 au-lg-ptp-1">
            <h4 class="ae-u-bolder"><?php echo $_SESSION["two-title"]; ?></h4>
            <p class="ae-eta"><?php echo $_SESSION['two-text']; ?></p>
          </div>
          <div class="ae-grid__item item-lg-6 item-lg--offset-1"><img class="mad" src="<?php echo $_SESSION['two-image']; ?>" alt="<?php echo $_SESSION["two-title"]; ?>"></div>
          <div class="group-buttons au-lg-ptp-1">
            <?php
              nav();
            ?>
          </div>
        </div>
      </div>

<?php include 'partials/footer.php';?>
