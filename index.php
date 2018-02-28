<?php include 'partials/header.php';?>
<?php include 'partials/session.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

  <section class="ae-container-fluid ae-container-fluid--inner rk-main rk-portfolio">

    <div class="rk-portfolio__items">

      <?php
      $i = 0;
      foreach($allofit as $item) {
        $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <a href='projects.php?page=$i' class='fader rk-item rk-item--flex rk-size-4 rk-tosize-3 rk-square' style='background-image: url($wooimage);'>
            <div class='item-meta'>
              <h2>$item->title</h2>
              <p>$item->subtitle</p>
            </div>
          </a>
          ";
          $i++;
      }
      ?>

    </div>

  </section>

<?php include 'partials/footer.php';?>
