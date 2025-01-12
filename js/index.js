$(document).ready(function () {
  checkPassEm();
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
  // $("form .btnLogin").on("click", function () {
  //   window.open("dashboard.html", "_parent"); // Replace with your URL
  // });
  // press key
  function KeyPressfc(event) {
    if (event.key === "Enter" || event.key === "Tab") {
      if ($("txtEmail").focus()) {
        $("txtPassword").focus();
      }
    }
  }
  // login

  $(document).ready(function () {
    $("form #btnloginForm").on("click", function () {
      // Prevent default form submission
      var eThis = $(this);
      var frm = eThis.closest("form.frm");
      //console.log(frm)
      var frm_data = new FormData(frm[0]);
      // console.log(frm_data);
      var email = $("#txtEmail").val();
      var password = $("#txtPassword").val();
      // Prevent default form submission
      //
      if ($("#txtPassword").val() == "" || $("#txtEmail").val() == "") {
        $(".container-fluid .mss").css("display", "flex");
        $(".container-fluid .mss .mss1")
          .empty()
          .append(
            '<dotlottie-player src="https://lottie.host/31dd2f33-19b8-4735-9c22-15b3c6294a94/2Ksss79WSP.lottie" background="transparent" speed="1" style="width: 90px; height: 90px" autoplay></dotlottie-player>'
          );
        $(".container-fluid .mss .mss2")
          .empty()
          .append("Please input field uername or password.");
        setTimeout(() => {
          $(".container-fluid .mss").css("display", "none");
        }, 4000);
      } else {
        if (checkPassEm() == true) {
          $.ajax({
            url: "php/loginadmin.php",
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
              if (data.status == "success") {
                $(".container-fluid .mss").css("display", "flex");
                $(".container-fluid .mss .mss1")
                  .empty()
                  .append(
                    '<lottie-player src="https://lottie.host/b0c5bfda-ee44-4014-905c-83f5d46ff100/dlQebRk9lL.json" background="none" speed="1" style="width: 90px; height: 90px" autoplay direction="1" mode="normal"></lottie-player>'
                  );
                $(".container-fluid .mss .mss2")
                  .empty()
                  .append("Login Success..!");
                setTimeout(() => {
                  window.location.href = data.redirect;
                  $("form #txtEmail").val("");
                  $("#txtPassword").val("");
                  $(".container-fluid .mss").css("display", "none");
                }, 4000);
              }
            },
            error: function () {
              $(".container-fluid .mss").css("display", "flex");
              $(".container-fluid .mss .mss1")
                .empty()
                .append(
                  '<dotlottie-player src="https://lottie.host/31dd2f33-19b8-4735-9c22-15b3c6294a94/2Ksss79WSP.lottie" background="transparent" speed="1" style="width: 90px; height: 90px" autoplay></dotlottie-player>'
                );
              $(".container-fluid .mss .mss2")
                .empty()
                .append("Invalid email or password!");
              setTimeout(() => {
                $(".container-fluid .mss").css("display", "none");
              }, 4000);
            }
          });
        }
      }
    });
  });
  // email check
  function checkPassEm() {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var va1 = false;
    var va2 = false;
    $("form #txtEmail").on("input", function () {
      var email = $(this).val();
      if (emailRegex.test(email)) {
        $(this).css("color", "rgb(0, 0, 0)");
        va1 = true;
      } else {
        $(this).css("color", "rgb(241, 114, 114)");
        // $("form .fb-email").css("display", "block");
      }
    });
    $("form #txtPassword").on("input", function () {
      var pass = $(this).val();
      if ($(this).val().length < 6) {
        $(this).css("color", "rgb(241, 114, 114)");
        //   $("form .fb-pass").css("display", "block");
      } else {
        $(this).css("color", "rgb(0, 0, 0)");
        va2 = true;
      }
    });
    if (va1 == va2) return true;
  }
  //
});
