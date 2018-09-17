(function($){
	var $s = {
		menuTrigger: $('.mt-trigger'),
		theMenu: $('.the-menu'),
		heroBg: $('.is-hero-bg'),
		didScroll: false,
		heroContent: $('.hero-content'),
		reviews: $('.reviewers'),
		homeBox: $('.where-to-stay-box'),
		window: $(window),
		endless: $('.endless-item'),
		menuItem: $('.menu-item-trigger'),
		menuOptions: $('.menu-options'),
		foodSlider: $('.food-slider'),
		input: $('.input'),
		loadPage: $('.loading-page'),
		socialBtn: $('.btn-social'),
		events: $('body').hasClass('page-template-events'),
		arch: $('body').hasClass('archive'),
		eventItem: $('.event-item'),
		eventSingle: $('body').hasClass('single-events'),
		directionsPage: $('body').hasClass('page-template-directions'),
		rosaPage: $('body').hasClass('page-template-rosarito'),
		eventBuild: $('.event-hero'),
		countDowner: $('.countdown--item'),
		questions: $('.the-question-nest'),
		catClicker: $('.is-cat-clicker'),
		borderCards: $('.the-border-cards'),
		thePlaceCards: $('.the-place-cards'),
		singleHotels: $('body').hasClass('single-hotels'),
		venuePage: $('body').hasClass('page-template-venue'),
		hotelSlide: $('.the-image-slider-hotels'),
		dropDownJr: $('.menu-item-has-children'),
		dropDown: $('.menu-item-has-children'),
		theDrop: $('.sub-menu'),
		hideSplash: $('.nav-hider'),
		clicked: false,
		dropDownLi: $('.sub-menu li'),
		targetLinks: $('.target-linkers'),
		foodImg: $('.food-image'),
		breadCrumbs: $('.theB'),
		theVideoTrig: $('.is-video-ply'),
		theVideoModal: $('.rosa-video-ply-home'),
		videoClose: $('.close-modal'),
		bigVideo: $('.is-video-ply-big'),
		theBoxes: $('.the-box-grid-book'),
		faderBar: $('.the-fader-bar'),
		dropCarrot: $('.isdropdown-carrot'),
		emailForm: $('.the-Email_form'),
		emailerList : $('.emailer'),
		closePrompt: $('.fa-close'),
		modalPrompt: $('.email-confirm_prompt'),
		modalLoading: $('.is-loading-prompt'),
		modalTxt: $('.the-email-txt'),
		promoBar: $('.is-promo-bar'),
		closePromo: $('.is-promo-bar .fa'),
		allowHider: true,
		slideUp: $('.go-back-up'),
		navigationBar: $('.navigation-bar'),
		theBread: $('.bread-crumbs'),
		masonryImg: $('.img-par'),
		purchaseTx: $('.purchase-tix'),
		pReviews: $('.the-review__nest')
	}

	var myDrE = $('.menu-item-has-children').find('a').first();
	
	myDrE.on('click', function(e){
		e.preventDefault()
	})

	// var myDropperE = $s.

	$s.dropDownJr.append('<i style="margin-left: -18px;" class="fa fa-caret-right isdropdown-carrot" aria-hidden="true"></i>')
	var dropDownScript = function(){
		
		var t = $(this);
		var tDrop = t.find($s.theDrop);

		if(!$s.clicked){
			t.find('.isdropdown-carrot').addClass('is-dr')
			tDrop.slideDown('fast');
			
			tDrop.find($s.dropDownLi).each(function(index){
				var liT = $(this);

				setTimeout(function(){
					liT.addClass('is-toggled')
				}, 80 * index)
			})

			$s.clicked = true;
		}
		else{
			tDrop.slideUp('fast');
			t.find('.isdropdown-carrot').removeClass('is-dr')
			tDrop.find($s.dropDownLi).each(function(index){
				var liT = $(this);

					setTimeout(function(){
						liT.removeClass('is-toggled')
					}, 80 * index)

				})

				$s.clicked = false;
			}
		}

		$s.dropDownJr.on('mouseleave', function(){
			var t = $(this);
			var tDrop = t.find($s.theDrop);
			if($s.clicked){
				t.find('.isdropdown-carrot').removeClass('is-dr')
				t.find($s.theDrop).slideUp('fast');

				tDrop.find($s.dropDownLi).each(function(index){
					var liT = $(this);

					setTimeout(function(){
						liT.removeClass('is-toggled')
					}, 80 * index)
				})

				$s.clicked = false;
			}
		})





	$s.dropDownJr.on('click', dropDownScript);



	if($s.theBread){
		$s.theBread.css({
			top: $s.navigationBar.height() + 35 +'px'
		})
	}

// $(window).on('load', function(){
// 		// init Masonry
// var $grid = $s.masonryImg.masonry({
//   // set itemSelector so .grid-sizer is not used in layout
//   itemSelector: '.img-par',
//   // use element for option
//   columnWidth: '.img-par',
//   percentPosition: true
// });
// // layout Masonry after each image loads
// $grid.imagesLoaded().progress( function() {
//   $grid.masonry('layout');
// });
// })



	var $carousel;


	if($s.promoBar.length > 0){
		$s.allowHider = false;
	}

	var $p = {
		home: $('body').hasClass('page-template-home')
	}

	$s.windowresize = $s.window.width()

	// Menu Handler 
	var menuHandler = function(){
		$(this).toggleClass('is-triggered')
		$s.theMenu.slideToggle(300);
	}


 $.fn.inView = function(){
    var win = $(window);
    var obj = $(this);
    var scrollPosition = win.scrollTop();
    var visibleArea = win.scrollTop() + win.height() ;
    var objEndPos = (obj.offset().top + obj.outerHeight());
    return(visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false)
  };


 var flickityInit = function(){
 	if($s.reviews.length > 0){
		$s.reviews.flickity({
			prevNextButtons: false,
			autoPlay: 3000,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true
		});
	}
	if($s.foodSlider.length >= 0){
		$s.foodSlider.flickity({
			prevNextButtons: true,
			autoPlay: 2500,
			pageDots: false,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true,
			imagesLoaded: true
		});
		
	
	}


	if($s.directionsPage){
		$s.borderCards.flickity({
			prevNextButtons: false,
			autoPlay: 2500,
			pageDots: true,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true,
			imagesLoaded: true,
			watchCSS: true

		});
	}

	if($s.singleHotels || $s.venuePage || $('.section-element').length > 0){
		$s.hotelSlide.flickity({
			prevNextButtons: true,
			autoPlay: 2500,
			pageDots: false,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true,
			imagesLoaded: true,
		})
		$s.pReviews.flickity();



		var linker = $('.hotel-val').attr('href')
		$('.hotel-btn').attr('href' , linker)
	}

	if($s.rosaPage){
		$s.thePlaceCards.flickity({
			prevNextButtons: false,
			autoPlay: 2500,
			pageDots: true,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true,
			imagesLoaded: true,
			watchCSS: true

		});
	}

	if($s.venuePage){
		$s.theBoxes.flickity({
			prevNextButtons: false,
			watchCSS: true
		});
	}


 }
 		var captionGrab = function(){
			console.log('oy!')
		}

	var eventPkgFlik = $('.schedule-img'),
			eventPkgFlikImg = $('.schedy'),
			pkgContainer = $('.pkg-container')
			pkgInit = $('.package-detals')

	if(eventPkgFlikImg.length >= 2){
		eventPkgFlik.flickity({
			autoPlay: 2500,
			pageDots: true,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			wrapAround: true,
			imagesLoaded: true,
			watchCSS: true
		});
	}
	if(pkgContainer.length >= 2){
		pkgInit.flickity({
			autoPlay: 2500,
			pageDots: true,
			pauseAutoPlayOnHover: false,
			adaptiveHeight: true,
			imagesLoaded: true,
			watchCSS: true
		});
	}
	var previousScroll = 0;

	// Scroll Handler 
	var scrollTicker = function(){
		$s.didScroll = true
		$s.mywindowScrolll = window.pageYOffset;
	}

	var resizeUpdater = function(){
		$s.windowresize = $s.window.width()
	if(rightPackage.length){
		myLeftHeight = myLeftHeightCOntainer.outerHeight()
		myRightHeight = myRightHeightContainer.outerHeight()
		leftOffset = myLeftHeightCOntainer.offset().top
		rightOffset = rightColumnTitle.offset().top
		rightWidth = rightPackage.width()

		$('.right-package').css({
			height: myLeftHeight,
		});
		myRightHeightContainer.css({
			width: rightWidth
		})
		if($(window).width() <= 767){
			$('.right-package').css({
				height: '',
			});
		}
	}
	}



	var myLeftHeightCOntainer = $('.left-package'),
			myRightHeightContainer = $('.package-right-parent'),
			rightParent = $('.package-right-parent'),
			rightPackage = $('.right-package'),
			rightColumnTitle = $('.package-title-parent');

			if(rightPackage.length){
				var myLeftHeight = myLeftHeightCOntainer.outerHeight(),
				myRightHeight = myRightHeightContainer.outerHeight(),
				leftOffset = myLeftHeightCOntainer.offset().top,
				rightOffset = rightColumnTitle.offset().top,
				rightWidth = rightPackage.width()
	
				console.log(rightWidth);
	
				setTimeout(function(){
					 if($(window).width() > 767){
						myLeftHeight = myLeftHeightCOntainer.outerHeight();
						myRightHeight = myRightHeightContainer.outerHeight();
						$('.right-package').css({
							height: myLeftHeight,
						});
						myRightHeightContainer.css({
							width: rightWidth
						})
					 }
		
					
				}, 1300)
			}



	var scrollHandler = function(){
	
		if($s.didScroll){
		

			if($s.mywindowScrolll > 700){
				$s.slideUp.addClass('is-visible')
				txt();
				
			}
			else if($s.mywindowScrolll < 700){
				$s.slideUp.removeClass('is-visible')
			}

			if(rightPackage.length && $(window).width() >= 767){
				if($s.mywindowScrolll + 20 > rightOffset){
					myRightHeightContainer.css({
						position: 'fixed',
						width: rightWidth + 'px',
						top: 120+'px'
					})
				}
				else if($s.mywindowScrolll + 20 < rightOffset){
					myRightHeightContainer.css({
						position: '',
						width: '',
						top: ''
					})
				}
				if($s.mywindowScrolll  > myLeftHeight + rightOffset - myRightHeight - 40){
					myRightHeightContainer.css({
							position: 'absolute',
							bottom: 0,
							width: rightWidth +'px',
							top: 'auto',
						})
					}
				}
				else if($(window).width() <= 767){
					myRightHeightContainer.css({
						position: '',
						width: '',
						top: ''
					})
				}
			

		// if(rightColumnContainer.length > 0){
		// 	if($s.mywindowScrolll && $(window).width() >= 767){
		// 		if($s.mywindowScrolll + 20 > rightOffset){
		// 			rightColumnContainer.css({
		// 				position: 'fixed',
		// 				width: rightWidth + 'px',
		// 				top: 120+'px'
		// 			})
		// 		}
		// 		else if($s.mywindowScrolll + 20 < rightOffset){
		// 			rightColumnContainer.css({
		// 				position: '',
		// 				width: '',
		// 				top: ''
		// 			})
		// 		}
		// 		if($s.mywindowScrolll >= leftOffset + leftHeight - rightHeight - 120){
		// 			rightColumnContainer.css({
		// 				position: 'absolute',
		// 				bottom: 0,
		// 				width: rightWidth+'px',
		// 				top: 'auto',
		// 			})
		// 		}
		// 	}
		// 	else if($(window).width() <= 767){
		// 		rightColumnContainer.css({
		// 			position: '',
		// 			width: '',
		// 			top: ''
		// 		})
		// 	}
		// }
			$s.faderBar.css({
				opacity: $s.mywindowScrolll/149.00
			})

			// if($s.mywindowScrolll > $s.sideBaroffset){
			// 	$s.sideBar.css({
			// 		width: $s.sideBarWidth +'px',
			// 		position: 'fixed',
			// 		top: 0
			// 	}).addClass('is-sticky')


			// 	// $s('side')

			// }

			var currentScroll = $(this).scrollTop();

			/*
				If the current scroll position is greater than 0 (the top) AND the current scroll position is less than the document height minus the window height (the bottom) run the navigation if/else statement.
			*/
			if ($s.allowHider && !$s.clicked && currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){
				
				
				/*
					If the current scroll is greater than the previous scroll (i.e we're scrolling down the page), hide the nav.
				*/
				if (currentScroll > previousScroll){
					window.setTimeout(hideNav, 0);
				/*
					Else we are scrolling up (i.e the previous scroll is greater than the current scroll), so show the nav.
				*/
				} else {
					window.setTimeout(showNav, 0);
				}
				/* 
					Set the previous scroll value equal to the current scroll.
				*/
				previousScroll = currentScroll;
			}
				function hideNav() {
				

					$("[data-nav-status='toggle']").removeClass("is-visible").addClass("is-hidden");
				}
				function showNav() {
					$("[data-nav-status='toggle']").removeClass("is-hidden").addClass("is-visible");
				}

			$s.didScroll = false;
		}
		requestAnimationFrame(scrollHandler)
	}


	// Window Loaded
	var isloaded = function(){
		$s.heroContent.addClass('is-loaded')
		if($('.logo-parent-el').length >= 0){
			setTimeout(function(){
				$('.logo-parent-el .grid').css({
					opacity: 1
				})
			},1500)
		}
		$s.loadPage.fadeOut();

		if($s.events || $s.arch){
			$s.eventItem.each(function(index){
				var t = $(this);
				setTimeout(function(){
					t.addClass('is-active')
				}, 300 * index)
			})
		}

		if($s.eventSingle){
			$s.eventBuild.addClass('is-loaded');
			$s.countDowner.each(function(index){
				var c = $(this);
				setTimeout(function(){
					c.addClass('is-visible')
				}, 300 * index)
			})
		}

	}
	

	// Menu Option Script 
	var menuOption = function(){
		$('.menu-options').removeClass('is-active')
		$('.menu-tabs').removeClass('has-active')
		$('.menu-item-trigger').removeClass('is-current');
		$(this).addClass('is-current');

		var itemcount = $(this).attr('data-target')
		
		var $showmenuitem  = $("[data-item="+itemcount+"]");

		$('.menu-options').removeClass('is-current')

		$showmenuitem.addClass('is-current')
		
	}



	var myinputHandler = function(){
		if($(this).val().length > 0){
			$(this).addClass('is-value')
		}
		else{
			$(this).removeClass('is-value')
		}
	}


  $.centeredPopup = function(options) {
		var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left,
		dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top,
		width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
		height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
		left = ((width / 2) - (options.width / 2)) + dualScreenLeft,
		top = ((height / 2) - (options.height / 2)) + dualScreenTop,
		newWindow = window.open(options.url, options.title, 'scrollbars=yes, width='+options.width+', height='+options.height+', top=' + top + ', left=' + left);
		if (window.focus) { newWindow.focus(); }
	};



	$s.socialBtn.on('click', function(e) {
			e.preventDefault();
			var $t = $(this);
    
    $.centeredPopup({
      url: $(this).attr('href'),
      title: 'Share on '+$t.find('.social-name').text(),
      width: 400,
      height: 400
    });
  });


	var myfaq = function(){
			if($(this).hasClass('is-viewing')) {
				$s.questions.children().find('.the-answer').slideUp();
				$s.questions.removeClass('is-viewing')
				return;
			};
			$s.questions.removeClass('is-viewing')
			$s.questions.children().find('.the-answer').slideUp();
			$(this).addClass('is-viewing');
			$(this).children().find('.the-answer').slideDown();


	}

	var findmyfaq = function(){
		var myitemCatcher = $(this).attr('data-cater')
		
		$('.the-cat-nest').removeClass('is-active')
		$('.is-cat-clicker').removeClass('is-selected')
		$(this).addClass('is-selected')
		$('[data-founder='+ myitemCatcher+ ']').addClass('is-active')
	}



	var stagger = function(){

		$s.dropDownLi.each(function(index){
			var liT = $(this);

			setTimeout(function(){
				liT.addClass('is-toggled')
			}, 100 * index)
		})

	}








	var hrefSlider = function(e){
		$("html, body").animate(
			{
				scrollTop: $($(this).attr("href")).offset().top
			},
			1000
		);
		return false;
	}



	$s.breadCrumbs.each(function(){
		var bread = $(this).attr('href')
		var breadUrl = bread
		var locator = window.location

		if(breadUrl == locator){
			$(this).addClass('is-active');
		}
	})


	var videoModal = function(){
		var videoUrl = $(this).attr('data-video');
		$s.theVideoModal.fadeIn();
		$('.the-iframe').attr('src', videoUrl + '?autoplay=1');
		$('.video-container').addClass('is-active');
	}

	var closeModal = function(){
		var videoUrl = $(this).attr('data-video');
		$s.theVideoModal.fadeOut();
		$('.the-iframe').attr('src', '');
		$('.video-container').removeClass('is-active');
	}



	// if($('body').hasClass('page-template-community') ){

	// 	var userFeed = new Instafeed({
	// 				get: 'user',
	// 				userId: '199036347',
	// 				accessToken: '199036347.8603c44.03e2c19bc6d44988af4d71957ab4ee5e',
	// 				limit: 8
	// 			});
	// 		userFeed.run();

	// }






	// Email Handler for email form submission 

	var emailHandler = function(e){

		e.preventDefault();
		
		var $t = $(this),
				emailVal = $s.emailerList.val(),
				ajaxUrl = $t.attr('action').replace('post', 'post-json')+'&c=?';



		if(emailVal.length > 4 && emailVal.indexOf('@') > 0) {
			$s.modalPrompt.fadeIn();
			$.ajax({
				url: ajaxUrl,
				method: 'POST',
				dataType: 'jsonp',
				data: $t.serialize(),
				beforeSend: function(){
					

					console.log('waiting')

					// code to execute popup

				},

				success: function(data){
					$s.modalLoading.hide();
					$s.modalTxt.css({
						opacity: 1
					});
					console.log('success')

					// code to execute confirmation

				}

			})

		}
	}


	var top = $('.top')
	var topIn = top.text();

	for(var i = 0; i < topIn.length; i++){
		
		htmlr = "<span class='let'>"
		htmlr += topIn.charAt(i);
		htmlr += "</span>"


	}


	var txt = function(){

		var est = $('.let');

		est.each(function(index){
					var t = $(this);

					setTimeout(function(){
						t.addClass('is-visible')
						console.log(t);
					}, 400 * index)

				})
	}

		var closeModalPrompt = function(){
			$s.modalPrompt.fadeOut();
		}

		var closePromoBar = function(){
			$('.is-promo-bar').hide();
			$s.allowHider = true;
		}

		var showFormBuy = function(){
			$('.checkout').show();
		}

		$('.the-month-dropdown').on('click', function(){
			$(this).toggleClass('is-showing-dates');
			$('.the-dates-dd').slideToggle('fast');
		})

		var isSelectedCat = window.location.pathname
		var chopper = isSelectedCat.split('/')
	

		if($('body').hasClass('tax-events-categories')){
			var dater = chopper[3];
					 dater += "<i class='fa fa-caret-down' aria-hidden='true'>";
			// $('.theDater').html(dater)
		}



		// Handle Schedule Images 
		var scheduleImgs = $('.schedy');
		if(scheduleImgs.length <= 1){
			scheduleImgs.css({
				width: 100 +'%'
			})
		}

		var packages = $('.pkg-container');

		if(packages.length < 2 ){
			$('.package-detals').addClass('remove-slider')

		}


		// Event listeners to initiate each function
		$s.closePromo.on('click', closePromoBar);
		$s.closePrompt.on('click', closeModalPrompt)
		$s.emailForm.on('submit' , emailHandler)
		$s.bigVideo.on('click' , videoModal)
		$s.videoClose.on('click', closeModal);
		$s.theVideoTrig.on('click', videoModal);
		$s.targetLinks.on('click', hrefSlider);
		// $s.dropDown.on('click', dropDownScript);
		$s.catClicker.on('click' , findmyfaq);
		$s.questions.on('click', myfaq);
		$s.input.on('keyup', myinputHandler);
		$s.menuItem.on('click', menuOption)
		$(window).on('load', isloaded);
		$(window).on('scroll', scrollTicker)
		$s.menuTrigger.on('click', menuHandler)
		$(window).on('resize', resizeUpdater)
		$s.purchaseTx.on('click', showFormBuy)
		$(window).on('load', function(){
			scrollHandler();
		})
		flickityInit();
		
})(jQuery);