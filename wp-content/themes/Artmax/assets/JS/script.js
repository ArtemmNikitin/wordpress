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

	/* Когда пользователь нажимает на кнопку, переключаться раскрывает содержимое */
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}
 // Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
			}
		}
	}
};