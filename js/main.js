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

	//JQuery Validate JS

	$("#contact-form").validate({
		rules: {
			name: { required: true},
			email: { required: true, email: true},
			skype: { required:false},
			phone: { required: false},
			message: { required: true}
		},
		messages: {
			name: "Пожалуйста введите свое имя",
			email: {
				required: "Пожалуйста введите свое email",
				email: "Email должен быть в формате name@domein.com. Возможно вы ввели email с ошибкой."
			},
			message: "Пожалуйста введите текст сообщения",
		},
		
		//Вызываем функцию ajaxFormSubmit
		submitHandler: function(form) {
		  ajaxFormSubmit();
		}
	})

// Функция AJAX запрса на сервер
	function ajaxFormSubmit(){
		var string = $("#contact-form").serialize(); // Соханяем данные введенные в форму в строку. 

		// Формируем ajax запрос
		$.ajax({
			type: "POST", // Тип запроса - POST
			url: "php/mail.php", // Куда отправляем запрос
			data: string, // Какие даные отправляем, в данном случае отправляем переменную string
			
			// Функция если все прошло успешно
			success: function(html){
				$("#contact-form").slideUp(800);
				$('#answer').html(html);
			}
		});

		// Чтобы по Submit больше ничего не выполнялось - делаем возврат false чтобы прервать цепчку срабатывания остальных функций
		return false; 
	}
	
});
