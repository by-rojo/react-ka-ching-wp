	/* Product Options Js */
	function testislider(x){
		var owlslider = jQuery(".has-thumb .testimonials .testimonials-list.owl-carousel");
		owlslider.trigger( 'to.owl.carousel', x );
	}
	function changePositionnav(event) {
		jQuery('.special-items .owl-nav .owl-prev').css('left',jQuery('.special-items .owl-item').width());
		jQuery('.special-items .owl-nav .owl-next').css('right',jQuery('.special-items .owl-item').width());
		jQuery('.special-items .owl-stage .visible-item').removeClass('visible-item');
		jQuery('.special-items .owl-stage .active:first').addClass('visible-item');
		jQuery('.special-items .owl-stage .active:last').addClass('visible-item');
	}
	function visibleItem(event) {
		jQuery('.special-items .owl-stage .owl-item').removeClass('visible-item');
		jQuery('.special-items .owl-stage .active:first').addClass('visible-item');
		jQuery('.special-items .owl-stage .active:last').addClass('visible-item');
	}
	jQuery(document).ready(function(){
		jQuery('.sale_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.list_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.best_selling_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.recent_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.toprated_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.featured_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.category_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.categories_products.roadthemes-slider').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.categories_products.roadthemes-slider .shop-products').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.shop-products').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onResized: changePositionnav,
				onInitialized: changePositionnav,
				onTranslated: visibleItem,
			});
		});
		jQuery('.testimonial_r').each(function(){ 
			var items_1201up    = parseInt(jQuery(this).attr('data-1201up'));
			var items_993_1200  = parseInt(jQuery(this).attr('data-993-1200'));
			var items_769_992   = parseInt(jQuery(this).attr('data-769-992'));
			var items_641_768   = parseInt(jQuery(this).attr('data-641-768'));
			var items_360_640   = parseInt(jQuery(this).attr('data-360-640'));
			var items_0_359     = parseInt(jQuery(this).attr('data-0-359'));
			var navigation      = true; 
			if (parseInt(jQuery(this).attr('data-navigation'))!==1)  {navigation = false} ;
			var pagination      = false; 
			if (parseInt(jQuery(this).attr('data-pagination'))==1)  {pagination = true} ;
			var item_margin     = parseInt(jQuery(this).attr('data-margin'));
			var auto            = false; 
			if (parseInt(jQuery(this).attr('data-auto'))==1)  {auto = true} ;
			var loop            = false; 
			if (parseInt(jQuery(this).attr('data-loop'))==1)  {loop = true} ;
			var speed           = parseInt(jQuery(this).attr('data-speed'));
			var owljt           = jQuery(this).find('.testimonials-list').addClass('owl-carousel owl-theme').owlCarousel({ 
				nav            : navigation, 
				dots           : pagination,
				margin         : item_margin,
				loop           : loop,
				autoplay       : auto,
				smartSpeed     : speed,
				addClassActive : false,
				responsiveClass: true,
				responsive     : {
					0: {
						items: items_0_359,
					},
					360: {
						items: items_360_640,
					},
					641: {
						items: items_641_768,
					},
					769: { 
						items: items_769_992,
					},
					993: { 
						items: items_993_1200,
					}, 
					1201: {
						items: items_1201up,
					}
				},
				onTranslated: function(){
					x = jQuery( ".testimonial_r.has-thumb  .owl-dots .owl-dot" ).index( jQuery( ".testimonial_r.has-thumb .owl-dots .active" ));
					var testithumb = ".testithumb"+x;
					jQuery(".testimonial_r.has-thumb .thumbnail li").removeClass('active');
					jQuery(testithumb).addClass('active');
				}
			});
		});
		jQuery('.testimonial_r.has-thumb .thumbnail').addClass('owl-carousel owl-theme').owlCarousel({ 
			nav            : true, 
			dots           : false,
			margin         : 90,
			loop           : false,
			autoplay       : false,
			smartSpeed     : 1000,
			addClassActive : false,
			responsiveClass: true,
			responsive     : {
				0: {
					items: 2,
				},
				360: {
					items: 2,
				},
				641: {
					items: 3,
				},
				769: { 
					items: 3,
				},
				993: { 
					items: 3,
				}, 
				1201: {
					items: 3,
				}
			}
		});
		// equal height of item products
		if(jQuery(window).width() > 480){
			jQuery('.roadthemes-slider.roadthemes-products').each(function(){
				var maxHeight = 0;
				jQuery(this).find('.item-col').each(function(){
					if (jQuery(this).outerHeight() > maxHeight) { 
						maxHeight = jQuery(this).height(); 
					};
				});
				jQuery(this).find('.item-col').css('min-height', maxHeight);
				jQuery(this).find('.item-col .product-wrapper').css('min-height', maxHeight);
			});
		}
	});