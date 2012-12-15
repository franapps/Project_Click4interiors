$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 400,
        itemMargin: 20,
        move: 1,
        slideshow: true,
        slideshowSpeed: 5000,
        start: function(slider){
            $(".flex-caption").each(function(){
                var $t = $(this);
                console.log($t.height());
                $t.css("margin-top", $t.height()*-1);
            });
        }
    });
});