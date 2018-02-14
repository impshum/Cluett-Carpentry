<?php include 'partials/header.php';?>

    <div class="ae-container-fluid ae-container-fluid--inner rk-main">

      <div class="ae-grid au-pt-2">
        <div class="ae-grid__item item-lg-6 item-lg--offset-0">
          <h4 class="ae-u-bolder">Contact</h4>
          <p>Say hello using the <a href="#contact-form">contact form.</a><br>We're standing by!</p>
          <p><span class="contact__phone"> <span class="rk-light-color">Phone  </span> (+44) 7525 827 514</span><br><span class="contact__email au-block au-truncate"> <span class="rk-light-color">Email &nbsp;&nbsp; </span><a href="#0">info@cluettcarpentry.com</a></span>
            <br>TODO ADD MAP
        </div>
        <div class="ae-grid__item item-lg-6 item-lg--offset-0">
          <form id="contact-form" action="#0" class="ae-form--full">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="tel" placeholder="Phone" required>
            <textarea placeholder="Message..." cols="30" rows="4"></textarea>
            <p class="au-xs-ta-right au-pt-4 group-buttons">
              <a href="#0" class="arrow-button arrow-button--right arrow-button--out">Send<span class="arrow-cont"><svg><use xlink:href="assets/img/symbols.svg#arrow"></use></svg></span></a>
            </p>
          </form>
        </div>
      </div>

    </div>

<?php include 'partials/footer.php';?>
