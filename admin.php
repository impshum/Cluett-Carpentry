<?php include 'partials/header.php';?>
<?php include 'partials/helpers.php';?>
<?php
$json = file_get_contents('http://localhost:8888/dan/new/config.json');
$data = json_decode($json);

$one = $data->projects->posts[0];
$two = $data->projects->posts[1];
$three = $data->projects->posts[2];
$_SESSION["allofit"] = $data->projects->posts;
$_SESSION["one-title"] = $one->title;
$_SESSION["one-subtitle"] = $one->subtitle;
$_SESSION["one-image"] = $one->image;
$_SESSION["one-text"] = $one->text;

$_SESSION["two-title"] = $two->title;
$_SESSION["two-subtitle"] = $two->subtitle;
$_SESSION["two-image"] = $two->image;
$_SESSION["two-text"] = $two->text;

$_SESSION["three-title"] = $three->title;
$_SESSION["three-subtitle"] = $three->subtitle;
$_SESSION["three-image"] = $three->image;
$_SESSION["three-text"] = $three->text;

console_log("session vars loaded into memory");
?>

  <section class="ae-container-fluid ae-container-fluid--inner rk-main rk-portfolio">

    <div class="rk-portfolio__items">

      <?php
      $i = 1;
      foreach($_SESSION["allofit"] as $item) {
        $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <a href='#' class='rk-item rk-item--flex rk-size-4 rk-tosize-3 rk-square' style='background-image: url($wooimage);'>
            <div class='item-meta'>
              <h2>$item->title</h2>
              <p>$item->subtitle</p>
              <p>$item->text</p>
            </div>
            <div class='count'>$i</div>
          </a>
          ";
          $i++;
      }
      ?>

    </div>

  </section>

<?php include 'partials/footer.php';?>
