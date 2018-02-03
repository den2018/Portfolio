$(document).ready(function() {

	//Определяем переменные
	var navToggleButton = $('#navigation__button');
	var navToggleIcon = $('.navigation__toggle .fa');
	var navBlock = $('.navigation__list');
	var navBlockOpen = 'navigation__list--open';
	var navLink = $('.navigation__list a');

	// События по клику на иконку
	navToggleButton.on('click', function(e){
		e.preventDefault();
		navBlock.toggleClass(navBlockOpen);
		nuvButtonToggle();
	})

	// События по клику на ссылки
	navLink.on('click', function(){
		if( navBlock.hasClass(navBlockOpen)){
			nuvButtonToggle();
		} 
			navBlock.removeClass(navBlockOpen);
	})

	//Функция для анимации иконок
	function nuvButtonToggle(){
		if(navToggleButton.hasClass("active")) {
	      navToggleButton.removeClass("active");
	    }else {
	      navToggleButton.addClass("active");
	    }
	}
});