<?php include 'partials/header.php';?>
<?php include 'partials/helpers.php';?>
<?php require 'partials/session.php';?>
<?php

  $uri = $_SERVER['REQUEST_URI'];
  preg_match_all('!\d+!', $uri, $matches);
  $url = $matches[0][0];
  $next = $url + 1;
  $back = $url - 1;

  //console_log($_SESSION["allofit"]);

  $stack = array();
  foreach($_SESSION["allofit"] as $item) {
    array_push($stack, $item->title);
  }

  $stack = array_slice($stack,0);
  $pages = array_chunk($stack, 1, true);

  $page = empty($_GET['page']) ? 0 : $_GET['page'];

  $endpage = count($pages) -1;
  foreach ($pages[$page] as $file) {
    if ($file != "." && $file != "..") {

        foreach(array_slice($_SESSION["allofit"] , $url ,1) as $item){
          $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <div class='ae-container-fluid ae-container-fluid--inner rk-portfolio--inner'>
            <div class='ae-grid ae-grid--collapse au-xs-ptp-123'>
              <div class='ae-grid__item item-lg-5 au-lg-ptp-1'>
                <h4 class='ae-u-bolder'>$file</h4>
                <p class='ae-eta'>$item->subtitle</p>
                <p class='ae-eta'>$item->text</p>
              </div>
              <div class='ae-grid__item item-lg-6 item-lg--offset-1'><img class='project' src='$wooimage' alt='ALT TEXT'></div>
                <div class='group-buttons au-lg-ptp-1'>
                  ";
                  $endpage = count($pages) -1;

                  $i = 0;
                  $i = $i - 1;
                  echo "<div id='pagi' class='ani fadeInUpBig'>";

                  if ($url == $endpage) {
                    echo "<a href='projects.php?page=$back' class='au-mt-2 arrow-button arrow-button--left'><span class='arrow-cont-rev'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span>Last Project</a>";
                  } elseif ($url == 0) {
                      echo "<a href='projects.php?page=$next' class='au-mt-2 arrow-button arrow-button--right'>Next Project<span class='arrow-cont'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span></a>";
                  } else {
                    echo "<a href='projects.php?page=$back' class='au-mt-2 arrow-button arrow-button--reverse arrow-button--left'><span class='arrow-cont-rev'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span>Last Project</a><a href='projects.php?page=$next' class='au-mt-2 arrow-button arrow-button--right'>Next Project<span class='arrow-cont'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span></a>";
                  }
              echo "
                </div>
              </div>
            </div>
          </div>
          ";
        }
      }
  }



 ?>
 <?php include 'partials/footer.php';?>
