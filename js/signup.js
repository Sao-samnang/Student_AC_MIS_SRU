$(document).ready(function(){
    $("form #txtpass").keydown(function(){
        $('#txtpass').attr('type', 'password');    // remove check
    })
    $("form #txtconpass").keydown(function(){
        $('#txtconpass').attr('type', 'password');    // remove check
    })
    // action register
    function register(frm_data){
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
               
            },
            error: function () {
              alert("login failure....!")
            }
        });
    }
    $(".container .btnLogin").on("click",function(){
        // alert("assss")
        var eThis = $(".container form");
        var frm = eThis.closest("form.frm");
        //console.log(frm)
        var frm_data = new FormData(frm[0]);
        register(frm_data);
    })
})