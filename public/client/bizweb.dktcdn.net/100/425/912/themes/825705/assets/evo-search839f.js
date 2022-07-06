$(document).ready(function($){
	$('.evo-owl-product').slick({
		dots: false,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
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
	if(localStorage.last_viewed_products != undefined){
		jQuery('.product-page-viewed').removeClass('d-none');
		var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
		var recentview_promises = [];
		var size_pro_review = last_viewd_pro_array.length;
		if ( size_pro_review >= 14 ) {
			size_pro_review = 14;
		} else {
			size_pro_review = last_viewd_pro_array.length;
		}
		if (size_pro_review < 1 ) {
			jQuery('.product-page-viewed').addClass('d-none');
		}else{
			jQuery('.product-page-viewed').removeClass('d-none');
		}
		if (size_pro_review > 0 ) {
			for (i = 0; i < size_pro_review; i++){
				var alias_product = last_viewd_pro_array[i];
				if (!!alias_product.alias){
					var promise = new Promise(function(resolve, reject) {
						$.ajax({
							url:'/' + alias_product.alias + '?view=item',
							success: function(product){
								resolve(product);
							},
							error: function(err){
								resolve('');
							}
						})
					});
					recentview_promises.push(promise);	
				}
			}
			Promise.all(recentview_promises).then(function(values) {
				$.each(values, function(i, v){
					$('.product-page-viewed-wrap').append(v);
				});
				setTimeout(function () {
					$('.product-page-viewed-wrap').slick({
						dots: false,
						arrows: true,
						infinite: false,
						speed: 300,
						slidesToShow: 5,
						slidesToScroll: 2,
						responsive: [
							{
								breakpoint: 1024,
								settings: {
									slidesToShow: 4,
									slidesToScroll: 4
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
					awe_lazyloadImage();
					evo_swatch();
				}, 500);
			});
		}
	}else{
		jQuery('.product-page-viewed').addClass('d-none');
	}
});