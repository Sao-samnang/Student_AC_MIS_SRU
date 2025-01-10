$(document).ready(function () {
  $("form #txtnewpass").keydown(function () {
    $("#txtnewpass").attr("type", "password"); // remove check
  });
  $("form #txtconpass").keydown(function () {
    $("#txtconpass").attr("type", "password"); // remove check
  });
  //
  $(".container").css("display", "block");
  $(document).ready(function () {
    $("form #btnnewpass").on("click", function () {
      var eThis = $(this);
      var frm = eThis.closest("form.frmnewpass");
      var pass = $("form #txtconpass").val();
      var newpass=$("form #txtnewpass").val();
      //console.log(frm)
      //   alert(email)
      var frm_data = new FormData(frm[0]);
      if (pass != "" && newpass !="" && mutchPass()==true) {
        //   alert(email)
        var load =
          '<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
        $(".container-fluid").append(load);
        $(".container").css("display", "none");
        $.ajax({
          url: "php/changepass.php",
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
            if (data === "success") {
              setTimeout(() => {
                $(".lds-roller").remove();
              }, 3000);
              setTimeout(() => {
                alert("Successfully.");
                window.open("index.php","_parent");
                $(".container").css("display", "block");
                $("form #txtemail").val("");
              }, 3300);
            }
          },
          error: function () {
            setTimeout(() => {
              $(".container").css("display", "block");
              $(".lds-roller").remove();
            }, 2500);
            setTimeout(() => {
              alert("Invalid password!");
            }, 2800);
          }
        });
      } else {
        alert("Please input your password!");
      }
    });
  });
  //
  $("form #txtnewpass").on("input", function () {
    var pass = $(this).val().trim();
    if (isValidPassword(pass) || pass.length == 0) {
      $(this).css("color", "rgb(0, 0, 0)");
      $("form .fb-pass").css("display", "none");
    } else {
      $(this).css("color", "rgb(241, 114, 114)");
      $("form .fb-pass").css("display", "block");
    }
    // console.log('Password:', pass, 'Valid:', isValidPassword(pass));
  });
  $("form #txtconpass").on("input", function () {
    var pass = $(this).val().trim();
    if (isValidPassword(pass) || pass.length == 0) {
      $(this).css("color", "rgb(0, 0, 0)");
      $("form .fb-conpass").css("display", "none");
    } else {
      $(this).css("color", "rgb(241, 114, 114)");
      $("form .fb-conpass").css("display", "block");
    }
  });
  function isValidPassword(password) {
    // Regular expression to check for:
    // - At least one letter [a-zA-Z]
    // - At least one digit [0-9]
    // - At least one special character [!@#$%^&*(),.?":{}|<>]
    // - Minimum 8 characters in total
    var pattern =
      /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;

    return pattern.test(password);
  }
  function mutchPass() {
    if (
      $("form #txtnewpass").val().length > 5 &&
      $("form #txtnewpass").val().length > 5 &&
      $("form #txtconpass").val() == $("form #txtnewpass").val()
    )
      return true;
    else return false;
  }
  //
});
