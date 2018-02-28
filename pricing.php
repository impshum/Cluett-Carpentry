<?php include 'partials/session.php';?>
<?php include 'partials/header.php';?>

    <div class="ae-container-fluid ae-container-fluid--inner rk-main">

      <div class="ae-grid au-pt-2">
        <div class="ae-grid__item item-lg-12 item-lg--offset-0">
          <h4 class="ae-u-bolder">Pricing</h4>
          <p><?php echo $pricing; ?></p>
        </div>
      </div>
      <div class="ae-grid au-pt-2">
        <div class="ae-grid__item item-lg-12 item-lg--offset-0">
          <h4 class="ae-u-bolder">Commissioning</h4>
          <p><?php echo $commissions; ?></p>
          <p><?php echo $ending; ?></p>
        </div>
      </div>
    </div>

<?php include 'partials/footer.php';?>
