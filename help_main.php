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


	<main class="content">
		<div class="container">

<!--BREADCRUMBS-->
	<div class="bx-breadcrumb">
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_0" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemref="bx_breadcrumb_1">
				
				<a href="#" title="Главная" itemprop="url">
					<span itemprop="title">Главная</span>
				</a>
			</div>
			<div class="bx-breadcrumb-item">
				<i class="fa fa-angle-right"></i>
				<span>Справочный центр</span>
			</div><div style="clear:both"></div>
	</div>
<!--//BREADCRUMBS-->
<h1>Справочный центр</h1>
<div class="help_main">
	<ul>
		<li><a href="#"><img src="images/help/i1.png"><span>Строительство каркасно-щитовых домов</span></a></li>
		<li><a href="#"><img src="images/help/i2.png"><span>Фундаменты</span></a></li>
		<li><a href="#"><img src="images/help/i3.png"><span>Поэтапное строительство</span></a></li>
		<li><a href="#"><img src="images/help/i4.png"><span>Строительство бань</span></a></li>
		<li><a href="#"><img src="images/help/i5.png"><span>Строительство беседок</span></a></li>
		<li><a href="#"><img src="images/help/i6.png"><span>Внутренняя отделка</span></a></li>
		<li><a href="#"><img src="images/help/i7.png"><span>Водоемы: пруды, ручьи, бассейны</span></a></li>
		<li><a href="#"><img src="images/help/i8.png"><span>Заборы</span></a></li>
		<li><a href="#"><img src="images/help/i9.png"><span>Ворота и калитки</span></a></li>
		<li><a href="#"><img src="images/help/i10.png"><span>Дизайн интерьера</span></a></li>
		<li><a href="#"><img src="images/help/i11.png"><span>Ландшафтный дизайн</span></a></li>
		<li><a href="#"><img src="images/help/i12.png"><span>Канализация — септики</span></a></li>
	</ul>
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