;(function($){
	$(document).ready(function() {
		
		//handler submit event
		(function(){
			$('.form--nerve--form').submit(function(e) {
				e.preventDefault();
				$this = $(this);
				var form_data = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "send.php",
					data: form_data,
					dataType: "html",
					success: function() {
						if(!$this.children("button[type='submit']").hasClass('form--nerve--not-in-popup')) {
							$('.form--nerve--overlay').removeClass('neuron--showed');
							// $("body").css("overflow","visible");

								////////////////
							if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
								$("body").css({
										"overflow":"visible",
										"position": "static",
										"width": "100%",
										"top": "auto"
									});
								$(document).scrollTop(window.currentScroll);
							} else {
								$("body").css({
										"overflow":"visible",
									});
							}

							//////////////
							$('.form--nerve--popup').removeClass('neuron--showed');
						}
						$('.form--nerve--overlay').addClass('neuron--showed');

						$('.form--nerve--message-box').addClass('neuron--showed');
						setTimeout(function() {
							$('.form--nerve--message-box').removeClass('neuron--showed');
							$('.form--nerve--overlay').removeClass('neuron--showed');

						},5000);
					}
				});
			});
		})();

		// header__video.js
		(function() {
			run();
			$(window).on('resize', function() {
				run();
			});

			function run() {
				var $header = $('.header');
				var w = parseInt($header.innerWidth());
				var h = parseInt($header.innerHeight());
				if(w/h < 1920/1080) {
					$('.header__video').css({
						'width': 'auto',
						"height": '100vh',
					});
				} else {
					$('.header__video').css({
						'width': '100vw',
						"height": 'auto',
					});
				}

			}
		})();

		//totop.js
		(function() {
			$('.totop').on('click', function(event) {
				event.preventDefault();
				$.scrollTo('#mark-totop', 800, {offset: -50});
			});
		})();
		
		//totop_style_right-slide.js
		(function() {
			$(window).on('scroll', function() {
				if($(window).scrollTop() > 40) {
					if(!$('.totop_style_right-slide').hasClass('totop_style_right-slide-showed')) {
						$('.totop_style_right-slide').addClass('totop_style_right-slide-showed');
					}
				}else{
					$('.totop_style_right-slide').removeClass('totop_style_right-slide-showed');
				}
			});
		})();
		
		(function() {
			$('.popup-closer').on('click', function() {
				$('.popup-closer--trigger-close').removeClass('trigger-opened');
			});
		})();
		//popup
		//form
		(function() {
			window.currentScroll = 0;
			$('.popup--nerve--show').on('click', function(event) {
				event.preventDefault();
				currentScroll = $(window).scrollTop();


				if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
					$("body").css({
							"overflow":"hidden",
							"position": "fixed",
							"width": "100%",
							"top": -window.currentScroll
						});
				} else {
					$("body").css({
							"overflow":"hidden",
						});
				}

				var headerText = $(this).data('popup-header');
				var statData = $(this).data('stat');
				var emailIsteadPhone = $(this).data('email-instead-phone');
				var telText = 'Введите ваше имя и телефон.<br>Специалист веб студии Paradigma свяжется с вами,чтобы ответить на ваши вопросы.';
				var emailText = 'Введите ваш Email и мы вышлем Вам прайс с нашими приятными ценами и актуальными скидками';

				if(emailIsteadPhone == '1') {
					$('.get-call__input[type="tel"]', '.popup--nerve--popup').addClass('state--hidden');
					$('.get-call__input[type="tel"]', '.popup--nerve--popup').removeAttr('required');
					$('.get-call__input[type="email"]', '.popup--nerve--popup').removeClass('state--hidden');
					$('.get-call__description', '.popup--nerve--popup').html(emailText);
				}else{
					$('.get-call__input[type="tel"]', '.popup--nerve--popup').attr('required', 'required');
					$('.get-call__input[type="tel"]', '.popup--nerve--popup').removeClass('state--hidden');
					$('.get-call__input[type="email"]', '.popup--nerve--popup').addClass('state--hidden');
					$('.get-call__description', '.popup--nerve--popup').html(telText);
				}

				statData = statData || 'The Matrix has you!';

				$('.popup--nerve--overlay').addClass('neuron--showed');
				$('.popup--nerve--popup').addClass('neuron--showed');
				$('.popup--nerve--header').text(headerText);
				$('.popup--nerve--stat').val(statData);
			});

			$('.popup--nerve--hide').on('click', function(event) {
				console.log(currentScroll);
				// event.preventDefault();



				if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
					$("body").css({
							"overflow":"visible",
							"position": "static",
							"width": "100%",
							"top": "auto"
						});
					$(document).scrollTop(window.currentScroll);
				} else {
					$("body").css({
							"overflow":"visible",
						});
				}

				$('.popup--nerve--overlay').removeClass('neuron--showed');
				$('.popup--nerve--popup').removeClass('neuron--showed');
				$('.popup--nerve--header').text('');
				$('.popup--nerve--stat').val("Не важно");
			});
		})();


		//portfolio
		(function() {
			$('.popup-portfolio--nerve--show').on('click', function(event) {
				event.preventDefault();

				var index =  $(this).data('index');

				$.ajax({
					url: 'portfolio.php',
					type: 'POST',
					// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
					dataType: 'html',
					data: {index: index},
				})
				.done(function(data) {
					run(data);
				})
				.fail(function() {
					alert('Ведутся работы с БД. Повторите действие позже');
				})
				.always(function() {

				});

				function run(data) {
					$('.popup_portfolio').scrollTo('0px', 1);


					data = jQuery.parseJSON(data);

					$("body").css("overflow","hidden");

					var header =  data['header'];
					var theme =  data['theme'];
					var deadline =  data['deadline'];
					var link =  data['link'];
					var b1t1 =  data['b1t1'];
					var b1t2 =  data['b1t2'];
					var b2t1 =  data['b2t1'];
					var b2t2 =  data['b2t2'];



					var img1 = 'images/portfolio/' + data['img1'];
					var img2 = 'images/portfolio/' + data['img2'];
					var img3 = 'images/portfolio/' + data['img3'];
					var img4 = 'images/portfolio/' + data['img4'];


					$('.portfolio--nerve--header').html(header);
					$('.portfolio--nerve--img1').attr('src', img1);
					$('.portfolio--nerve--theme').html(theme);
					$('.portfolio--nerve--deadline').html(deadline);
					$('.portfolio--nerve--link').html(link);
					$('.portfolio--nerve--b1t1').html(b1t1);
					$('.portfolio--nerve--b1t2').html(b1t2);
					$('.portfolio--nerve--img2').attr('src', img2);
					$('.portfolio--nerve--b2t1').html(b2t1);
					$('.portfolio--nerve--b2t2').html(b2t2);
					$('.portfolio--nerve--img3').attr('src', img3);
					$('.portfolio--nerve--img4').attr('src', img4);

					$('.popup-portfolio--nerve--overlay').addClass('neuron--showed');
					$('.popup-portfolio--nerve--popup').addClass('neuron--showed');
				}

			});

			$('.popup-portfolio--nerve--hide').on('click', function(event) {
				event.preventDefault();
				$("body").css("overflow","visible");


				$('.portfolio--nerve--header').text('');
				$('.portfolio--nerve--img1').attr('src', 'images/filler.png');
				$('.portfolio--nerve--theme').text('');
				$('.portfolio--nerve--deadline').text('');
				$('.portfolio--nerve--link').text('');
				$('.portfolio--nerve--b1t1').text('');
				$('.portfolio--nerve--b1t2').text('');
				$('.portfolio--nerve--img2').attr('src', 'images/filler.png');
				$('.portfolio--nerve--b2t1').text('');
				$('.portfolio--nerve--b2t2').text('');
				$('.portfolio--nerve--img3').attr('src', 'images/filler.png');
				$('.portfolio--nerve--img4').attr('src', 'images/filler.png');


				$('.popup-portfolio--nerve--overlay').removeClass('neuron--showed');
				$('.popup-portfolio--nerve--popup').removeClass('neuron--showed');
			});
		})();


		//portfolio
		(function() {
			var $portfolio = $('#popup_portfolio-logos');
			var $header = $('.portfolio--nerve--header', $portfolio);
			var $logo = $('#portfolio-logos--nerve--logo', $portfolio);
			var $img1 = $('#portfolio-logos--nerve--img1', $portfolio);
			var $img2 = $('#portfolio-logos--nerve--img2', $portfolio);

			var data = null;
			$.getJSON("data/logos.json", function(raw) {
				data = raw;
				run();
			});

			function run() {
				$('.popup-portfolio-logos--nerve--show').on('click', function(e) {
					e.preventDefault();
					var name = $(this).data('name');
					var obj = data[name];

					$('.popup_portfolio-logos').scrollTo('0px', 1);
					$("body").css("overflow","hidden");

					$header.text(obj.header);
					$logo.attr('src', 'images/portfolio-logos/' + obj.path + '/logo.png');
					$img1.attr('src', 'images/portfolio-logos/' + obj.path + '/01.jpg');
					$img2.attr('src', 'images/portfolio-logos/' + obj.path + '/02.jpg');

					$('.popup-portfolio--nerve--overlay').addClass('neuron--showed');
					$('.popup-portfolio-logos--nerve--popup').addClass('neuron--showed');


				});
			}

			$('.popup-portfolio-logos--nerve--hide').on('click', function(e) {
				e.preventDefault();
				$("body").css("overflow","visible");


				$('.popup-portfolio--nerve--overlay').removeClass('neuron--showed');
				$('.popup-portfolio-logos--nerve--popup').removeClass('neuron--showed');
			});
		})();

		(function() {
			//hover on dropdown menu for desktops
			$('.menu__item:has(.menu_state_dropdown-l2)', '.main-nav').hover(function() {
				clearTimeout($.data(this,'timer'));
				$(this).siblings().children('.menu_state_dropdown-l2').hide(0);
				$(this).children('.menu_state_dropdown-l2').show(300);
				$('.menu__dropdown-symbol', '.menu').removeClass('menu__dropdown-symbol_reversed');
				$('.menu__dropdown-symbol', this).addClass('menu__dropdown-symbol_reversed');
			}, function() {
				$.data(this,'timer', setTimeout($.proxy(function() {
					$(this).children('.menu_state_dropdown-l2').hide(300);
					$('.menu__dropdown-symbol', '.menu').removeClass('menu__dropdown-symbol_reversed');
				}, this), 300));
			});

			//click on dropdown menu for desktops
			$('.menu__item:has(.menu_state_dropdown-l2) > .menu__link', '.menu').on('click', function(event) {
				event.preventDefault();
			});

			//click on dropdown menu for touch
			$('.menu__item:has(.menu_state_mob-dropdown-l2) > .menu__link', '.menu_state_mobile').on('click', function(event) {
				event.preventDefault();

				$('.menu_state_mob-dropdown-l2', '.menu_state_mobile')
					.slideUp(250);

				$('.menu__mob-dropdown-symbol', '.menu_state_mobile')
					.removeClass('menu__mob-dropdown-symbol_reversed');

				if(!($(this).next().is(':visible'))) {
					$(this).next().slideDown(250);
					$(this).children('.menu__mob-dropdown-symbol').addClass('menu__mob-dropdown-symbol_reversed');
				}
			});
		})();
		//menu
		(function() {
			/*
				1st el: trigger
				2nd el: target
				3rd el: is mobile version
			*/
			var chains = [
				['.menu--nerve--works-activator', '.menu--nerve--works-target', 0],
				['.menu--nerve--best-activator', '.menu--nerve--best-target', 1],
				['.menu--nerve--scheme-activator', '.menu--nerve--scheme-target', 0],
				['.menu--nerve--contacts-activator', '.menu--nerve--contacts-target', 0],
			];

			chains.forEach(function(elem, i) {
				// if(window.innerWidth <= 768 && elem[2] == 1) {
				// 	elem[1] += '-mobile';
				// }

				$(elem[0]).on('click', function(event) {
					event.preventDefault();
					var offset = ((elem[1]) == '.menu--nerve--scheme-target') ? -140 : -90;

					if(window.innerWidth <= 1200) {
						offset = ((elem[1]) == '.menu--nerve--scheme-target') ? -80 : -40;
					}

					// if(window.innerWidth <= 768) {
					// 	offset = ((elem[1]) == '.menu--nerve--scheme-target') ? -80 : -40;
					// }

					$('.popup-mobile-panel--nerve--panel').removeClass('neuron--showed');
					$.scrollTo(elem[1], 800, {offset: offset});
				});
			});

		})();

		//popup-mobile-panel
		(function() {
			$('.popup-mobile-panel--nerve--show').on('click', function(event) {
				event.preventDefault();
				$('.popup-mobile-panel--nerve--panel').addClass('neuron--showed');
			});
			$('.popup-mobile-panel--nerve--hide').on('click', function(event) {
				event.preventDefault();
				$('.popup-mobile-panel--nerve--panel').removeClass('neuron--showed');
			});
		})();

		(function() {
			$('.burger').on('click', function() {
				$('.burger--trigger-open').addClass('trigger-opened');
			});
		})();
		//main nav js
		(function() {
			var $nav = $('.main-nav');
			var headerHeight = $('.header').height();

			$(window).on('resize', function() {
				headerHeight = $('.header').height();
			});

			$(window).on('scroll', function() {
				if($(window).scrollTop() > 50) {
					$nav.addClass('main-nav_on-scroll_half');
				}else{
					$nav.removeClass('main-nav_on-scroll_half');
				}

				if($(window).scrollTop() > headerHeight) {
					$nav.addClass('main-nav_on-scroll_full');
				}else{
					$nav.removeClass('main-nav_on-scroll_full');
				}
			});	
		})();


		//mobile-nav
		(function() {
			$('.mobile-nav--trigger-on').on('click', function(event) {
				event.preventDefault();
				$('.mobile-nav--overlay').addClass('overlay_showed');
				$('.mobile-nav_pos_left').addClass('mobile-nav_pos_left_showed');
				$('.mobile-nav_pos_right').addClass('mobile-nav_pos_right_showed');
				// $('.page').addClass('page_fixed');
			});
			$('.mobile-nav--trigger-off').on('click', function(event) {
				event.preventDefault();
				$('.mobile-nav--overlay').removeClass('overlay_showed');
				$('.mobile-nav_pos_left').removeClass('mobile-nav_pos_left_showed');
				$('.mobile-nav_pos_right').removeClass('mobile-nav_pos_right_showed');
				// $('.page').removeClass('page_fixed');
			});
		})();
		(function() {
			$(".menu__item:has(.menu_state_dropdown-l2) > .menu__link", ".main-nav")
				.append('<span class="menu__dropdown-symbol">\></span>');
		})();
		(function() {
			$(".menu__item:has(.menu_state_mob-dropdown-l2) > .menu__link", ".mobile-nav")
				.append('<span class="menu__mob-dropdown-symbol">\></span>');
		})();
// (function() {
// 	setInterval(toggleButtons, 2500);
//
// 	function toggleButtons() {
// 		$('.booklet__button', '.screen-prices__booklets')
// 			.toggleClass('booklet__button_expanded');
// 	}
// })();

		//slider in screen how to
		(function() {
			$(".owl-carousel-s1").owlCarousel({
				responsive: {
					0:{
						loop:true,
						items: 1,
						autoplay: false,
					    autoplayTimeout: 5000,
					    autoplayHoverPause: true,
					    margin: 30,
					    center: true,
					    autoHeight: false

					},
					769:{
						loop:true,
						items: 1,
						autoplay: true,
					    autoplayTimeout: 5000,
					    autoplayHoverPause: true,
					    margin: 30,
					    center: true,
					    autoHeight: false
					}
				}
			});
		})();

		// screen-portfolio__expand.js
		(function() {
			$('.screen-portfolio__expand', '.screen-portfolio')
				.on('click', function(e) {
					$('.hide-mobile', '.screen-portfolio').removeClass('hide-mobile');
					$(this).addClass('state--hidden');
					setTimeout(function() {
						$.scrollTo('.screen-portfolio', 600, {offset: -50});
					},100);
				});
		})();


		//slider in screen how to
		(function() {
			$(".owl-carousel-s2").owlCarousel({
				
				loop:true,
				items: 1,
				autoplay: false,
			    autoplayTimeout: 5000,
			    autoplayHoverPause: true,
			    margin: 30,
			    center: true,
			    autoHeight: false
			});
		})();

		//timer.js
		(function() {
			var TimerDate1 = $('.timer__timer-1').data('date');
			var TimerDate2 = $('.timer__timer-2').data('date');
			TimerDate1 = TimerDate1 || '01.01.2017.0.0';
			TimerDate2 = TimerDate2 || '01.01.2017.0.0';

			$(".timer__timer-1").eTimer({
				etType: 0, 
				etDate: TimerDate1, 
				etTitleText: "", 
				etTitleSize: 20, 
				etShowSign: 1, 
				etSep: ":", 
				etFontFamily: "opensans", 
				etTextColor: "#ccc", 
				etPaddingTB: 0, 
				etPaddingLR: 0, 
				etBackground: "transparent", 
				etBorderSize: 0, 
				etBorderRadius: 2, 
				etBorderColor: "white", 
				etShadow: "", 
				etLastUnit: 4, 
				etNumberFontFamily: "OpenSans-bold", 
				etNumberSize: 36, 
				etNumberColor: "white", 
				etNumberPaddingTB: 0, 
				etNumberPaddingLR: 2, 
				etNumberBackground: "transparent", 
				etNumberBorderSize: 0, 
				etNumberBorderRadius: 5, 
				etNumberBorderColor: "white", 
				etNumberShadow: ""
			});

			$(".timer__timer-2").eTimer({
				etType: 0, 
				etDate: TimerDate2, 
				// etDate: "01.07.2018.10.10", 
				etTitleText: "", 
				etTitleSize: 20, 
				etShowSign: 1, 
				etSep: ":", 
				etFontFamily: "opensans", 
				etTextColor: "#ccc", 
				etPaddingTB: 0, 
				etPaddingLR: 0, 
				etBackground: "transparent", 
				etBorderSize: 0, 
				etBorderRadius: 2, 
				etBorderColor: "white", 
				etShadow: "", 
				// etShadow: " 0px 0px 10px 0px #333333", 
				etLastUnit: 4, 
				etNumberFontFamily: "OpenSans-bold", 
				etNumberSize: 36, 
				etNumberColor: "white", 
				etNumberPaddingTB: 0, 
				etNumberPaddingLR: 2, 
				etNumberBackground: "transparent", 
				etNumberBorderSize: 0, 
				etNumberBorderRadius: 5, 
				etNumberBorderColor: "white", 
				etNumberShadow: ""
			});
		})();


		//screen-comments.js
		(function() {
			$('.owl-carousel-s3').owlCarousel({
				loop: true,
				autoplay: false,
				autoplayTimeout: 0,
				nav: true,
				navText:['',''],
				dots: false,
				responsive : {
					0: {
						autoplay: false,
						items: 1,
						center: true,
						// autoWidth: true
					},
					// 769: {
					// 	items: 2,
					// 	center: false,
					// 	margin: 0
					// },
					981: {
						items: 2,
						center: false,
						margin: 0
					},
					1201: {
						items: 3,
						center: true,
						autoplayHoverPause: true,
						margin: 0,
					}
				}
			});
		})();

		//scheme.js
		(function() {
			var index;
			var timer = null;
			$('.scheme--nerve--activator').hover(function() {
				clearTimeout(timer);
				clearPoint();

				index = $(this).data('index');
				for(var i = 0; i <= index; i++) {
					var neuron = '.scheme--nerver--recipient-' + i;
					$(neuron).addClass('neuron--active');
				}
			}, function() {
				timer = setTimeout(function() {
					clearPoint();
				}, 500);
			});

			function clearPoint() {
				for(var i = 0; i <= 6; i++) {
					var neuron = '.scheme--nerver--recipient-' + i;
					$(neuron).removeClass('neuron--active');
				}
			}
		})();

    //mate.js
    (function() {
      $('.mate', '.screen-team').each(function(index, el) {
        var $serious = $(this).find('.mate__photo-serious');
        var $fun = $(this).find('.mate__photo-fun');
        var $photoBox = $(this).find('.mate__photos-box');
        var slideUpSpeed = 400;
        var fadeInSpeed = 500;
        var timeoutSpeed = 250;

        setHeight();
        $(window).on('resize', function() {
          setHeight();
        });

        $(this).children('.mate__photos-box').hover(function() {
          // var height = $photoBox.outerHeight();
          // $photoBox.css({'height':height});
          // $serious.slideUp(slideUpSpeed);
          $fun.fadeIn(fadeInSpeed);
        }, function() {

          setTimeout(function() {
            // $photoBox.css({'height':'auto'});
            // $fun.slideUp(slideUpSpeed);
            // $serious.fadeIn(fadeInSpeed);
            $fun.fadeOut(slideUpSpeed);
          }, timeoutSpeed);
        });

        function setHeight() {
          var height = $photoBox.outerWidth();
          $photoBox.css({'height':height});
        }
      });
    })();

    (function() {
			$('.owl-carousel-team').owlCarousel({
				loop:true,
				items: 1,
        autoWidth: true,
				autoplay: true,
		    autoplayTimeout: 3000,
		    autoplayHoverPause: true,
		    margin: 30,
		    center: true,
		    // responsive: {
		    // 	0: {
		    // 		autoHeight: true,
		    // 	},
		    // 	768: {
		    // 		autoHeight: false,
		    // 	}
		    // }
			});
		})();

// map.js
(function() {
	window.initMap = function () {
		var pos = {
			lat: 50.527938,
			lng: 30.230882
		};
		// var pos = {
		// 	lat: 50.463021,
		// 	lng: 30.504881
		// };
		var l = new google.maps.Map(document.getElementById("map"),{
			zoom: 18,
			center: pos,
			styles: [
						{
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#1d2c4d"
								}
							]
						},
						{
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#8ec3b9"
								}
							]
						},
						{
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#1a3646"
								}
							]
						},
						{
							"featureType": "administrative.country",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#4b6878"
								}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#64779e"
								}
							]
						},
						{
							"featureType": "administrative.province",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#4b6878"
								}
							]
						},
						{
							"featureType": "landscape.man_made",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#334e87"
								}
							]
						},
						{
							"featureType": "landscape.natural",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#023e58"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#283d6a"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#6f9ba5"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#1d2c4d"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#023e58"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#3C7680"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#304a7d"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#98a5be"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#1d2c4d"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#2c6675"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#255763"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#b0d5ce"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#023e58"
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#98a5be"
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#1d2c4d"
								}
							]
						},
						{
							"featureType": "transit.line",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#283d6a"
								}
							]
						},
						{
							"featureType": "transit.station",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#3a4762"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#0e1626"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#4e6d70"
								}
							]
						}
					]
});
var marker = new google.maps.Marker({
	position: pos,
	map: l
});
}
})();

		// fix-input-on-ios.js
		(function() {
			if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
				$('.popup_form').add('popup_form_fixed-ios')
			}
		})();

	

	(function() {
		window.getStaff = function() {
			// 
			alert('Developer Team\nArt-manager - Ivan Trigub\nAccount-manager - Vlad Ivanov\nUI/UX - Sasha Kolomoiceva\nDesign - Sasha Kolomoiceva\nFront dev - ALexandr Bichuyev\nEnd dev - ALexandr Bichuyev\nTesting - Vlad Ivanov, Ivan Trigub, Sasha Kolomoiceva\nMarketing - Vlad Ivanov, Ivan Trigub\n');
		};
	})();

	});
})(jQuery);