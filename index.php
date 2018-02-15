<?php include 'partials/header.php';?>
<?php include 'partials/helpers.php';?>
<?php require 'partials/session.php';?>

  <section class="ae-container-fluid ae-container-fluid--inner rk-main rk-portfolio">

    <div class="rk-portfolio__items">

      <?php
      $i = 0;
      foreach($_SESSION["allofit"] as $item) {
        $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <a href='projects.php?page=$i' class='rk-item rk-item--flex rk-size-4 rk-tosize-3 rk-square' style='background-image: url($wooimage);'>
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
