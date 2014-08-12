$(document).ready(function() {

		/* Hide form (Initial state) */
		$(".contact-form").hide();
		$('#gotop>img').hide();

		/* Show contact form */
		$("#show-form").click(function() {
			$(".contact-form").slideDown('slow');
			$('#show-form').hide();
		});

		/* Hide form back */
		$("#cancel").click(function() {
			$(".contact-form").slideUp('slow');
			$('#show-form').show();
		});

		/* Hide placeholder */
		$('#contact-us :input').focusin(function() {
			$(this).data('placeholder',$(this).attr('placeholder'))
			$(this).attr('placeholder', '');
		});
		/* Show placeholder */
		$('#contact-us :input').focusout(function() {
			$(this).attr('placeholder', $(this).data('placeholder'));
		});

		$('a[href=#about]').click(function(){
			$('html, body').animate({
				scrollTop: $("#about").offset().top
			}, 2000);
		});
		
		$('a[href=#services]').click(function(){
	        $('html, body').animate({
	           	scrollTop: $("#services").offset().top
	           }, 2000);
 			});
 
		$('a[href=#contacts]').click(function(){
			$('html, body').animate({
				scrollTop: $("#contacts").offset().top
			}, 2000);
		});

		$('a[href=#top]').click(function(){
			$('html, body').animate({
				scrollTop: $("#top").offset().top
			}, 2000);
		});

		$(window).scroll(function(event) {
		    var scroll = $(window).scrollTop();

		    if(scroll > 0) {
		    	$('.menu').addClass('menu-moved');
		    	$('#gotop>img').fadeIn('slow');
		    }
		    else {
		    	$('.menu').removeClass('menu-moved');
		    	$('#gotop>img').fadeOut('slow');
		    }
		});


		


		/* Feedback send via jQuery.post() */
		$('#submit').click(function() {
			var data = $('#contact-us :input').serializeArray();

			$.post($('#contact-us').attr('action'), data, function(worker) {
			$('.info').html(worker);
		});

			clearInput();
		});

		$('#contact-us').submit(function() {
			return false;
		});

		function clearInput() {
			$('#contact-us :input').each(function() {
				$(this).val('');
			});
		}

});