$("#open_nav").click(function(){
    $("#slide_nav").css({'width' : '320px'});
    $(".overlay").show();
    $(".close_btn").show();
});

$(".close_btn").click(function(){
    $("#slide_nav").css({'width' : '0'});
    $(".overlay").hide();
    $(".close_btn").hide();
});