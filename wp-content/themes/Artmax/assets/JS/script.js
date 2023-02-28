(function($) {
	$(function() {
		
		$('ul.services__wrapper-tabs').on('click', 'li:not(.services__tab_active)', function() {
			$(this)
			.addClass('services__tab_active').siblings().removeClass('services__tab_active')
			.closest('div.container').find('div.services__blocks')
			.removeClass('services__blocks_active').eq($(this).index()).addClass('services__blocks_active');
		});
	});
	})(jQuery);