$(document).ready(function () {
  //   $("form #btnback").on("click", function () {
  //     window.open("index.php", "_parent");
  //   });
  $(document).ready(function(){
    $("form #btnreotp").on("click", function () {
      $("form #txtid").val('2');
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
          if (data =="success") {
            setTimeout(()=>{
              $(".lds-roller").remove();
            },2500)
            setTimeout(()=>{
              alert("OTP code already send to your mail.");
              $(".container").css("display", "block");
            },2800)
          }
        },
        error: function () {
          setTimeout(()=>{
            $(".lds-roller").remove();
          },2500)
          setTimeout(()=>{
            alert("Can't find your email.");
            $(".container").css("display", "block");
          },2800)
        }
      });
    });
  })
// 
  $(document).ready(function () {
    $("form #btnotp").on("click", function () {
      $("form #txtid").val('1');
      var eThis = $(this);
      var frm = eThis.closest("form.frmotpveri");
      var otp = $("form #opt").val();
      var email=$("form #txtmail").val();
      //console.log(frm)
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
            if (data.status== "success") {
              setTimeout(() => {
                $(".lds-roller").remove();
              }, 2500);
              setTimeout(() => {
                alert("Successfully.")
                window.location.href = data.redirect;
                $(".container").css("display", "block");
                $("form #opt").val("");
              }, 2800);
            }
          },
          error: function () {
            setTimeout(() => {
              $(".container").css("display", "block");
              $(".lds-roller").remove();
            }, 2500);
            setTimeout(() => {
              alert("Invalid OTP code!");
            }, 2800);
          }
        });
      } else {
        alert("Please input your OTP code.");
      }
    });
  });
});
