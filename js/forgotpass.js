$(document).ready(function () {
  //   $("form #btnback").on("click", function () {
  //     window.open("index.php", "_parent");
  //   });
  $(".container").css("display", "block");
  $(document).ready(function () {
    $("form #btnotp").on("click", function () {
      var eThis = $(this);
      var frm = eThis.closest("form.frmotp");
      var email = $("form #txtemail").val();
      //console.log(frm)
      //   alert(email)
      var frm_data = new FormData(frm[0]);
      if (email != "" && isValidEmail(email) == true) {
        //   alert(email)
        var load =
          '<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
        $(".container-fluid").append(load);
        $(".container").css("display", "none");
        $.ajax({
          url: "php/sendOTP.php",
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
            if (data.status === "success") {
              $(".container-fluid .mss").css("display", "flex");
              $(".container-fluid .mss .mss1")
                .empty()
                .append(
                  '<lottie-player src="https://lottie.host/b0c5bfda-ee44-4014-905c-83f5d46ff100/dlQebRk9lL.json" background="none" speed="1" style="width: 90px; height: 90px" autoplay direction="1" mode="normal"></lottie-player>'
                );
              $(".container-fluid .mss .mss2")
                .empty()
                .append("OPT code already send to your email.");
              setTimeout(() => {
                $(".lds-roller").remove();
                window.location.href = data.redirect;
                $(".container").css("display", "block");
                $(".container-fluid .mss").css("display", "none");
                $(".container").css("display", "block");
                $("form #txtemail").val("");
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
            $(".container-fluid .mss .mss2").empty().append("Invalid email!");
            setTimeout(() => {
              $(".container-fluid .mss").css("display", "none");
              $(".lds-roller").remove();
              $(".container").css("display", "block");
            }, 4000);
          }
        });
      } else {
        $(".container-fluid .mss").css("display", "flex");
        $(".container-fluid .mss .mss1")
          .empty()
          .append(
            '<dotlottie-player src="https://lottie.host/31dd2f33-19b8-4735-9c22-15b3c6294a94/2Ksss79WSP.lottie" background="transparent" speed="1" style="width: 90px; height: 90px" autoplay></dotlottie-player>'
          );
        $(".container-fluid .mss .mss2")
          .empty()
          .append("Please input your email!");
        setTimeout(() => {
          $(".container-fluid .mss").css("display", "none");
          $(".container").css("display", "block");
        }, 4000);
      }
    });
  });

  function isValidEmail(email) {
    // Regular expression for validating email
    var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return pattern.test(email); // Returns true if valid, false if not
  }
  var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  $("form #txtemail").on("input", function () {
    var email = $(this).val();
    if (pattern.test(email)) {
      $(this).css("color", "rgb(0, 0, 0)");
    } else {
      $(this).css("color", "rgb(241, 114, 114)");
      // $("form .fb-email").css("display", "block");
    }
  });
});
