	jQuery(document).ready(function() {

		var pagethanks = jQuery('.page-thanks');
	jQuery(pagethanks).height(jQuery(window).height());

	var bodyheight = jQuery(window).height();
	jQuery('body').css('min-height', bodyheight+'px');


	jQuery('.page-thanks .thanks-content span.x-button').click(function(){
		jQuery('.page-thanks').css('display', 'none');
	});

		jQuery('.servic-bar ul.parent-nav li ul').addClass('child-list');


	if(jQuery('header .header-nav .sf-menu li').children('ul')){
		jQuery('header .header-nav .sf-menu li ul').parent().addClass('parent');
	}


	jQuery("a[href*='#why-us']").mPageScroll2id();


	/*jQuery('section.single .sidebar nav.servic-bar ul li').click(function(){
		jQuery('section.single .sidebar nav.servic-bar ul .active').removeClass('active');
		jQuery(this).addClass('active');
		if(jQuery('section.single .sidebar nav.servic-bar ul .active').hasClass('active')){
			jQuery('section.single .sidebar nav.servic-bar ul .active ul').slideToggle();
		}
	})*/



jQuery('.btn-call-1').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	}).attr('data-mfp-src', '#popup-form');

jQuery('.btn-call-2').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	}).attr('data-mfp-src', '#form-2');



	jQuery('section.why-us ul.tabs li').click(function(){
		jQuery('section.why-us ul.tabs .active').removeClass('active');
		jQuery(this).addClass('active');

		if(jQuery('section.why-us ul.tabs li.col-1').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-1').addClass('active');
		}
		else if(jQuery('section.why-us ul.tabs li.col-2').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-2').addClass('active');
		}
		else if(jQuery('section.why-us ul.tabs li.col-3').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-3').addClass('active');
		}
		else if(jQuery('section.why-us ul.tabs li.col-4').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-4').addClass('active');
		}
		else if(jQuery('section.why-us ul.tabs li.col-5').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-5').addClass('active');
		}
		else if(jQuery('section.why-us ul.tabs li.col-6').hasClass('active')) {
			jQuery('section.why-us .descr').removeClass('active');
			jQuery('section.why-us .descr.col-6').addClass('active');
		}
	})

	jQuery(".owl-carousel").owlCarousel({
      items: 1,
    	slideSpeed : 200,
    	nav : true,
    	navText: '',
    	autoplay: true,
    	autoplayTimeout:5000,
    	touchDrag: false,
    	mouseDrag: false,
    	itemsScaleUp : true,
    	loop: true,
  });

	jQuery('ul.sf-menu').superfish({
		speed: 'fast',
		speedOut: 'fast',
		delay: 200,
	});

	//SVG Fallback
	if(!Modernizr.svg) {
		jQuery("img[src*='svg']").attr("src", function() {
			return jQuery(this).attr("src").replace(".svg", ".png");
		});
	};

	//Documentation & Example: https://github.com/agragregra/uniMail
	jQuery("#slide-form").submit(function() {
		var str = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: "/wp-content/themes/gk-resurs/raschet.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Заявка отправлена</div>';
					jQuery('.page-thanks').css('display', 'block');
					setTimeout(function() {
						// Done Functions
						jQuery('#slide-form').trigger('reset');
						jQuery('.page-thanks').css('display', 'none');
					}, 3000);
				}
				else { result = msg; }
					jQuery('.note3').html(result);
			}
		})
		return false;
	});


	//Заказать звонок
	//Documentation & Example: https://github.com/agragregra/uniMail
	jQuery("#popup-form").submit(function() {
		var str = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: "/wp-content/themes/gk-resurs/mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Заявка отправлена</div>';
					jQuery('.page-thanks').css('display', 'block');
					jQuery.magnificPopup.close();
					setTimeout(function() {
						jQuery('#popup-form').trigger('reset');
						jQuery('.page-thanks').css('display', 'none');
					}, 3000);
				}
				else { result = msg; }
					jQuery('.note').html(result);
			}
		})
		return false;
	});



	//Оставить сообщение
	//Documentation & Example: https://github.com/agragregra/uniMail
	jQuery("#form-2").submit(function() {
		var str = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: "/wp-content/themes/gk-resurs/mail2.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>';
					jQuery('.page-thanks').css('display', 'block');
					jQuery.magnificPopup.close();
					setTimeout(function() {
						jQuery('#form-2').trigger('reset');
						jQuery('.page-thanks').css('display', 'none');
					}, 3000);
				}
				else {result = msg;}
				jQuery('.note2').html(result);
			}
		});
		return false;
	});

});
