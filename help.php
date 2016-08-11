<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="styles.css" rel="stylesheet">

<!--слайдер-->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/hint.css">
	<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: false,
					bgincrement	: 450
				});
			
			});
		</script>	
<!--//слайдер-->

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<script type="text/javascript">
	$(function() {
		$("#menu_btn").click
			(
				function (event)
					{
						event.preventDefault();
						$(".top_head_menu").toggleClass("show_menu");
					}
			);

			$(".btn_close_menu").click
			(
				function ()
					{
						$(".top_head_menu").removeClass("show_menu");
					}
			);
		});
	</script>
</head>

<body>

<div class="wrapper">
<div class="top_head">
	<div class="container">
		<div class="table">
			<div class="cell ta_left">
				<div class="phones_top">
					<i class="fa fa-phone" aria-hidden="true"></i>+7 (812) 904-64-35, +7 (812) 337-15-64
				</div>
			</div>	
			<div class="cell ta_right">
			<!--TOP BTNS-->
				<div class="top_btns">
					<a href="#" id="menu_btn" class="status-icon  hint--bottom-right  hint--error" aria-label="Меню"><img src="images/ico1.png"></a>
					<a href="#" class="status-icon  hint--bottom-right  hint--error" aria-label="Справочный центр"><img src="images/ico2.png"></a>
					<a href="#" class="status-icon  hint--bottom-right  hint--error" aria-label="Обратная связь"><img src="images/ico3.png"></a>
				</div>
			<!--//TOP BTNS-->
			<!--ПОИСК-->
				<div class="top_search">
					<form action="">
						<input type="text" name="q" placeholder="Поиск ..." ><button><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>			
			<!--//ПОИСК-->
			</div>	
		</div>
	</div>
</div>
<div class="menu_fx_div">
	<div class="top_head_menu">
		<div class="container">
		<ul>
			<li>
				<a href="/">Ленстройдача<a>
				<ul>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Заборы под ключ</a>
				<ul>
					<li><a href="#">Из штакетника</a></li>
					<li><a href="#">Из профнастила</a></li>
					<li><a href="#">Из сетки 3D</a></li>
					<li><a href="#">Из рабицы</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Ворота и калитки</a>
				<ul>
					<li><a href="#">Ворота и калитки</a></li>
					<li><a href="$">Откатные ворота</a></li>
				</ul>
			</li>
					<li>
				<a href="">Стоимость</a>
				<ul>
					<li><a href="#">Цены</a></li>
					<li><a href="#">Калькулятор</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Фото работ</a>
				<ul>
					<li><a href="#">Фото заборов из профнастила</a></li>
					<li><a href="#">Фото заборов из Gitterа</a></li>
					<li><a href="#">Фото заборов из штакетника</a></li>
				</ul>
			</li>
	
		</ul>
		</div>
		<div class="btn_close_menu">
			<i class="fa fa-caret-up" aria-hidden="true"></i>
		</div>
	</div>
	
</div>
<div class="middle_head">
	<div class="container">
		<header class="header">
		<div class="table">
			<div class="cell ta_left w300px">
				<a href="#" class="logo_top"><img src="images/logo.png"></a>
			</div>
			<div class="cell ta_right">
			<!--ВЕРХНЕЕ МЕНЮ-->
				<div class="top_menu">
					<ul>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Заборы</a></li>
						<li><a href="#">Мощение плиткой</a></li>
						<li><a href="#">Навесы</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			<!--//ВЕРХНЕЕ МЕНЮ-->
			</div>
		</div>
		</header><!-- .header-->
	</div>
</div>




<div class="">
	
</div>

	<main class="content">

<script src="js/help.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/help.css">
  <div class="container">
<div id="help">
 <div class="fixed_float_wrapper" >
 	<div class="fixed_float"></div>
 </div>

 <div class="body_help cf">
 <div id="help_menu">
 <ul>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class="active folder" href="#">С чего начать?</a>
        <ul>
            <li class=""><a class="" >Регистрация</a>
            </li>
            <li class=""><a class="" >Первый проект</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" >Личный кабинет</a>
        <ul>
            <li class=""><a class="" >Настройки аккаунта</a>
            </li>
            <li class=""><a class="" >Мультилогин</a>
            </li>
            <li class=""><a class="" >Брендирование отчетов</a>
            </li>
            <li class=""><a class="" >Настройка уведомлений</a>
            </li>
            <li class=""><a class="" >Система обработки заявок</a>
            </li>
            <li class=""><a class="" >Экспорт проектов</a>
            </li>
            <li class=""><a class="" >Импорт проектов</a>
            </li>
            <li class=""><a class="" >Делегирование Яндекс.XML</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" >Банк</a>
        <ul>
            <li class=""><a class="" >Пополнение баланса</a>
            </li>
            <li class=""><a class="" >Тарифные планы</a>
            </li>
            <li class=""><a class="" >Оплата для юр.лиц</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" >Проекты</a>
        <ul>
            <li class=""><a class="" >Поисковые системы</a>
            </li>
            <li class=""><a class="" >Настройка расписания</a>
            </li>
            <li class=""><a class="" >Групповая проверка</a>
            </li>
            <li class=""><a class="" >Гостевой доступ</a>
            </li>
            <li class=""><a class="" >Смена владельца</a>
            </li>
            <li class=""><a class="" >Интеграция</a>
            </li>
            <li class=""><a class="" >Регулярный отчет</a>
            </li>
            <li class=""><a class="" >Архив</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" >Ядро</a>
        <ul>
            <li class=""><a class="" >Импорт поисковых запросов</a>
            </li>
            <li class=""><a class="" >Экспорт поисковых запросов</a>
            </li>
            <li class=""><a class="" >Режимы отображения</a>
            </li>
            <li class=""><a class="" >Фильтры и групповые действия</a>
            </li>
            <li class=""><a class="" >Перемещаемые элементы</a>
            </li>
            <li class=""><a class="" >Цветовые метки (теги)</a>
            </li>
            <li class=""><a class="" >Корзина (случайно удаленные)</a>
            </li>
            <li class=""><a class="" >Подбор ключевых слов</a>
            </li>
            <li class=""><a class="" >Сбор поисковых подсказок</a>
            </li>
            <li class=""><a class="" >Проверка частоты запросов</a>
            </li>
            <li class=""><a class="" >Кластеризация (группировка запросов)</a>
            </li>
            <li class=""><a class="" >Магнит (сбор запросов)</a>
            </li>
            <li class=""><a class="" >Bing Веб-мастер</a>
            </li>
            <li class=""><a class="" >Вебмастер ПОИСК@mail.ru </a>
            </li>
            <li class=""><a class="" >Google Keyword Planner (AdWords)</a>
            </li>
            <li class=""><a class="" >Яндекс.Директ (Яндекс.Вордстат)</a>
            </li>
            <li class=""><a class="" >Цена за клик</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" >Позиции</a>
        <ul>
            <li class=""><a class="" >Сводка</a>
            </li>
            <li class=""><a class="" >Цветовая схема</a>
            </li>
            <li class=""><a class="" >Проверка позиций</a>
            </li>
            <li class=""><a class="" >Сортировка данных</a>
            </li>
            <li class=""><a class="" >Позиции конкурентов</a>
            </li>
            <li class=""><a class="" >Сниппеты</a>
            </li>
            <li class=""><a class="" >Режимы сравнения</a>
            </li>
            <li class=""><a class="" >Гостевая ссылка</a>
            </li>
            <li class=""><a class="" >Целевая страница</a>
            </li>
            <li class=""><a class="" >Экспорт данных </a>
            </li>
            <li class=""><a class="" >Отчет</a>
            </li>
            <li class=""><a class="" >Позиции не совпадают</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/audit/">Аудит</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/audit/sitemap/">Генератор карты сайта</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/audit/website-auditor/">Технический анализ сайта</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/audit/indexed/">Проверка индексации страниц</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/audit/watcher/">Радар (отслеживание изменений)</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/ppc/">Контекстная реклама</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/ppc/campaign/">Рекламная кампания</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/ppc/integration/">Интеграция</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/ppc/broker/">Управление ставками</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/ppc/schedule/">Расписание коррекций</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/ppc/log/">Журнал</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/analytics/">Аналитика</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/visibility/">Видимость</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/average-position/">Средняя позиция</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/positions/">Позиции</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/top-structure/">Структура топа</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/traffic/">Трафик</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/backlinks/">Обратные ссылки</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/analytics/indexation/">Индексация</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/shortener/">Сокращатель ссылок</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/shortener/favorites/">Избранные ссылки</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/shortener/bin/">Корзина</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/updates/">Апометр</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/updates/features/">Особенности</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/updates/search-index/">Поисковый индекс</a>
            </li>
        </ul>
    </li>
    <li class=""><span class="icon-chevron-right switcher switcher-closed"></span><span class="icon-chevron-down switcher switcher-opened"></span><a class=" folder" href="https://topvisor.ru/support/mobile/">Мобильное приложение</a>
        <ul>
            <li class=""><a class="" href="https://topvisor.ru/support/mobile/ios/">iOS</a>
            </li>
            <li class=""><a class="" href="https://topvisor.ru/support/mobile/android/">Android</a>
            </li>
        </ul>
    </li>
</ul></div>
 <div class="content_help"><h1>С чего начать?</h1><br>

Топвизор - это сервис поисковой аналитики, инструменты для анализа и оценки эффективности поискового продвижения сайта. Как правило, на этапе знакомства с сервисом могут возникать вопросы, ответы на которые можно сразу получить, обратившись к команде разработчиков через любой удобный для вас канал связи: телефонный звонок, обращение в поддержку, сообщение на email, сообщение или комментарий в социальных медиа.<br><br>

Лучший канал для связи с нами - это система обработки заявок или тикет-система. Преимущество заключается в том, что заявка пользователя видна всем сотрудникам компании, что позволяет всем и сразу быть в курсе вопроса или проблемы пользователя. Другой, не менее значимый канал для получения информации, - это Справочный центр. Как правило, ответы на вопросы пользователей сопровождаются цитатами или ссылками на страницы, содержащие исчерпывающие иллюстрированные ответы или пошаговые руководства. Прежде чем приступить к использованию сервиса, обязательно прочтите и осмыслите содержимое руководства.<br><br>

<h3>ШАГ 1</h3><br>

<h2>Прочтите ответы на часто задаваемые вопросы</h2><br>

Перед тем как читать руководство, рекомендуем вам ознакомиться с часто задаваемыми вопросами и ответами на них. Вопросы собраны и находятся на главной странице Справочного центра. Пробегитесь по списку - возможно, там уже есть вопрос, который вы собирались задать.<br><br>

<h3>ШАГ 2</h3><br>

<h2>Изучите прайс-лист и узнайте как пополнить баланс</h2><br>

Большинство инструментов сервиса платные. Прайс-лист содержит все актуальные базовые цены на предоставляемые услуги. Пополнить баланс можно несколькими способами: Банковской картой (VISA/MasterCard), Webmoney, Яндекс.Деньги, PayPal и Qiwi. Оплата для юридических лиц также поддерживается.<br>
Обратите внимание, ООО Топвизор является российским юридическим лицом и предоставляет услуги на основе договора оферты (Пользовательского соглашения) и договора возмездного оказания услуг. При заключении договора возмездного оказания услуг или при оплате по оферте предоставляются все необходимые закрывающие документы для бухгалтерии.<br><br>

<h3>ШАГ 3</h3><br>

<h2>Познакомьтесь с инструментами</h2><br>

Чтобы получить представление об основных инструментах и элементах управления, предлагаем ознакомиться с картами интерфейсов, перечисленными ниже.<br><br>

<ol>
 <li>
 Список проектов. 
 <a class="site" href="#" title="Список проектов" target="_blank"><span class="icon-external-link"></span></a>
 </li>
 <li>
 Ядро (Подбор слов/Сбор подсказок/Магнит). 
 <a class="site" href="#" title="Магнит" target="_blank"><span class="icon-external-link"></span></a>
 </li>
 <li>
 Проверка позиций. 
 <a class="site" href="#" title="Проверка позиций" target="_blank"><span class="icon-external-link"></span></a>
 </li>
 <li>
 Радар (Отслеживание изменений на сайте). 
 <a class="site" href="#" title="Радар" target="_blank"><span class="icon-external-link"></span></a>
 </li>
 <li>
 Бид-менеджер (Управление ставками Яндекс.Директ). 
 <a class="site" href="#" title="Биддер" target="_blank"><span class="icon-external-link"></span></a>
 </li>
</ol><br>
 </div>
 </div>
</div>
	</div>



	
	</main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer" id="footer">
<!--НИЖНЕЕ МЕНЮ-->
	<div class="footer_menu">
		<div class="container">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Заборы</a></li>
				<li><a href="#">Мощение плиткой</a></li>
				<li><a href="#">Навесы</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
	</div>
<!--//НИЖНЕЕ МЕНЮ-->
	<div class="container">
		<div class="table footer_table">
			<div class="cell">
				<a href="#" class="footer_logo"><img src="images/logo_w.png"></a>
			</div>
			<div class="cell">
				<div class="f_contacts">
					<div class="contact_item">
						<img src="images/ico4.png"><p>+7 (812) 904-64-35<br />+7 (812) 337-15-64</p>
					</div>	

					<div class="contact_item">
						<img src="images/ico5.png"><p>info@lenzabor.ru</p>
					</div>	

					<div class="contact_item">
						<img src="images/ico6.png"><p>г. Кировск, Ленинградская обл.,<br />ул. Песочная, д. 6 </p>
					</div>	
				</div>
			</div>
			<div class="cell">
				<div class="f_social">
				<p>поделиться</p>
					<ul>
						<li><a href="#"><img src="images/vk.png">Вконтакте</a></li>
						<li><a href="#"><img src="images/fb.png">FaceBook</a></li>
						<li><a href="#"><img src="images/tw.png">Twitter</a></li>
						<li><a href="#"><img src="images/ok.png">Одноклассники</a></li>
					</ul>	
				</div>
			</div>
		</div>		
	</div>
	<div class="copyright"><div class="container">© компания «Ленстройдача», 2016</div></div>
</footer><!-- .footer -->

</body>
</html>