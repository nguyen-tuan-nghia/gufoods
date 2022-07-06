$('.evo-top-sale-product').slick({
	autoplay: true,
	lazyLoad: 'ondemand',
	autoplaySpeed: 4000,
	dots: true,
	arrows: false,
	infinite: true,
	speed: 300,
	slidesToShow: 2,
	slidesToScroll: 2,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}
	]
});
$(document).ready(function($){
	$('.evo-fix-video .playvid').on('click', function(e){
		e.preventDefault();var $this = $(this);
		var video = $this.parents('.evo-fix-video').find('video');
		$(this).toggleClass('active');
		$(video).prop("muted", !$(video).prop("muted"));
		return false;
	});
});