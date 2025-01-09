$(document).ready(function () {
    //   $("form #btnback").on("click", function () {
    //     window.open("index.php", "_parent");
    //   });
  
    $(document).ready(function () {
      $("form #btnotp").on("click", function () {
        var eThis = $(this);
        var frm = eThis.closest("form.frmotpveri");
        var otp = $("form #opt").val();
        //console.log(frm)
          alert(otp)
        var frm_data = new FormData(frm[0]);
        if (otp.length !="") {
          $.ajax({
            url: "php/checkemail.php",
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
                  $(".container").css("display","none");
                  var load='<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
                  $('.container-fluid').append(load);
                  setTimeout(function () {
                      $(".lds-roller").remove();
                  }, 3000);
                  setTimeout(function () {
                      alert("Success.");
                    //   window.open("optconfirm.php","_parent");
                  }, 3500);
              }
            },
            error: function () {
              alert("Invalid OTP code.");
            }
          });
        } else {
          alert("Please input your OTP code.");
        }
      });
    });
  
  });
  