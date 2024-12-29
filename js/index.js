$(document).ready(function () {
  $("form #txtPassword").keydown(function () {
    $("#txtPassword").attr("type", "password");
    $("#ShowPw").prop("checked", false); // remove check
  });
  $("form #ShowPw").on("change", function () {
    if ($(this).is(":checked")) {
      $("#txtPassword").attr("type", "text"); // Show password
    } else {
      $("#txtPassword").attr("type", "password"); // Hide password
    }
  });
  $("form .btnLogin").on("click", function () {
    window.open("dashboard.html", "_parent"); // Replace with your URL
  });
  // email check
  $("#txtEmail").on("input", function () {
    var email = $(this).val();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation pattern
      if (emailRegex.test(email)) {
        $(this).css("color", "rgb(0, 0, 0)");
        //   $(this).css("border","rgb(241, 114, 114)") // Clear any previous error messages
      } else {
        $(this).css("color", "rgb(241, 114, 114)");
        // $("form .fb-email").css("display", "block");
      }
  });
  $("#txtPassword").on("input", function () {
    var pass = $(this).val();
    if ($(this).val().length < 6) {
      $(this).css("color", "rgb(241, 114, 114)");
    //   $("form .fb-pass").css("display", "block");
    } else {
      $(this).css("color", "rgb(0, 0, 0)");
    }
  });
});
