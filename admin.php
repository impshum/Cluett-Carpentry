<?php include 'partials/header.php';?>
<?php include 'partials/helpers.php';?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$json = file_get_contents('http://localhost:8888/dan/new/test.json');
$data = json_decode($json);

$all = $data->posts;

$i = 0;
?>

  <section class="ae-container-fluid ae-container-fluid--inner rk-main">



    <?php
      echo "<form action='test4.php' method='get'><div class='ae-grid au-xs-ta-center au-mb-4 au-pt-4 json'>";

      foreach($all as $item) {
        $wooimage = htmlentities('assets/img/projects/' . $item->image);
          echo "
          <div class='ae-grid__item item-lg-4 ae-kappa'>
          <img class='cover' src='$wooimage'>
          <input class='woop' name='title[]' type='text' value='$item->title'><br>
          <input class='woop' name='subtitle[]' type='text' value='$item->subtitle'><br>
          <input class='woop' name='image[]' type='text' value='$item->image'><br>
          <textarea class='woop' name='text[]'>$item->text</textarea><br>
          <button class='delete'>REMOVE</button><br>
          </div>


          ";
          $i++;
      }

      echo "<button id='savejson' value='SUBMIT' type='submit'>SUBMIT</button></form></div>";
      echo "<button class='add_form_field'>ADD NEW</button>";
      echo "<div class='i'>$i</div>"
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
              $(wrapper).append("<div class='ae-grid__item item-lg-4 ae-kappa'><img src='$wooimage' class='rk-square'><input class='woop' name='title[]' type='text' value='$item->title'><br><input class='woop' name='subtitle[]' type='text' value='$item->subtitle'><br><input class='woop' name='image[]' type='text' value='$item->image'><br><textarea class='woop' name='text[]'>$item->text</textarea><br><button class='delete'>REMOVE</button><br></div>"); //add input box
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
      //this.closest('.single').remove() // in modern browsers in complex dom structure
      //this.parentNode.remove(); //this refers to the current target element
      //e.target.parentNode.parentNode.removeChild(e.target.parentNode);
    }, false);
  }
  </script>
<style>
.rk-footer {
  margin-bottom: 0rem;
}
</style>
<?php include 'partials/footer.php';?>
