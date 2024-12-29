$(document).ready(function(){
    // menu toggle
    // menuRespone();
    // function menuRespone(){
    //     $('#checkmenu').ready(function(){
    //         if($(this).val()==0){ // Hide the menu
    //             $(".menu-side nav ul li").css("width","auto"); 
    //             $(".menu-side nav").css("width","180px");
    //             $(".menu-side .btnlogout").css("width","180px");
    //         }
    //     })
    // }
    $('#checkmenu').on('change', function() {
        if ($(this).is(':checked')) {
            $(this).val(1);
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
            // 
            // if($(this).val()==1){ // Hide the menu
            //     $(".menu-side nav ul li").css("width","100%"); 
            //     $(".menu-side nav").css("width","100%");
            //     $(".menu-side .btnlogout").css("width","100%");
            // }
        } else {
            // $(this).val(0);
            $(".menu-side").css("width","55px"); // Show the menu
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