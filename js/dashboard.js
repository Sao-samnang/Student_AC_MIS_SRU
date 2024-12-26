$(document).ready(function(){
    // menu toggle
    $('#checkmenu').on('change', function() {
        if ($(this).is(':checked')) {
            $(".menu-side").css("width","230px"); // Hide the menu
            $(".menu-side nav ul li").mouseover(function() {
                $(this).css("background-color", "#4B088A"); 
            }).mouseout(function() {
                $(".menu-side nav ul li").css("background-color","#ffffff00");
            });
            $(".menu-side .btnlogout").mouseover(function() {
                $(this).css("background-color", "#4B088A"); 
            }).mouseout(function() {
                $(this).css("background-color", "#ffffff00"); 
            });
        } else {
            $(".menu-side").css("width","53px"); // Show the menu
            $(".menu-side nav ul li").hover(function(){
                $(this).css("background-color","#ffffff00");
            })
            $(".menu-side .btnlogout").hover(function(){
                $(this).css("background-color","#ffffff00");
            })
        }
    });
    // menu toggle end
})