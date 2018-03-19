$(function() {

	$('.mobile-nav').click(function(){
		$('.header-bottom').toggleClass('mob-active');
	});

	// $('.filter-icon').click(function(){
	// 	$('.cat-search').toggleClass('active');
	// });

	$('.filter-tog').click(function(){
		$(this).toggleClass('tog-active');
		// $('.filters').toggleClass('f-active');
		$('.single-cat').removeClass('s-prod-hidden');
		$('.s-filter').removeClass('sf-active');
	});

	$('.s-filter').click(function(){
		$('.s-filter').removeClass('sf-active');
		$(this).toggleClass('sf-active');
		$('.filter-tog').addClass('tog-active');

		var light = $(this).attr( 'title' );
		$('.single-cat').toggleClass('s-prod-hidden');
		$('.' + light).removeClass('s-prod-hidden');

	});

	$(function() {
	    $('a .single-cat').matchHeight();
	});




});