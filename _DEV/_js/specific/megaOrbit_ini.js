//Initialize MegaOrbit
jQuery(document).ready( function(){		
	$('.responsive-slider').responsiveSlider({
		autoplay: true,
		interval: 8000,
		transitionTime: 800,
		touch: true,
		onSlideChange: function() {
			if($('a.btnShow').hasClass('dn')){
				$('a.btnShow').text('Show');
				$('a.btnShow').removeClass('dn');
				$('.loveBox, .regretBox, .wordBox').removeClass('up');
				$('.btnBlog').addClass('hide');
				} 
			}
		});
	});
	
//MegoOrbit Custom Functions
jQuery(document).ready(function(){
	
	//toggle Show|Hide
	$('a.btnShow').click(function(){
		$(this).toggleClass('dn');
		$('.loveBox, .regretBox, .wordBox').toggleClass('up');
		if($(this).hasClass('dn')){
			$(this).text('Hide');
			$('.btnBlog').removeClass('hide');
		} else {
			$(this).text('Show');
			$('.btnBlog').addClass('hide');
		}
	});
			
	//toggle photoInfo
	$('a#photoInfo').click(function(){
		$(this).find('i').toggleClass('fa-info-circle fa-times-circle');
		$('.infoBox').toggleClass('out');
		if ($('.infoBox').hasClass('out')) {
			$(this).attr('title','Exit Information');
			$(this).css('color','red');
		} else {
			$(this).attr('title','Photo Information');
			$(this).css('color','');
		}
	});
	
	//toggle Captions
	$('a#photoOnly').click(function(){
		$(this).find('i').toggleClass('fa-camera fa-commenting');
		$('.caption').toggleClass('show hide');
		if ($('.caption').hasClass('hide')) {
			$(this).attr('title','Show Captions');
		} else {
			$(this).attr('title','Hide Captions');
		}
	});		
});