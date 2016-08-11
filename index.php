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

	<!--fancybox-->
  <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
  <script>
  $(document).ready(function() {
  $("#btn_form_phone").fancybox(
		{
			'width': 800,
			'margin': 50,
			'overlayColor': '#534542',
			'centerOnScroll': true
		}); 
});
  </script>
	<!--//fancybox-->

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
<!--Форма обратной связи-->
<link rel="stylesheet" href="css/style_form.css">
<script src="js/form.js"></script> <!-- Resource jQuery -->

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
					<a href="include/form_phone.php" id="btn_form_phone" class="status-icon  hint--bottom-right  hint--error" aria-label="Обратная связь"><img src="images/ico3.png"></a>
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
	<!--СЛАЙДЕР-->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>ДАЧНОЕ СТРОИТЕЛЬСТВО<br />И БЛАГОУСТРОЙСТВО</h2>
					<p>Мощение плиткой,<br />навесы, фундамент, заборы...</p>
					<a href="#" class="da-link y_btn">Узнать подробнее<i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<div class="da-img"><img src="images/1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>ДАЧНОЕ СТРОИТЕЛЬСТВО<br />И БЛАГОУСТРОЙСТВО</h2>
					<p>Мощение плиткой,<br />навесы, фундамент, заборы...</p>
					<a href="#" class="da-link y_btn">Узнать подробнее<i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<div class="da-img"><img src="images/1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>ДАЧНОЕ СТРОИТЕЛЬСТВО<br />И БЛАГОУСТРОЙСТВО</h2>
					<p>Мощение плиткой,<br />навесы, фундамент, заборы...</p>
					<a href="#" class="da-link y_btn">Узнать подробнее<i class="fa fa-angle-right" aria-hidden="true"></i></a>
					<div class="da-img"><img src="images/1.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
	<!--//СЛАЙДЕР-->

<!--БЛОКИ НА ГЛАВНОЙ-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/snap.svg-min.js"></script>
<div class="container main_bs demo-3 ta_center">
	<div class="h2"><img src="images/h2_ico1.png"><span>Наши услуги — установка ограждений</span></div>

			<section class="grid clearfix">
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/1.png" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>забор из металлического штакетника</h2>
							<p>идеально подойдет людям, для которых слово «элегантный» не пустой звук. Благодаря огромному разнообразию материалов и решений по их монтажу, можно создать практически любое решение, которое устроит самого взыскательного клиента</p>
							<button class="y_btn"><span>Подробнее</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
							
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/2.png" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>ЗАБОР<br/>ИЗ ПРОФЛИСТА</h2>
							<p>доступное по цене решение для тех, кто желает обеспечить полную приватность на своей территории. Надежен и долговечен. Широкий выбор цветовых решений позволит создать гармонию между забором и кровлей вашего дома</p>
							<button class="y_btn"><span>Подробнее</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/3.png" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>ЗАБОР ИЗ <br/>СВАРНОЙ СЕТКИ 3D</h2>
							<p>прочный и оригинальный на вид, что обуславливает его широкую область применения. От небольших ограждений, до высоких и прочных, ограничивающих территорию различных объектов городской и производственной инфраструктуры</p>
							<button class="y_btn"><span>Подробнее</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</figcaption>
					</figure>
				</a>
			</section>


			<div class="h2"><img src="images/h2_ico2.png"><span>Наши услуги — калитки и ворота</span></div>

					<section class="grid clearfix">
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/1.png" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>забор из металлического штакетника</h2>
							<p>идеально подойдет людям, для которых слово «элегантный» не пустой звук. Благодаря огромному разнообразию материалов и решений по их монтажу, можно создать практически любое решение, которое устроит самого взыскательного клиента</p>
							<button class="y_btn"><span>Подробнее</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
							
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/2.png" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>ЗАБОР<br/>ИЗ ПРОФЛИСТА</h2>
							<p>доступное по цене решение для тех, кто желает обеспечить полную приватность на своей территории. Надежен и долговечен. Широкий выбор цветовых решений позволит создать гармонию между забором и кровлей вашего дома</p>
							<button class="y_btn"><span>Подробнее</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</figcaption>
					</figure>
				</a>
			</section>

			<div class="info_div"><img src="images/ico7.png"><span>По вопросам установки забора, вы можете связаться с нами по телефону (812) 904-64-35 или (812) 337-15-64 (для бесплатных звонков со стационарных телефонов Санкт-Петербурга)</span></div>

</div>
		<script>
			(function() {
	
				function init() {
					var speed = 300,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( '.grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
<!--//БЛОКИ НА ГЛАВНОЙ-->	

	<main class="content">
		<div class="container">

		<div class="table">
			<div class="cell content_cell">
			<div class="h2"><img src="images/h2_ico3.png"><span>Примеры наших работ</span></div>
<!--ПРИМЕРЫ РАБОТ-->

		<div class="demo-7">
			<ul class="grid_photo cs-style-7">
				<li>
					<figure>
						<img src="images/img1.png" alt="img02">
						<figcaption>
							<h3>Примеры заборов из профилированного листа</h3>
							<a href="#" class="y_btn">Смотреть<i class="fa fa-eye" aria-hidden="true"></i></a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/img2.png" alt="img05">
						<figcaption>
							<h3>Примеры заборов из сварной сетки 3D</h3>
							<a href="#" class="y_btn">Смотреть<i class="fa fa-eye" aria-hidden="true"></i></a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/img4.png" alt="img01">
						<figcaption>
							<h3>Примеры заборов из сетки рабицы</h3>
							<a href="#" class="y_btn">Смотреть<i class="fa fa-eye" aria-hidden="true"></i></a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/img3.png" alt="img03">
						<figcaption>
						<h3>Примеры заборов из поликарбоната</h3>
							<a href="#" class="y_btn">Смотреть<i class="fa fa-eye" aria-hidden="true"></i></a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
		<script src="js/toucheffects.js"></script>
<!--//ПРИМЕРЫ РАБОТ-->


<div class="h2"><img src="images/h2_ico4.png"><span>Статьи</span></div>
<!--СТАТЬИ-->


<div class="articles">
	<div class="art_side scroll-pane">
		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица бывает нескольких видов... </p>			
		</div>

		<div class="article_item">
			<a href="#">Защитные функции забора из сетки рабицы</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>

		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>
		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица бывает нескольких видов... </p>			
		</div>

		<div class="article_item">
			<a href="#">Защитные функции забора из сетки рабицы</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>

		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>
		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица бывает нескольких видов... </p>			
		</div>

		<div class="article_item">
			<a href="#">Защитные функции забора из сетки рабицы</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>

		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>

		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица бывает нескольких видов... </p>			
		</div>

		<div class="article_item">
			<a href="#">Защитные функции забора из сетки рабицы</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>

		<div class="article_item">
			<a href="#">Как выбрать сетку рабицу для забора</a>
			<p>Сетка рабица несмотря на её «воздушный» вид обладает...</p>			
		</div>
	</div>
	<div class="tags_side">
		<div class="h3 ta_center"><img src="images/h3_ico1.png"><span>Выбор тегов</span></div>
		<p class="ta_center">Выберете один или несколько тегов для отображения статей</p>
		<input type="checkbox" id="in1"><label for="in1">рабица</label>, <input type="checkbox" id="in2"><label  for="in2">ПРОФНАСТИЛ</label>, <input type="checkbox" id="in3"><label for="in3">гиттер</label>, <input type="checkbox" id="in4"><label for="in4">штакетница</label>, <input id="in5" type="checkbox"><label for="in5">МАТЕРИАЛЫ</label>,  <input type="checkbox" id="in6"><label for="in6">профнастил</label>, <input type="checkbox" id="in7"><label for="in7">ГИТТЕР</label>, <input id="in8" type="checkbox"><label for="in8">гарантия</label>, <input type="checkbox" id="in9"><label for="in9">установка</label>, <input id="in10" type="checkbox"><label for="in10">калькулятор</label>, <input type="checkbox" id="in11"><label for="in11">сетка рабица 3D</label>, <input type="checkbox" id="inn1"><label for="inn1">рабица</label>, <input type="checkbox" id="inn2"><label  for="inn2">ПРОФНАСТИЛ</label>, <input type="checkbox" id="inn3"><label for="inn3">гиттер</label>, <input type="checkbox" id="inn4"><label for="inn4">штакетница</label>, <input id="inn5" type="checkbox"><label for="inn5">МАТЕРИАЛЫ</label>,  <input type="checkbox" id="inn6"><label for="inn6">профнастил</label>, <input type="checkbox" id="inn7"><label for="inn7">ГИТТЕР</label>, <input id="inn8" type="checkbox"><label for="inn8">гарантия</label>, <input type="checkbox" id="inn9"><label for="inn9">установка</label>, <input id="inn10" type="checkbox"><label for="inn10">калькулятор</label>, <input type="checkbox" id="inn11"><label for="inn11">сетка рабица 3D</label>
	<div class="btn_div">
			<a href="#" class="y_btn">Сбросить<i class="fa fa-refresh" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<!--//СТАТЬИ-->

<div class="h2"><img src="images/h2_ico5.png"><span>Справочный центр (частые вопросы)</span></div>
<p>Cобрание часто задаваемых вопросов по какой-либо теме и ответов на них. Иногда встречается русский аналог этого сокращения — ЧАВО (что, как полагают, означает частые вопросы или же часто задаваемые вопросы и ответы) или простой перевод английской аббревиатуры ЧЗВ (часто задаваемые вопросы). Нередко в рунете встречается и прямая транслитерация, ФАК («посмотри в ФАКе»).</p>
<div class="ta_right mb30px">
	<a href="#" class="y_btn">Перейти<i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>

	<div class="info_div ta_center"><img src="images/ico8.png"><span><b>ПОМНИТЕ!</b> Строить заборы для дачи в СПб можно и самостоятельно, но жизненный опыт подсказывает, что лучше и дешевле выйдет, если довериться профессионалам.</span></div>

			</div>
			
<!--SIDEBAR-->
<div class="cell sidebar_cell">
	<a class="calc_banner wobble-vertical" href="#">
		<img src="images/img5.png">
			<div class="h3">КАЛЬКУЛЯТОР ЗАБОРОВ</div><p>рассчитайте стоимость своего ограждения</p>
	</a>
	<div class="h2"><img src="images/h2_ico6.png"><span>Наши цены</span></div>

	<div class="prices_sidebar">
		<div class="price_item">
			<div class="h3" style="background: #14510c;">из профнастила</div>
			<div class="middle_price"  style="color: #14510c;">от 1350<i class="fa fa-rub" aria-hidden="true"></i><br /><span>за погонный метр</span></div>
			<div class="price_bottom" style="background: #14510c;">
				<a href="#" class="btn_w" style="color: #14510c;">все цены<i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>	

		<div class="price_item">
			<div class="h3">из профнастила</div>
			<div class="middle_price">от 1350<i class="fa fa-rub" aria-hidden="true"></i><br /><span>за погонный метр</span></div>
			<div class="price_bottom">
				<a href="#" class="btn_w">все цены<i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>

	<div class="price_item">
			<div class="h3" style="background: #1d71b8;">из профнастила</div>
			<div class="middle_price"  style="color: #1d71b8">от 1350<i class="fa fa-rub" aria-hidden="true"></i><br /><span>за погонный метр</span></div>
			<div class="price_bottom" style="background: #1d71b8;">
				<a href="#" class="btn_w" style="color: #1d71b8;">все цены<i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	<div class="banner_zamer">
		<img src="images/img6.png">
		<div class="h3">Вы можете<br /><b class="txt_green">БЕСПЛАТНО</b><br />вызвать змерщика</div>
		<a href="#" class="y_btn">Заказать<i class="fa fa-angle-right" aria-hidden="true"></i></a>
	</div>

</div>
<!--//SIDEBAR-->		

</div>
			

		</div>
	</main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">
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