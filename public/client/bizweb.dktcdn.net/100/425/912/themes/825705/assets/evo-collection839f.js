$(document).ready(function($){
	$('.tab-sort').add('.evo-sidebar-collection .evo-sort-category .evo-sort-product .close-sort').click(function(){
		$('.evo-sidebar-collection .evo-sort-category').toggleClass('active');
		$('.evo-sidebar-collection .aside-filter').removeClass('active');
	});
	$('.tab-filter').add('.evo-sidebar-collection .aside-filter .close-filter').click(function(){
		$('.evo-sidebar-collection .aside-filter').toggleClass('active');
		$('.evo-sidebar-collection .evo-sort-category').removeClass('active');
	});
	$('.evo-sort-category .btn-quick-sort a').click(function(){
		$('.evo-sort-category').toggleClass('active');
	});
	$('.slick_collections').slick({
		dots: true,
		infinite: false,
		arrows: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
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
});