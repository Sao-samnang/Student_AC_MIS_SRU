$(document).ready(function () {
  $("form #txtpass").keydown(function () {
    $("#txtpass").attr("type", "password"); // remove check
  });
  $("form #txtconpass").keydown(function () {
    $("#txtconpass").attr("type", "password"); // remove check
  });
  // action register
  //   function register(frm_data) {

  //   }
  //   //
  const email = $("form #txtemail").val();
  const password = $("form #txtpass").val();
  const confirmPassword = $("form #txtconpass").val();
  //
  function cleartxt() {
    $("form #txtlastname").val("");
    $("form #txtfirstname").val("");
    $("form #txtemail").val("");
    $("form #teacherPermission").val("");
    $("form #txtpass").val("");
    $("form #txtconpass").val("");
  }
  $(".container .btnLogin").on("click", function () {
    // alert("assss");
    var eThis = $(".container form");
    var frm = eThis.closest("form.frm");
    //console.log(frm)
    var frm_data = new FormData(frm[0]);
    if (
      $("#txtlastname").val() != "" &&
      $("#txtfirstname").val() != "" &&
      $("#txtemail").val() != "" &&
      $("#teacherPermission").val() != "" &&
      mutchPass() == true
    ) {
      $.ajax({
        url: "php/signup.php",
        type: "POST",
        data: frm_data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        beforeSend: function () {
          //code here
        },
        success: function (data) {
          alert("login failure....!");
          // if (data == "success") {
            
          //   cleartxt();
          // }
          // if (data == "failure") {
          //   alert("Email already registered..!");
          //   $("txtemail").val("");
          // }
        },
        error: function () {
          alert("register success..!");
            window.open("index.php", "_parent");
          cleartxt();
        }
      });
    } else {
      alert("please input field..!");
    }
  });
  //   check email
  $("form #txtemail").on("input", function () {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var email = $(this).val();
    if (emailRegex.test($(this).val())) {
      $(this).css("color", "rgb(0, 0, 0)");
      va1 = true;
    } else {
      $(this).css("color", "rgb(241, 114, 114)");
      // $("form .fb-email").css("display", "block");
    }
  });
  // check pass
  $("form #txtpass").on("input", function () {
    var pass = $(this).val();
    if ($(this).val().length < 8) {
      $(this).css("color", "rgb(241, 114, 114)");
      //   $("form .fb-pass").css("display", "block");
    } else {
      $(this).css("color", "rgb(0, 0, 0)");
    }
  });
  $("form #txtconpass").on("input", function () {
    var pass = $(this).val();
    if ($(this).val().length < 8) {
      $(this).css("color", "rgb(241, 114, 114)");
      //   $("form .fb-pass").css("display", "block");
    } else {
      $(this).css("color", "rgb(0, 0, 0)");
    }
  });
  function isValidPassword($password) {
    // Regular expression to check for:
    // - At least one letter [a-zA-Z]
    // - At least one digit [0-9]
    // - At least one special character [!@#$%^&*(),.?":{}|<>]
    // - Minimum 8 characters in total
    $pattern =
      '/^(?=.*[a-zA-Z])(?=.*d)(?=.*[!@#$%^&*(),.?":{}|<>])[a-zA-Zd!@#$%^&*(),.?":{}|<>]{8,}$/';

    return preg_match($pattern, $password);
  }
  function mutchPass() {
    if ($("form #txtconpass").val() == $("form #txtpass").val()) return true;
    else return false;
  }
});
