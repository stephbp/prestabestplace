
jQuery(document).ready(function($) {  
	if(POS_HOME_SELLER_PAGINATION==null || POS_HOME_SELLER_PAGINATION =="") {POS_HOME_SELLER_PAGINATION = false} else { POS_HOME_SELLER_PAGINATION = true}
	if(POS_HOME_SELLER_NAV==null || POS_HOME_SELLER_NAV =="") {POS_HOME_SELLER_NAV = false} else {POS_HOME_SELLER_NAV = true}

	var bestsellerSlide = $(".pos_bestseller_product .bestsellerSlide");
	bestsellerSlide.owlCarousel({
		autoPlay : false ,
		smartSpeed: POS_HOME_SELLER_SPEED,
		autoplayHoverPause: true,
		nav: POS_HOME_SELLER_NAV,
		dots : POS_HOME_SELLER_PAGINATION,
		responsive:{
			0:{
				items:1,
			},
			360:{
				items:2,
			},
			768:{
				items:3,
				nav:false,
			},
			
			992:{
				items:4,
			},
			
			1200:{
				items:POS_HOME_SELLER_ITEMS,
			}
		}
	});
	checkClasses();
    bestsellerSlide.on('translated.owl.carousel', function(event) {
        checkClasses();
    });
	function checkClasses(){
		var total = $('.pos_bestseller_product .bestsellerSlide .owl-stage .owl-item.active').length;
        $('.pos_bestseller_product ').each(function(){
			$(this).find('.owl-item').removeClass('firstActiveItem');
			$(this).find('.owl-item').removeClass('lastActiveItem');
			$(this).find('.owl-item.active').each(function(index){
				if (index === 0) { $(this).addClass('firstActiveItem'); }
				if (index === total - 1 && total>1) {
					$(this).addClass('lastActiveItem');
				}
			})  
        });
    }
});