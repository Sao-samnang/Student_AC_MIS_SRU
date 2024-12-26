$(document).ready(function(){
    $("form #txtPassword").keydown(function(){
        $('#txtPassword').attr('type', 'password');
        $("#ShowPw").prop('checked', false);     // remove check
    })
    $('form #ShowPw').on('change', function() {
        if ($(this).is(':checked')) {
            $('#txtPassword').attr('type', 'text'); // Show password
        } else {
            $('#txtPassword').attr('type', 'password'); // Hide password
        }
    });
    $('form .btnLogin').on('click', function() {
        window.open('http://127.0.0.1:5500/dashboard.html', '_parent'); // Replace with your URL
    });
})