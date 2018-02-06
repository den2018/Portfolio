$(document).ready(function() {

	//slide2id - плавная прокрутка по ссылкам внутри страницы
	$("nav a,a[href='#top'],a[rel='m_PageScroll2id'],a.PageScroll2id").mPageScroll2id({
	highlightSelector:"nav a"
	});

	//mixItUp2 - фильтрация работ в портфолио 
	$('#portfolio-project').mixItUp();

	//FancyBox - galery
	$(".fancybox").fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	// End of FancyBox - galery

});