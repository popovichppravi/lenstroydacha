 /* jQuery fixed_float */
/**
 *
 * Version: 1.0 (11/03/2015)
 * Requires: jQuery v1.8+
 *
 * Copyright (c) 2012 Anthony Terrien
 * Under MIT and GPL licenses:
 *  http://www.opensource.org/licenses/mit-license.php
 *  http://www.gnu.org/licenses/gpl.html
 *
 * Специально для topvisor.ru
 */

// Пример: <div class="fixed_float" data-fixed_float-direction="v">Плавающий блок</div>

$(function(){
	$('.fixed_float').fixed_float();
});

(function($) {
	$.fn.fixed_float = function(options){
		$.map(this, function(el){
			var $this = $(el);

			if($this.data('fixed_float')) return; // already

			var direction = $this.data('fixed_float-direction');

			var $plugin = $this;
			$plugin.options = $.extend({
				$wrapper:false,
				top:0,
				left:0,
				direction:direction||'v' // h/v/hv
			}, options);

			// функции инициализациии плагина
			$plugin.init = function(){
				$plugin.data('fixed_float', $plugin);
							
				$plugin.wrap('<div>');
				$plugin.options.$wrapper = $plugin.parent();
				var h = $plugin.height()+$plugin.css('border-top-width').replace('px', '')*1+$plugin.css('border-bottom-width').replace('px', '')*1;
				$plugin.options.$wrapper.css('height', h).addClass('fixed_float_wrapper');
				$plugin.options.top = $plugin.options.$wrapper.offset().top;
				$plugin.options.left = $plugin.options.$wrapper.offset().left;

				$(window).scroll($plugin.onScroll);
			}

			$plugin.onScroll = function(event){
				// fix reposition block
				$plugin.options.top = $plugin.options.$wrapper.offset().top;
				$plugin.options.left = $plugin.options.$wrapper.offset().left;

				var top = $plugin.options.top;
				var left = $plugin.options.left;
				var scrollTop = $(window).scrollTop();
				var scrollLeft = $(window).scrollLeft();

				$plugin.removeClass('fixed_float_active');
				$plugin.css({top:'auto', left:'auto'});

				switch($plugin.options.direction){
					case 'h':
						if(scrollLeft > left){
							$plugin.addClass('fixed_float_active');
							$plugin.css({top:top-scrollTop, left:0});
						}
					break;
					case 'v':
						if(scrollTop > top){
							$plugin.addClass('fixed_float_active');
							$plugin.css({top:0, left:left-scrollLeft});
						}
					break;
					case 'hv':
						if(scrollTop > top || scrollLeft > left){
							var new_top = top-scrollTop;
							var new_left = left-scrollLeft;
							if(new_top < 0) new_top = 0;
							if(new_left < 0) new_left = 0;

							$plugin.addClass('fixed_float_active');
							$plugin.css({top:new_top, left:new_left});
						}
					break;
				}
			}

			$(window).resize($plugin.onScroll);

			$plugin.init();
		});

		return this;
	};
})(jQuery);

 /* global mo, helper */

$(function(){
	help.$help = $('#help');
	help.$help_content = $('.content', help.$help);
	help.$help_menu = $('#help_menu');

	helper.color_icons_layers($('.icons .icon', help.$help));

	$('a, .switcher', help.$help_menu).click(function(){
		var $li = $(this).closest('li');

		if($li.is('.opened')){
			$li.removeClass('opened');
		}else{
			$li.addClass('opened');
		}

		if($(this).is('a:not(.active)')) $li.addClass('opened');
		help.resize(); // внутри resize() есть выозов scroll()
	});

	// изменение высоты страницы
	$('.spoiler-head').click(function(){
		setTimeout(help.resize);
	});



	// переход по истории браузера
	$(window).bind('popstate', function(){
		help.stop_pushState = true;

		var url = location.pathname;
		$('a[href="'+url+'"]', help.$help_menu).click();
	});

	$(window).resize(help.resize);
	$(window).scroll(help.scroll);
	help.resize(); // внутри resize() есть выозов scroll()

	help.gif_playerinit();
	help.search_init();
});

var help = {};
help.cash = {};

// вставить загруженную страницу
help.stop_pushState = false;
help.insert_page = function(page){
	if(!help.stop_pushState) history.pushState(null, null, page.url);
	help.stop_pushState = false;

	$('title').text(page.title);
	help.$help_content.html(page.html);

	helper.animateScrollTo('top', $('#top_panel').height(), 0);

	$('.auto_height', help.$help).css({'min-height':0});
	$(window).resize();

	// активный пункт меню
	$('a', help.$help_menu).removeClass('active');
	var $a_active = $('a[href="'+page.url+'"]', help.$help_menu);
	$a_active.addClass('active');
	$a_active.parents('li').addClass('opened');

	help.gif_playerinit();
};

help.resize = function(){
	$('.auto_height', help.$help).css({'min-height':0});
	if(help.$help_content.height() < $('ul', help.$help_menu).height()) help.$help_content.css({'min-height':$('ul', help.$help_menu).height()});
	help.scroll();
};

help.scroll = function(){
	// положение меню
	var top;
	if($('.fixed_float', help.$help).is('.fixed_float_active')){
		top = help.$help.offset().top-148;
	}else{
		top = $('#top_panel').height() -8 + help.$help.offset().top - $(window).scrollTop();
	}
	top += 8;

	var left = "auto";//-$(window).scrollLeft();

	var bottom = $(window).height() - ($('#footer').offset().top - $(window).scrollTop());
	if(bottom < 0) bottom = 0;

	help.$help_menu.css({top:top, bottom:bottom, left:left});

	// скролл меню
	var new_scrollTop = $(window).scrollTop()*($(window).height()/$(document).height());
	if(bottom > 0) new_scrollTop = 9999;
	help.$help_menu.scrollTop(new_scrollTop);
};

help.search_init = function(){
	var $form = $('.search_form', help.$help);
	var $input = $('input', $form);
	$input.addClass('autocomplete');
	var $results = $('<div class="input_selector-results autocomplete-results">');
	$input.after($results);

	var folder = location.pathname.split('/')[1];

	var timer;
	var last_value = '';
	$input.keyup(function(){
		if($input.val() == last_value) return;
		var search = $input.val();
		last_value = search;
		clearTimeout(timer);

		if(!search) return $results.empty().hide();

		timer = setTimeout(function(){
			mo.get(function(res){
				$results.empty().hide();

				if(res.length){
					$.map(res, function(el){
						var text = '<span class="text">'+el.text+'</span>';
						$results.append('<a href="'+el.url+'">'+el.title+text+'</a>');
					});

					if($('a', $results).length){
						$('a:eq(0)', $results).addClass('active');
						$results.show();
					}
				}
			}, 'mod_content', 'support_search', {search:search, folder:folder});
		}, 300);
	});
	$input.blur(function(){
		clearTimeout(timer);
		$results.empty().hide();
		$(this).val('');
	});

	$results.on('mousedown', 'a', function(){
		if(location.pathname == '/support/')
			location.href = $(this).attr('href');
		else
			$('a[href="'+$(this).attr('href')+'"]', help.$help_menu).click();
	});

	$input.focus(function(){ $form.addClass('focus'); });
	$input.blur(function(){ $form.removeClass('focus'); });
};

/* global L, mo */

// JavaScript Document
var helper = {};

helper.animateScrollTo = function(to, shift, duration){
	if(shift == undefined) shift = 0;
	if(duration == undefined) duration = 1000;
	var $to;

	if(typeof(to) == 'string'){
		to = to.replace(location.pathname, '');
		to = to.replace('#', '');
		if(to === '') return false;
		$to = $('a[name="'+to+'"], #'+to).eq(0);
	}else{
		$to = to;
	}

	if($to.data('shift')) shift = $to.data('shift');

	var top = $to.offset().top+shift;

	$('html:not(:animated), body:not(:animated)').animate({scrollTop: top}, duration, 'swing');
	return false;
};


helper.color_icons_layers = function($icon_color){
	for(var i = 1; i <= 35; i++) $icon_color.append('<span class="path'+i+'"></span>');
};




