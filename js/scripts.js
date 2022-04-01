( function() {

	var app = {
		
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},

		
		aosInit: function () {
			setTimeout(function () {
			  AOS.init();
			}, 1000);
		  },

		initDetectScroll: function () {
			if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
			  jQuery("header.header").addClass("show-fixed animated fadeInDown");
			} else {
			  jQuery("header.header").removeClass("show-fixed animated fadeInDown");
			}
		  },

		initBurgerMenu: function () {
			jQuery(".burger-menu").on("click", function (e) {
			  e.preventDefault();
			  if (jQuery(this).hasClass("is-open")) {
				jQuery(this).removeClass("is-active");
				jQuery(".bm-view").removeClass("is-open");
				jQuery("body").removeClass("is-open");
			  } else {
				jQuery(this).addClass("is-active");
				jQuery(".bm-view").addClass("is-open");
				jQuery("body").addClass("is-open");
			  }
			});
			jQuery(".bm-drop, .bm-close").on("click", function (e) {
			  e.preventDefault();
			  jQuery(".bm-view").removeClass("is-open");
			  jQuery(".bm-btn").removeClass("is-active");
			  jQuery("body").removeClass("is-open");
			});
		  },
		  
		  
		initNeighborhoodGuide: function() {
			/* Put featured properties code here */
			jQuery(".nb-slider").slick({
				dots: false,
				infinite: true,
				slidesToShow: 4,
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 7000,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: ".nb-arrow .ai-font-arrow-h-p",
				nextArrow: ".nb-arrow  ai-font-arrow-h-n",
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
		},
		initFeaturedProperties: function() {
			/* Put featured properties code here */
			jQuery(".fp-slider").slick({
				dots: false,
				infinite: true,
				slidesToShow: 3,
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 7000,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: ".fp-arrow .prev",
				nextArrow: ".fp-arrow  .next",
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
		},
		initTestimonials: function() {
			/* Put testimonials code here testi-slider */
			jQuery(".testi-slider").slick({
				dots: false,
				infinite: true,
				slidesToShow: 1,
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 7000,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: ".testi-arrow .ai-font-arrow-h-p",
				nextArrow: ".testi-arrow .ai-font-arrow-h-n",
			});
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		}
		
	}

	
	jQuery(document).ready( function() {
		
		app.aosInit();

		/* Initialize Burger Menu */
		app.initBurgerMenu();
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize Neighborhood Guide */
		app.initNeighborhoodGuide();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();
		
	});
	
	jQuery(window).on('load', function(){


	})

	jQuery(window).on("scroll", function () {
		app.initDetectScroll();
	  });

})();