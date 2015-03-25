    (function($) {

        $home_menu      =   $('#home');
        $subpage_menu   =   $('#subpage');

        $(window).scroll(function(){
            if( $home_menu.length ){
                if ($(window).scrollTop() > 670){

                    $(".nav-wrapper").css({
                        "top": "0px",
                        "position": "fixed",
                        "z-index": "9999",
                        "width": "100%",
                        "opacity": ".90"
                    });
                    $("#nav-replace").css({
                        "min-height": "82px"
                    });
                } else {
                    $(".nav-wrapper").css({
                        "position": "relative"
                    });
                    $("#nav-replace").css({
                        "min-height": "0px"
                    });
                }
            }else if( $subpage_menu.length ){
                if ($(window).scrollTop() > 450){

                    $(".nav-wrapper").css({
                        "top": "0px",
                        "position": "fixed",
                        "z-index": "9999",
                        "width": "100%",
                        "opacity": ".90"
                    });

                    $("#nav-replace").css({
                        "min-height": "82px"
                    });

                } else {
                    $(".nav-wrapper").css({
                        "position": "relative"
                    });
                    $("#nav-replace").css({
                        "min-height": "0px"
                    });
                }
            }
            
        });
    	 var unslider = $('.slider').unslider({
            speed: 500,               //  The speed to animate each slide (in milliseconds)
            delay: 3000,              //  The delay between slide animations (in milliseconds)
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: true              //  Support responsive design. May break non-responsive designs
        });
    
	    $('.unslider-arrow').click(function(e) {
	        var fn = this.className.split(' ')[1];
	        e.preventDefault();
	        
	        //  Either do unslider.data('unslider').next() or .prev() depending on the className
	        unslider.data('unslider')[fn]();
	    });
    })(jQuery);
