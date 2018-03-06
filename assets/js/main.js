var validateEmail = function(email) {
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return re.test(email);
};

var formFunc = function() {
  var name = $(".form input[ name = name ]").val();
  var phone = $(".form input[ name = phone ]").val();
  var email = $(".form input[ name = email ]").val();
  var subject = $(".form input[ name = subject ]").val();
  var message = $(".form textarea").val();

  if (name === "") {
    $(".nameErr").html("Please enter your name");
    $(".nameErr").parent().fadeIn("slow");
    return;
  }
  else if (phone.length < 9 || phone.length > 12 || isNaN(phone)) {
    $(".phoneErr").html("Please enter a valid phone number");
    $(".phoneErr").parent().fadeIn("slow");
    return;
  }
  else if (validateEmail(email) === false) {
    $(".emailErr").html("Please enter a valid email address");
    $(".emailErr").parent().fadeIn("slow");
    return;
  }
  else if (subject.length > 0) {
    $(".messageErr").html("Please enter a poo");
    $(".messageErr").parent().fadeIn("slow");
    return;
  }
  else if (message.length === 0) {
    $(".messageErr").html("Please enter a message");
    $(".messageErr").parent().fadeIn("slow");
    return;
  }

  // send mail function
  $.ajax({
    type: "POST",
    url: "partials/send.php",
    data: {
      name: name,
      email: email,
      phone: phone,
      message: message
    },
    failure: function(data) {
      $('.fields').fadeOut(1000, function() {
        $('.fail').fadeIn(1000);
      });
      //console.log(data);
    },
    success: function(data) {
      $('.fields').fadeOut(1000, function() {
        $("success h2").html(data);
        $('.success').fadeIn(1000);
      });
      //console.log(data);
    }
  });
};

// catch the send
$("body").on("click", ".form input[type=submit]", function() {
  formFunc();
});

// on focus to hide error message (what a ball ache)
$("body").on("focus", ".form input", function() {
  $(".err").parent().fadeOut("slow");
});
