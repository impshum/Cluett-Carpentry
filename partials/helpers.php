<?php

function nav() {
  $uri = $_SERVER['REQUEST_URI'];
  preg_match_all('!\d+!', $uri, $matches);
  $url = $matches[0][0];
  $next = $url + 1;
  $back = $url - 1;
  if ($url == "1") {
    echo "<a href='$next.php' class='au-mt-2 arrow-button arrow-button--right'>Next Project<span class='arrow-cont'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span></a>";
  }
  elseif ($url == "3") {
    echo "<a href='$back.php' class='au-mt-2 arrow-button arrow-button--left'><span class='arrow-cont-rev'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span>Last Project</a>";
  } else {
    echo "<a href='$back.php' class='au-mt-2 arrow-button arrow-button--left'><span class='arrow-cont-rev'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span>Last Project</a><a href='$next.php' class='au-mt-2 arrow-button arrow-button--right'>Next Project<span class='arrow-cont'><svg><use xlink:href='assets/img/symbols.svg#arrow'></use></svg></span></a>";
  }
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

?>
