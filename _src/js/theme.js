(function($){

	$(document).ready(function() {
    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
	});

	//Function to the css rule
	function checkSize(){
    if ($(".jquery").css("display") == "block" ){

    	$('.home-button_left').on('click', function(e){
    		if($(this).hasClass('passive')){
    			e.preventDefault();
    		}
    		$(this).addClass('active');
    		$(this).removeClass('passive');
    		$('.panel-left').addClass('full-width');
    		$('.slide').addClass('left-slide');
    		$(this).find('.hidden').slideDown().addClass('active');
    	});

    	$('.left-close').on('click', function(e){
    		e.stopPropagation();
    		$('.home-button_left').removeClass('active').addClass('passive');
    		$('.panel-left').removeClass('full-width');
    		$('.slide').removeClass('left-slide');
    		$('.home-button_left').find('.hidden').slideUp().removeClass('active');
    	});




    	$('.home-button_right').on('click', function(e){
    		if($(this).hasClass('passive')){
    			e.preventDefault();
    		}
    		$(this).addClass('active');
    		$(this).removeClass('passive');
    		$('.panel-right').addClass('full-width');
    		$('.slide').addClass('right-slide');
    		$(this).find('.hidden').slideDown().addClass('active');
    	});

    	$('.right-close').on('click', function(e){
    		e.stopPropagation();
    		$('.home-button_right').removeClass('active').addClass('passive');
    		$('.panel-right').removeClass('full-width');
    		$('.slide').removeClass('right-slide');
    		$('.home-button_right').find('.hidden').slideUp().removeClass('active');
    	});



    	$('.home-button_center').on('click', function(e){
    		if($(this).hasClass('passive')){
    			e.preventDefault();
    		}
    		$(this).addClass('active');
    		$(this).removeClass('passive');
    		$('.panel-right').addClass('blur');
    		$('.panel-left').addClass('blur');
    		$(this).find('.hidden').slideDown().addClass('active');
    	});

    	$('.center-close').on('click', function(e){
    		e.stopPropagation();
    		$('.home-button_center').removeClass('active').addClass('passive');
    		$('.panel-right').removeClass('blur');
    		$('.panel-left').removeClass('blur');
    		$('.home-button_center').find('.hidden').slideUp().removeClass('active');
    	});

      console.log('Boom!');
    }
	}

})(jQuery);