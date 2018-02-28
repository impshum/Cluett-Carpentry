<?php include 'partials/session.php';?>
<?php include 'partials/header.php';?>

    <div class="ae-container-fluid ae-container-fluid--inner rk-main">

      <div class="ae-grid au-pt-2">
        <div class="ae-grid__item item-lg-6 item-lg--offset-0">
          <h4 class="ae-u-bolder">Contact</h4>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="494" id="gmap_canvas" src="https://maps.google.com/maps?q=Cluett Carpentry&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{overflow:hidden;height:494px;width:100%;}.gmap_canvas {background:none!important;height:494px;width:600px;}</style></div>
          <!--p>Say hello using the <a href="#contact-form">contact form.</a><br>We're standing by!</p-->
          <p class="tp"><span class="contact__phone"> <span class="rk-light-color"></span> <?php echo $number; ?></span><!--br><span class="contact__email au-block au-truncate"> <span class="rk-light-color">Email: &nbsp;</span><a href="#0">info@cluettcarpentry.com</a></span-->
            <br>
        </div>
        <div class="ae-grid__item item-lg-6 item-lg--offset-0">
          <div class="form">
              <div class="fields">
                  <div class="row">
                      <div class="formBox subject">
                          <div class="errBox">
                              <div class="point"></div>
                              <p class="err subjectErr"></p>
                          </div>
                          <input type="text" name="subject" placeholder="Subject">
                      </div>
                  </div>
                  <div class="row">
                      <div class="one-half column">
                          <div class="formBox">
                              <div class="errBox">
                                  <div class="point"></div>
                                  <p class="err nameErr"></p>
                              </div>
                              <input type="text" name="name" placeholder="Name" required>
                          </div>
                      </div>
                      <div class="one-half column">
                          <div class="formBox">
                              <div class="errBox">
                                  <div class="point"></div>
                                  <p class="err phoneErr"></p>
                              </div>
                              <input type="tel" name="phone" placeholder="Phone">
                          </div>
                      </div>
                  </div>
                  <div class="row">

                      <div class="formBox">
                          <div class="errBox">
                              <div class="point"></div>
                              <p class="err emailErr"></p>
                          </div>
                          <input type="email" name="email" placeholder="Email">
                      </div>
                  </div>
                  <div class="row">
                      <div class="errBoxm">
                          <div class="point"></div>
                          <p class="err messageErr"></p>
                      </div>
                      <textarea name="message" placeholder="Message" rows="7"></textarea>
                  </div>
                  <div class="row">
                      <input class="remodal-cancel send submit log" type="submit" id="submit" name="submit" value="SEND">
                  </div>
              </div>
          </div>
          <div class="result">
              <div class="success">
                  <br><br><br><br>
                  <h4 class="has-text-centered">Message sent!<br>I'll be in contact shortly.</h4>
              </div>
              <div class="fail">
                  <br><br><br><br>
                  <h4 class="has-text-centered">Sorry the server seems to be having some difficulty. Please try again later or call, find me on social media etc.</h4>
              </div>
          </div>
        </div>
      </div>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
<?php include 'partials/footer.php';?>
