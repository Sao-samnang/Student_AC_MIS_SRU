$(document).ready(function () {
  //   $("form #btnback").on("click", function () {
  //     window.open("index.php", "_parent");
  //   });
  $(document).ready(function () {
    $("form #btnreotp").on("click", function () {
      $("form #txtid").val("2");
      var eThis = $(this);
      var frm = eThis.closest("form.frmotpveri");
      var frm_data = new FormData(frm[0]);
      var load =
        '<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
      $(".container-fluid").append(load);
      $(".container").css("display", "none");
      $.ajax({
        url: "php/checkemailOTP.php",
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
          if (data == "success") {
            $(".container-fluid .mss").css("display", "flex");
            $(".container-fluid .mss .mss1")
              .empty()
              .append(
                '<lottie-player src="https://lottie.host/b0c5bfda-ee44-4014-905c-83f5d46ff100/dlQebRk9lL.json" background="none" speed="1" style="width: 90px; height: 90px" autoplay direction="1" mode="normal"></lottie-player>'
              );
            $(".container-fluid .mss .mss2")
              .empty()
              .append("OTP code already send to your mail.");
            setTimeout(() => {
              $(".lds-roller").remove();
              $(".container-fluid .mss").css("display", "none");
              $(".container").css("display", "block");
            }, 3500);
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
            .append("Can't find your email!");
          setTimeout(() => {
            $(".container-fluid .mss").css("display", "none");
            $(".lds-roller").remove();
            $(".container").css("display", "block");
          }, 3500);
        }
      });
    });
  });
  //
  $(document).ready(function () {
    $("form #btnotp").on("click", function () {
      $("form #txtid").val("1");
      var eThis = $(this);
      var frm = eThis.closest("form.frmotpveri");
      var otp = $("form #opt").val();
      var email = $("form #txtmail").val();
      //console.log(frm)a
      // alert(email);
      var frm_data = new FormData(frm[0]);
      if (otp.length > 5) {
        var load =
          '<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
        $(".container-fluid").append(load);
        $(".container").css("display", "none");
        $.ajax({
          url: "php/checkemailOTP.php",
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
              $(".container-fluid .mss .mss2").empty().append("Success.");
              setTimeout(() => {
                $(".lds-roller").remove();
                window.location.href = data.redirect;
                $(".container").css("display", "block");
                $("form #opt").val("");
                $(".container-fluid .mss").css("display", "none");
                $(".container").css("display", "block");
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
              .append("Invalid OTP code!");
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
          .append("Please input your OTP code.");
        setTimeout(() => {
          $(".container-fluid .mss").css("display", "none");
          $(".container").css("display", "block");
        }, 4000);
      }
    });
  });
});
