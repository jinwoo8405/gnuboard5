$( document ).ready( function() {
    wow = new WOW({
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
        }
    });
    wow.init();
        
});

$(document).ready(function($) {
		
        $(".scroll_move").click(function(event){         
			if($(this).attr('href').startsWith( '#' )) {
                event.preventDefault();
				var target = $(this).attr('href').replace('#','.');
				var loc = $(target).offset().top - 50;
				//alert(loc);
                $('html,body').animate({scrollTop:loc}, 500);
			}
        });

});

//$(window).load(function(){
//    var a=$("#bo_gall .gall_img img").outerHeight();
//    $("#bo_gall .gall_img span").css("line-height",a+'px');
//});
window.onload = function(){$(window).resize();
	var a=$("#bo_gall .gall_img img").outerHeight();
    $("#bo_gall .gall_img span").css("line-height",a+'px');

	$(window).resize();
}