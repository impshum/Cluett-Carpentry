<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('LOCATION:log.php'); die();
    }

include 'partials/header.php';

$json = file_get_contents('projects.json');
$data = json_decode($json);
$all = $data->posts;
$i = 0;
?>

  <section class="ae-container-fluid ae-container-fluid--inner rk-main">
    <a href="edits.php"class="button is-outlined">Page Texts</a>
    <?php
      echo "<form action='json_write.php' method='get'><div class='ae-grid au-xs-ta-center au-mb-4 au-pt-4 json'>";

      foreach ($all as $item) {
        $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <div class='ae-grid__item item-lg-4 ae-kappa'>
          <img class='cover' src='$wooimage'>
          <input class='woop' name='title[]' type='text' value='$item->title'><br>
          <input class='woop' name='subtitle[]' type='text' value='$item->subtitle'><br>
          <input class='woop' name='image[]' type='text' value='$item->image'><br>
          <textarea class='woop' name='text[]'>$item->text</textarea><br>
          </div>


          ";
          $i++;
      }

      echo "<button id='savejson' value='SUBMIT' type='submit'>SUBMIT</button><textarea disabled name='trickle' class='i'>$i</textarea></form></div>";
      echo "<button class='add_form_field'>ADD NEW</button>";
      ?>
      <br>

    </div>

  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script>
  $(document).ready(function() {
      var max_fields      = 10;
      var wrapper         = $(".json");
      var add_button      = $(".add_form_field");

      var x = 1;
      $(add_button).click(function(e){
          e.preventDefault();
          if(x < max_fields){
              x++;
              $(wrapper).append("<div class='ae-grid__item item-lg-4 ae-kappa'><input class='woop' name='title[]' type='text' value='Title'><br><input class='woop' name='subtitle[]' type='text' value='Subtitle'><br><input class='woop' name='image[]' type='text' value='Image'><br><textarea class='woop' name='text[]'>Full text</textarea><br></div>"); //add input box
          }
    else
    {
    alert('You Reached the limits')
    }
      });

      $(wrapper).on("click",".delete", function(e){
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
  });

  var btn = document.getElementsByClassName('remove')

  for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function(e) {
      e.currentTarget.parentNode.remove();
      $('input[name=sitebg]').val('000000');
    }, false);
  }
  </script>
<style>
.rk-footer {
  margin-bottom: 0rem;
}
</style>
<?php include 'partials/footer.php';?>
