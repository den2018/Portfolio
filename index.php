<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Titles -->
	<title>Персональный сайт портфолио - Курило Дениса</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="node_modules/bootstrap3/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="node_modules/fancybox/dist/css/jquery.fancybox.css">
	 
	<!-- Fonts  --> 
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
	
	<!-- font icons  --> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- FavIcons  -->
	<link rel="shortcut icon" href="img/favicons/favicon-48x48.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" />
</head>
<body>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">Вы используете <strong>устаревшую</strong> версию браузера. Пожалуйста <a href="http://browsehappy.com/">обновите свой браузер</a>.</p>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

<!-- Header  -->
<header class="header">
	<div class="header__inner">
		<nav class="navigation">
			<!-- Navigation icon  -->
			<!-- <div class="navigation__toggle navigation__toggle--fixed">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div> -->
			<button id="navigation__button" class="cmn-toggle-switch cmn-toggle-switch__htx">
			  <span>toggle menu</span>
			</button>
			<!-- //Navigation icon  -->
			<ul class="navigation__list">
				<li><a href="#resume">Резюме</a></li>
				<li><a href="#portfolio">Портфолио</a></li>
				<li><a href="#contacts">Контакты</a></li>
			</ul>
		</nav>
		
		<div class="header__centered-content">
			<div class="user-photo user-photo--shadow">
				<img src="usercontent/img/photo_small.jpg" alt="Пользовательская фотография Курило Дениса">
			</div>

			<h1 class="header__title">Курило Денис</h1>
			<h2 class="header__subtitle">HTML верстальщик сайтов</h2>
		</div>

		<!-- mouse-scroll-snippet  -->
		<a href="#resume" class="mouse_scroll" rel='m_PageScroll2id'>
			<div class=" mouse">
				<div class="wheel"></div>
			</div>
			<div>
				<span class="m_scroll_arrows unu"></span>
				<span class="m_scroll_arrows doi"></span>
				<span class="m_scroll_arrows trei"></span>
			</div>
		</a>
		<!-- //mouse-scroll-snippet  -->
	</div>
</header>
<!-- // Header  -->	

<!-- Resume  -->
<div class="resume section  section--bg-laptop section--bottom-line" id="resume">
	<div class="container">
		<div class="row">
			<!-- foto  -->
			<div class="hidden-xs col-sm-2 col-lg-3">
				<div class="user-photo--big">
					<img src="usercontent/img/photo_big.jpg" alt="Пользовательская фотография Курило Дениса">
				</div>
			</div>
			<!-- //foto  -->
			
			<!-- block-Resume  -->
			<div class="col-sm-10 col-lg-9">
				<div class="heading">Резюме</div>
				
				<p><strong>Курило Денис</strong><br>
				28 лет, Республика Крым, Россия</p>
				<p>Родился и вырос в Крыму в г.Ялта. Получил высшее образование по специальности "Инженер Программист. </p>
				<div class="row">
					<div class="col-sm-6">
						<div class="heading heading--medium">Опыт работы</div>
					<ul class="definition-list">
						<li class="definition-list__item">
							<div class="definition-list__def">
								Декабрь — настоящее время 
							</div>
							<div class="definition-list__desc">
								<p>Верстальщик в веб-студии “Веб-Старт”.</p>
							</div>
						</li>

						<li class="definition-list__item">
							<div class="definition-list__def">
								октябрь 2015 — Декабрь 2016
							</div>
							<div class="definition-list__desc">
								<p>Фрилансер, веб-дизайнер.</p>
							</div>
						</li>

						<li class="definition-list__item">
							<div class="definition-list__def">
								Сентбярь 2014 — Октябрь 2015 
							</div>
							<div class="definition-list__desc">
								<p>«ООО Кибер Софт» — Системный администратор.</p>
							</div>
						</li>
					</ul>
					</div>

					<div class="col-sm-6">
						<div class="heading heading--medium">Образование</div>
					
					<ul class="definition-list">
						<li class="definition-list__item">
							<div class="definition-list__def">
								декабрь 2016 
							</div>
							<div class="definition-list__desc">
								<p>Курсы по верстке сайтов HTML5, CSS3 - <a href="http://webcademy.ru" target="_blank">WebCademy.ru</a> </p>
							</div>
						</li>

						<li class="definition-list__item">
							<div class="definition-list__def">
								2008 — 2012  
							</div>
							<div class="definition-list__desc">
								<p>Московский Государственный университет дизайна и технологий, специальность дизайнер-технолог.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- Download_Resume  -->
			<div class="button">
			<a href="usercontent/pdf/Резюме.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>
			Скачать резюме</a>
			</div>
				<!-- //Download_Resume  -->
			<!-- //block-Resume  -->
		</div>
	</div>
</div>
</div>
<!-- // Resume  -->

<!-- Portfolio  -->
<div class="section section--padding-smaller section--bg-gear" id="portfolio">
	<div class="container">
	<div class="heading heading--center">Мои работы</div>

	<!-- filter of works -->
	<div class="filter-block">
		<ul class="filter-block__block">
			<li class="filter-block__element">
				<span class="filter-block__button filter-block__button--active filter" data-filter="all">Все</span>
			</li>
			<li class="filter-block__element">
				<span class="filter-block__button filter" data-filter=".html-css"> HTML+CSS</span>
			</li>
			<li class="filter-block__element">
				<span class="filter-block__button filter" data-filter=".bootstrap">Bootstrap</span>
			</li>
			<li class="filter-block__element">
				<span class="filter-block__button filter" data-filter=".tutorial">учебные</span>
			</li>
			<li class="filter-block__element">
				<span class="filter-block__button filter" data-filter=".payed"> на заказ</span>
			</li>
		</ul>
	</div>
	<!-- //filter of works -->

<!-- the block - a row with works -->
	<div class="row" id="portfolio-project">
		<!-- work in a portfolio -->
	 	<div class="col-sm-4 mix html-css tutorial">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/organic.jpg" title="Проект Органика" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_organica.jpg" alt="Проект Органика">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="http://student2018.zzz.com.ua/Organic/index.html" target="_blank">Учебный макет Organica</a>
	 			</div>
	 			<div class="portfolio-item__description">
	 				Верстка одностраничного сайта по PSD макету.
	 			</div>
	 		</div>
	 	</div>	

	 	<div class="col-sm-4 mix bootstrap tutorial">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/apollo.jpg" title="Учебный макет Аполло" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_apollo.jpg" alt="Учебный макет Аполло">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="http://student2018.zzz.com.ua/Apollo/index.html" target="_blank">Учебный макет Аполло</a>
	 			</div>
	 			<div class="portfolio-item__description">
	 				Верстка лендинга хостинг компании. Мобильная адаптивность.
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-sm-4 mix bootstrap tutorial">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/portfolio.jpg" title="Личный сайт портфолио" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_portfolio.jpg" alt="Личный сайт портфолио">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="http://student2018.zzz.com.ua/Portfolio/index.html" target="_blank">Личный сайт портфолио</a>
	 			</div>
	 			<div class="portfolio-item__description">
	 				Верстка личного сайта портфолио на котором вы сейчас находитесь. 
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-sm-4 mix html-cs payed">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/car-concept.jpg" title="Промо сайт автомобиля" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_auto.jpg" alt="Промо сайт автомобиля">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="https://www.google.ru" target="_blank">Промо сайт автомобиля</a>
	 			</div>
	 			<div class="portfolio-item__description">
					Верстка сайта для презентации концепта автомобиля.
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-sm-4 mix bootstrap payed">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/motorcycles.jpg" title="Магазин мотоциклов" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_moto.jpg" alt="Магазин мотоциклов">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="https://www.google.ru" target="_blank">Магазин мотоциклов</a>
	 			</div>
	 			<div class="portfolio-item__description">
					Верстка лендинга для компании Indian Motorcycles.
	 			</div>
	 		</div>
	 	</div>

	 	<div class="col-sm-4 mix html-cs payed">
	 		<div class="portfolio-item">
	 			<div class="portfolio-item__image">
	 				<!-- hover image -->
					<a href="usercontent/img/full/music.jpg" title="Магазин аудиотехники" class="fancybox portfolio-item__image__hover" rel="group">
						<i class="fa fa-search" aria-hidden="true"></i><br>
						<span>Смотреть макет</span>
					</a>
					<!-- //hover image -->
	 				<img src="usercontent/img/project_music.jpg" alt="Магазин аудиотехники">
	 			</div>
	 			<div class="portfolio-item__title">
	 				<a href="https://www.google.ru" target="_blank">Магазин аудиотехники</a>
	 			</div>
	 			<div class="portfolio-item__description">
					Верстка страниц для магазина винтажной аудиотехники.
	 			</div>
	 		</div>
	 	</div>
	 	<!-- //work in a portfolio -->	
	</div>       
	<!-- //the block - a row with works -->
</div>	
</div>
<!-- //Portfolio  -->

<!-- Block_contacts  -->
<div id="contacts" class="contacts section section--padding-smaller section--bg-cloud">
	<div class="container">
		<div class="row">

			<!-- Contacts-Text  -->
			<div class="col-sm-6">
				<div class="heading heading--white">Контакты</div>

				<div class="contacts__description">
					<p>Если вы ищите специалиста по верстке сайтов, front-end разработчика в команду или для работы над проектом —  я к вашим услугам.
					</p>
				</div>
				
				<!-- contact information  -->
				<div class="row">
					<!-- Email Skype  -->
					<div class="col-lg-6">
						
						<ul class="definition-list">
							<li class="definition-list__item">
								<div class="definition-list__def definition-list__def--lite">
									Email 
								</div>
								<div class="definition-list__desc">
									<p><a href="mailto:webprogram2017@mail.ru">webprogram2017@mail.ru</a></p>
								</div>
							</li>
							
							<li class="definition-list__item">
								<div class="definition-list__def definition-list__def--lite">
									Skype 
								</div>
								<div class="definition-list__desc">
									<p><a href="skype:+79788059869?chat">Курило Денис</a></p>
								</div>
							</li>
						</ul>
					</div>
					<!-- //Email Skype  -->	

					<!-- Phone Skype  -->
					<div class="col-lg-6">
						<ul class="definition-list">
							<li class="definition-list__item">
								<div class="definition-list__def definition-list__def--lite">
									Телефон 
								</div>
								<div class="definition-list__desc">
									<p><a href="tel:+78 (070) 555-77-55">+78 (070) 555-77-55</a></p>
								</div>
							</li>
							
							<li class="definition-list__item">
								<div class="definition-list__def definition-list__def--lite">
									Адрес 
								</div>
								<div class="definition-list__desc">
									<p>Россия, Республика Крым</p>
								</div>
							</li>
						</ul>
					</div>
					<!-- //Phone Skype  -->	
				</div>
				<!-- //contact information  -->
				
				<!-- social network  -->	
				<ul class="definition-list">
							<li class="definition-list__item">
								<div class="definition-list__def definition-list__def--lite">
									Cоциальные сети 
								</div>
								<div class="definition-list__desc">
									<div class="social-icons">
										<a href="https://vk.com/id8356952" target="_blank" class="fa fa-vk" aria-hidden="true"></a>
										<a href="https://twitter.com/?request_context=signup" target="_blank" class="fa fa-twitter" aria-hidden="true"></a>
										<a href="https://www.facebook.com/profile.php?id=100024366126772&lst=100024366126772%3A100024366126772%3A1518010393" target="_blank" class="fa fa-facebook" aria-hidden="true"></a>
										<a href="https://github.com/den2018" target="_blank" class="fa fa-github" aria-hidden="true"></a>
										<!-- <i class="fa fa-youtube" aria-hidden="true"></i> -->
										<!-- <a href="" class="fa fa-instagram" aria-hidden="true"></a> -->
									</div>
								</div>
							</li>
						</ul>
				<!-- // social network  -->
			</div>
			<!-- //Contacts-Text  -->
			
			<!-- Form  -->
			<div class="col-sm-6 col-lg-6">
				<div class="heading heading--white heading--medium heading--padding-top">Связаться со мной</div>

				<form id="contact-form" class="contact-form">
				<!-- Hidden Required Fields  -->
				<input type="hidden" name="project_name" value="Мой персональный сайт">
				<input type="hidden" name="admin_email" value="kdb2015@mail.ru">
				<input type="hidden" name="form_subject" value="Сообщение с сайта">
				<!-- //Hidden Required Fields  --> 
				
					<input type="text" class="contact-form__input" name="name" placeholder="Имя">
					<input type="text" class="contact-form__input" name="email" placeholder="Email" required>
					<div class="clearfix">
						<input type="text" class="contact-form__input contact-form__input--half-width" name="skype" placeholder="Skype">
						<input type="text" class="contact-form__input contact-form__input--half-width" name="phone" placeholder="Телефон">
					</div>
					<div class="contact-form__bg-pencil">
						<textarea class="contact-form__textarea" name="message" id=""></textarea>
					</div>
					<input class="contact-form__submit" type="submit" value="Отправить">
				</form>
				<div id="answer"></div>
			</div>
			<!-- Form  -->
		</div>
	</div>
</div>
<!-- //Block_contacts  -->

<!-- footer  -->
<div class="footer">
	<div class="container">
		<p class="footer__label">
		 <?php
         $copyrightYear = 2017;
         $currentYear = date('Y');
         echo $copyrightYear. (($copyrightYear != $currentYear) ? ' &ndash; '. $currentYear: '');    
            ?> &copy; Курило Денис</p>
		<p>Веб-разработик, занимаюсь версткой и созданием сайтов.</p>
		<p>Этот сайт сделал в рамках прохождения обучения по верстке на курсах от <a href="http://webcademy.ru" target="_blank">WebCademy.ru</a></p>
	</div>
</div>
<!-- //footer  -->

<!-- Vender scripts  -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap3/dist/js/bootstrap.min.js"></script>
<script src="libs/pagescroll2id/jquery.malihu.PageScroll2id.js"></script>
<script src="libs/mixitup2/jquery.mixitup.min.js"></script>

<script src="node_modules/fancybox/dist/js/jquery.fancybox.pack.js"></script>
<script src="node_modules/fancybox/lib/jquery.mousewheel.pack.js"></script>
<script src="libs/jquery.validate/jquery.validate.js"></script>

<!-- User scripts  -->
<script src="js/navigation.js"></script>
<script src="js/main.js"></script>
</body>
</html>

