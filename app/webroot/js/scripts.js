$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        move: 1,
        itemWidth: 600,
        slideshow: true,
        slideshowSpeed: 5000,
        controlNav: "thumbnails",
        start: function(slider){
            $(".flex-caption").each(function(){
                var $t = $(this);
                console.log($t.height());
                $t.css("margin-top", $t.height()*-1-10);
            });
        }
    });
});