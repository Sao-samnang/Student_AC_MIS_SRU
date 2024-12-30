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
          if($("txtEmail").focus()) {
              $("txtPassword").focus()
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
      var email = $("#txtEmail").val();
      var password = $("#txtPassword").val();
      // Prevent default form submission
      // 
      if(checkPassEm()==true){
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
             window.open("dashboard.html", "_parent"); // Replace with your URL
             $("form #txtEmail").val("");
             $("#txtPassword").val("");
          },
          error: function () {
            alert("login failure....!")
          }
        });
      }
    });
  });
  // email check
  function checkPassEm(){
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var va1=false;
    var va2=false;
    $("form #txtEmail").on("input", function () {
          var email = $(this).val();
            if (emailRegex.test(email)) {
              $(this).css("color", "rgb(0, 0, 0)");
              va1=true;
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
            va2=true
          }
        });
        if(va1==va2) return true;
  }
  //  
});
