$(document).ready(function () {
  //   $("form #btnback").on("click", function () {
  //     window.open("index.php", "_parent");
  //   });
  $(".container").css("display","block");
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
        var load='<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
        $('.container-fluid').append(load);
        $(".container").css("display","none");
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
                alert("OPT code already send to your email.");
                // $(".container").css("display","none");
                $(".lds-roller").remove();
                window.open("optconfirm.php","_parent");
                $(".container").css("display","block");
                $("form #txtemail").val("");
            }
          },
          error: function () {
            setTimeout(()=>{
              $(".container").css("display","block");
              $(".lds-roller").remove();
           },2500)
           setTimeout(()=>{
            alert("Invalid email!");
           },2800)
          }
        });
      } else {
        alert("Please input your email!");
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
