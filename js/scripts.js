/* Old IE (<= 8) HTML5 tags */
document.createElement('HEADER');
document.createElement('FOOTER');
document.createElement('ASIDE');
document.createElement('ARTICLE');
document.createElement('MARK');
Function.prototype.clone = function() {
	var that = this;
	var temp = function temporary() { return that.apply(this, arguments); };
	for( key in this ) {
		temp[key] = this[key];
	}
	return temp;
};

(function($) {



	$.fn.isCorrectRequest = function() {

		$(this).find('input[data-placeholder], textarea[data-placeholder]').each(function() {
			var placeholder = $(this).attr('data-placeholder');
			$(this).removeClass('placeholder');
			if (($(this).val() === undefined) || ($(this).val() == placeholder)) {
				$(this).val('');
			}
		});

		var nameInput = $(this).find('[name = name]');
		var emailInput = $(this).find('[name = email]');
		var telephoneInput = $(this).find('[name = phone]');
		nameInput.val($.trim(nameInput.val()));
		emailInput.val($.trim(emailInput.val()));
		telephoneInput.val($.trim(telephoneInput.val()));

		if ($(this).is('[name = email]'))
		{
			if(nameInput.val().length === 0 || telephoneInput.val().length === 0 || emailInput.val().length === 0)
			{
				$('span.error').addClass ('visible');

				$('input[data-placeholder], textarea[data-placeholder]').each(function() {
					var placeholder = $(this).attr('data-placeholder');
					if ((($(this).val() !== undefined) && ($(this).val().length > 0)) && ($(this).val() != placeholder)) {
						$(this).removeClass('placeholder');
					} else {
						$(this).val(placeholder);
						$(this).addClass('placeholder');
					}
				});
				return false;
			}
		}
		else
		{
			if(nameInput.val().length === 0 || telephoneInput.val().length === 0)
			{
				$('span.error').addClass ('visible');

				$('input[data-placeholder], textarea[data-placeholder]').each(function() {
					var placeholder = $(this).attr('data-placeholder');
					if ((($(this).val() !== undefined) && ($(this).val().length > 0)) && ($(this).val() != placeholder)) {
						$(this).removeClass('placeholder');
					} else {
						$(this).val(placeholder);
						$(this).addClass('placeholder');
					}
				});
				return false;
			}
		}

		var form = $(this);
		var formData = form.serialize();
		var url = '/копия/letter.php';
		$.ajax({
			type: 'POST',
			url: url,
			data: formData,
			processData: false,
			dataType: 'text',
			context: this,
			async: false,
			// success: function(data)
			// {
			// 	document.location.pathname = '/копия/index.php';
			// },
			// error: function(answer)
			// {
			// 	$('span.error').addClass ('visible');
			// }
		});
	};
})(jQuery);

/* Adding blocks, transform blocks, only for correct display */
$(document).ready(function() {

	$('a[rel*=leanModal]').leanModal({ top : 115, closeButton: ".modal_close" });	

	$('.counts a').click(function(e){
		$('html,body').scrollTo(this.hash, this.hash);
		e.preventDefault();
	});

	$('.complete a').click(function () {
		$('.complete').fadeOut('slow', function () {
			// Animation complete.
		});
	});

	carouselInstance = $("#carousel-gallery, #carousel-gallery2, #carousel-gallery3, #carousel-gallery4, #carousel-gallery5, #carousel-gallery6").touchCarousel({				
		itemsPerPage: 1,				
		scrollbar: false,
		scrollbarAutoHide: true,
		scrollbarTheme: "dark",				
		pagingNav: false,
		snapToItems: false,
		scrollToLast: false,
		useWebkit3d: true,				
		loopItems: false
	}).data('touchCarousel');	

	jQuery("#slider").nivoSlider({
		effect:"fade",
		slices:15,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0,
		directionNav:false,
		controlNav:true,
		controlNavThumbs:false,
		pauseOnHover:false,
		manualAdvance:false
	});

	$('.error a').click(function () {
		$(this).closest('.error').removeClass('visible');
	});

	$(".fancybox").fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',

		helpers : {
			title : {
				type : 'over'
			}
		}
	});

	$('input[data-placeholder], textarea[data-placeholder]').each(function() {
		var placeholder = $(this).attr('data-placeholder');
		if ((($(this).val() !== undefined) && ($(this).val().length > 0)) && ($(this).val() != placeholder)) {
			$(this).removeClass('placeholder');
		} else {
			$(this).val(placeholder);
			$(this).addClass('placeholder');
		}
		$(this).focusin(function() {
			$(this).removeClass('placeholder');
			if (($(this).val() === undefined) || ($(this).val() == placeholder)) {
				$(this).val('');
			}
		});
		$(this).focusout(function() {
			if (($(this).val() === undefined) || ($(this).val() == '') || ($(this).val() == placeholder)) {
				$(this).val(placeholder);
				$(this).addClass('placeholder');		
			}
		});		
	});

	var set_slide = function(selector, slide) {
		$(selector).text(slide);
	}
	
	/* END PAVEL'S CODE */
	
	/* 
	
	!old version with background and animation 
	
  	var __set_slide = function(selector, slide) {
	  	$(selector).each(function() {
	  		var position = slide*400+300;
	  		var block = $(this);
	  		var shift = function() {
	  			block.css('background-position', '0 '+position+'px');
	  			position -= 100;
	  		}
	  		setTimeout(shift, 60);
	  		setTimeout(shift, 120);
	  		setTimeout(shift, 180);
	  		setTimeout(shift, 240);
	  	});
  	}
  	
  	*/





  	var time = new Date();
  	var target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
  	target_time = target_time.valueOf()+1000*60*60*24;



  	var tick = function(init) {
  		if (init == undefined) {
  			init = false;
  		}
  		var current_time = new Date();
  		current_time = current_time.valueOf();
  		if (current_time > target_time) {
  			var time = new Date();
  			target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
  			target_time = target_time.valueOf()+1000*60*60*24;			
  		}

  		t_last = new Date();
  		t_curr = new Date();
  		t_last.setMonth(t_curr.getMonth()+1,1);
  		t_last.setDate(0);
  		set_slide('span.day1Play', t_last.getDate()-t_curr.getDate());

  		var time_diff = Math.floor((target_time - current_time)/1000);	
  		var second_2 = time_diff % 10; time_diff = Math.floor(time_diff/10);
  		var second_1 = time_diff % 6; time_diff = Math.floor(time_diff/6);
  		var minute_2 = time_diff % 10; time_diff = Math.floor(time_diff/10);
  		var minute_1 = time_diff % 6; time_diff = Math.floor(time_diff/6);
  		var hour_2 = Math.floor(time_diff/10);
  		var hour_1 = time_diff % 10;
  		set_slide('span.secondPlay', second_2);
  		if ((second_2 == 9) || init) {set_slide('span.second6Play', second_1);
  		if ((second_1 == 5) || init) {set_slide('span.minutePlay', minute_2);
  		if ((minute_2 == 9) || init) {set_slide('span.minute6Play', minute_1);
  		if ((minute_1 == 5) || init) {set_slide('span.hourPlay', hour_1);
  		if ((hour_2 == 9) || init) {set_slide('span.hour2Play', hour_2);}}}}}
  	}
  	tick(true);
  	setInterval(tick, 1000);

  	$('.scroll-animate').each(function () {
  		var block = $(this);
  		$(window).scroll(function() {
  			var top = block.offset().top;
  			var bottom = block.height()+top;
  			top = top - $(window).height() + 300;
  			var scroll_top = $(this).scrollTop();
  			if ((scroll_top > top) && (scroll_top < bottom)) {
  				if (!block.hasClass('animate')) {
  					block.addClass('animate');
  					block.trigger('animateIn');
  				}
  			} else {
  				block.removeClass('animate');
  				block.trigger('animateOut');
  			}
  		});				

  	});

  	$('.counts em').each(function() {
  		$(this).attr('data-number', parseInt($(this).text()));
  	});

  	$('.counts').on('animateIn', function() {
  		$(this).find('em').each(function() {
  			var count =  parseInt($(this).attr('data-number'));
  			var block = $(this);
  			var timeout = null;
  			var step = 1;
  			timeout = setInterval(function() {
  				if (step == 40) {
  					block.text(count.toString());
  					clearInterval(timeout);
  				} else {
  					block.text((Math.floor(count*step/25)).toString());
  					step++;
  				}
  			}, 60);
  		});
  	});

  	$('.tasks, .furniture').on('animateIn', function() {
  		var inter = 0;
  		$(this).find('.fr').each(function() {
  			var block = $(this);
  			setTimeout(function() {
  				block.addClass('slideLeft');
  			}, inter*1200);
  			inter++;
  		});
  	}).on('animateOut', function() {
  		$(this).find('.fr').each(function() {
  			$(this).removeClass('slideLeft');
  		});
  	});

  	$('.tasks, .furniture').on('animateIn', function() {
  		var inter = 0;
  		$(this).find('.fl').each(function() {
  			var block = $(this);
  			setTimeout(function() {
  				block.addClass('slideRight');
  			}, inter*600);
  			inter++;
  		});
  	}).on('animateOut', function() {
  		$(this).find('.fl').each(function() {
  			$(this).removeClass('slideRight');
  		});
  	});

  	$('.reasons').on('animateIn', function() {
  		var inter = 0;
  		$(this).find('.fade').each(function() {
  			var block = $(this);
  			setTimeout(function() {
  				block.css('opacity', 1);
  			}, inter*500);
  			inter++;
  		});
  	}).on('animateOut', function() {
  		$(this).find('.fade').each(function() {
  			$(this).css('opacity', 0.01);
  		});
  	});

  	$('form').submit(function() {
  		$(this).isCorrectRequest();
  		return false;
  	});



  });





$(function(){

	/*** POPUP SCRIPTS ***/
	var magnificPopup = $.magnificPopup.instance,
			initialWidth = $(window).width();


	$(".popup-link").magnificPopup({
		type: "inline",
		removalDelay: 500,
		mainClass: "popup-fade",
		overflowY: "hidden",
		closeMarkup: '<button title="Закрыть" class="mfp-close"></button>',
		callbacks: {
			open: function(){				
				this.wrap.removeAttr("tabindex");
				$("body").css("width", initialWidth +"px");	
				buildInnerPopup();
			}

		}

	});


	function buildInnerPopup(){

		var numbPopup = magnificPopup.st.el.closest(".block-hit").data("numb");
				tmp = "#carousel-" + numbPopup,
				owlCarousel = $(tmp),
				controlsWrap = owlCarousel.siblings(".my-controls-wrap"),
				prev = controlsWrap.find(".my-prev"),
				thsPopup = ".popup-" + numbPopup,
				next = controlsWrap.find(".my-next");

		
		owlCarousel.owlCarousel({
			items: 1,
			navText: "",
			navRewind: false,
			nav: false,
			mergeFit: false,
			mouseDrag: false,
			dots: false,
			onInitialized: function(event) {

				controlsWrap.find(".current-slide").html('1');
				controlsWrap.find(".all-numbs").html(this.items().length);

				if( owlCarousel.find(".popup-slide-img").length  <= 6 ){
						owlCarousel.parent().find(".my-controls-wrap").hide();
						owlCarousel.trigger("destroy.owl.carousel");
				}

			}
		});
		
		
		owlCarousel.on("changed.owl.carousel", function(event) {

			controlsWrap.find(".current-slide").html(event.item.index +1);

			if( (event.item.index + 1) === event.item.count ){
				next.addClass("disabled");

				if( next.hasClass("disabled") ){
					prev.removeClass("disabled");
				}

			}else if( (event.item.index) === 0 ){
				prev.addClass("disabled");

				if( prev.hasClass("disabled") ){
					next.removeClass("disabled");
				}

			}else{
				prev.removeClass("disabled");
				next.removeClass("disabled");
			}

		});


		owlCarousel.on("initialized.owl.carousel", function(event){
			if(event.item.index +1 === event.item.count ){
				next.removeClass("disabled");
			}
		});

		// Навигация карусели
		controlsWrap.find(".my-prev").on("click", function(){
			owlCarousel.trigger("prev.owl.carousel");
		});

		controlsWrap.find(".my-next").on("click", function(){
			owlCarousel.trigger("next.owl.carousel");
		});


		// FANCY-BOX
		var $popupFancybox = $(thsPopup).find(".popup-fancybox");

		$popupFancybox.fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade'
		});


		function checkSimilar(){
			
			var	activeTab = $(thsPopup).find(".tab-item.active"),
					hrefFirstImage = activeTab.find(".popup-slide-img:first").attr("href"),
					thsPopupFancyBox = activeTab.children(".popup-big-wrap-image").children(".popup-fancybox"),
					objThbm = activeTab.find(".popup-slide-img");


			function checkSimilarInner(){
				for( var i = 0; i < objThbm.length; i++){

					if( thsPopupFancyBox.attr("href") === objThbm.eq(i).attr("href") ) {
						activeTab.find(".popup-slide-img").eq(i).removeClass("popup-fancybox");

					}else{
						activeTab.find(".popup-slide-img").eq(i).addClass("popup-fancybox");
					}

				}

			}

			checkSimilarInner();
		};
		checkSimilar();


		// Смена картинок при клике на миниатюры
		$(thsPopup).find(".popup-slide-img").on("click", function(){
			var $this = $(this),
					src = $this.attr("href");

			$(thsPopup).find(".tab-container").children(".tab-item.active").find(".popup-big-wrap-image").children(".popup-fancybox").attr("href", src).children("img").attr("src", src);
				checkSimilar();
			return false;
		});


		$(thsPopup).find(".tab").on("click", function(){
				owlCarousel.trigger("refresh.owl.carousel");
				checkSimilar();
		});



	}//END function buildInnerPopup


	$(".tab-container").easytabs({
		updateHash: false
	});

	$(".scroll-cont").mCustomScrollbar({
		theme:"dark"
	});


});

// Params
let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
    loop: true,
    speed:1000,
    autoplay:{
        delay:3000
    },
    loopAdditionalSlides: 10,
    grabCursor: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        init: function(){
            this.autoplay.stop();
        },
        imagesReady: function(){
            this.el.classList.remove('loading');
            this.autoplay.start();
        },
        slideChangeTransitionEnd: function(){
            let swiper = this,
                captions = swiper.el.querySelectorAll('.caption');
            for (let i = 0; i < captions.length; ++i) {
                captions[i].classList.remove('show');
            }
            swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
        },
        progress: function(){
            let swiper = this;
            for (let i = 0; i < swiper.slides.length; i++) {
                let slideProgress = swiper.slides[i].progress,
                    innerOffset = swiper.width * interleaveOffset,
                    innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
            }
        },
        touchStart: function() {
            let swiper = this;
            for (let i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
            }
        },
        setTransition: function(speed) {
            let swiper = this;
            for (let i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                    speed + "ms";
            }
        }
    }
};
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
    loop: true,
    loopAdditionalSlides: 10,
    speed:1000,
    spaceBetween: 5,
    slidesPerView: 5,
    centeredSlides : true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    direction: 'vertical',
    on: {
        imagesReady: function(){
            this.el.classList.remove('loading');
        },
        click: function(){
            mainSlider.autoplay.stop();
        }
    }
};
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;