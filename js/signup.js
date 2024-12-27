$(document).ready(function(){
    $("form #txtpass").keydown(function(){
        $('#txtpass').attr('type', 'password');    // remove check
    })
    $("form #txtconpass").keydown(function(){
        $('#txtconpass').attr('type', 'password');    // remove check
    })
})