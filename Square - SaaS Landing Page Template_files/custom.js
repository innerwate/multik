
$(window).on('load', function () {



	"use strict";





	/* ========================================================== */

	/*   Navigation Background Color                              */

	/* ========================================================== */



	$(window).on('scroll', function () {

		if ($(this).scrollTop() > 450) {

			$('.navbar-fixed-top').addClass('opaque');

		} else {

			$('.navbar-fixed-top').removeClass('opaque');

		}

	});





	/* ========================================================== */

	/*   Hide Responsive Navigation On-Click                      */

	/* ========================================================== */



	$(".navbar-nav li a").on('click', function (event) {

		$(".navbar-collapse").collapse('hide');

	});





	/* ========================================================== */

	/*   Navigation Color                                         */

	/* ========================================================== */



	$('#navbarCollapse').onePageNav({

		filter: ':not(.external)'

	});





	/* ========================================================== */

	/*   SmoothScroll                                             */

	/* ========================================================== */



	$(".navbar-nav li a, a.scrool").on('click', function (e) {



		var full_url = this.href;

		var parts = full_url.split("#");

		var trgt = parts[1];

		var target_offset = $("#" + trgt).offset();

		var target_top = target_offset.top;



		$('html,body').animate({ scrollTop: target_top - 70 }, 1000);

		return false;



	});





	/* ========================================================== */

	/*   Newsletter                                               */

	/* ========================================================== */



	$('.newsletter-form').each(function () {

		var form = $(this);

		//form.validate();

		form.submit(function (e) {

			if (!e.isDefaultPrevented()) {

				jQuery.post(this.action, {

					'email': $('input[name="nf_email"]').val(),

				}, function (data) {

					form.fadeOut('fast', function () {

						$(this).siblings('p.newsletter_success_box').show();

					});

				});

				e.preventDefault();

			}

		});

	});





	/* ========================================================== */

	/*   Register                                                 */

	/* ========================================================== */



	$('#register-form').each(function () {

		var form = $(this);

		//form.validate();

		form.submit(function (e) {

			if (!e.isDefaultPrevented()) {

				jQuery.post(this.action, {

					'names': $('input[name="register_names"]').val(),

					'email': $('input[name="register_email"]').val(),

					'phone': $('input[name="register_phone"]').val(),

					'ticket': $('select[name="register_ticket"]').val(),

				}, function (data) {

					form.fadeOut('fast', function () {

						$(this).siblings('p.register_success_box').show();

					});

				});

				e.preventDefault();

			}

		});

	})





	/* ========================================================== */

	/*   Contact                                                  */

	/* ========================================================== */

	$('#contact-form').each(function () {

		var form = $(this);

		//form.validate();

		form.submit(function (e) {

			if (!e.isDefaultPrevented()) {

				jQuery.post(this.action, {

					'names': $('input[name="contact_names"]').val(),

					'email': $('input[name="contact_email"]').val(),

					'phone': $('input[name="contact_phone"]').val(),

					'message': $('textarea[name="contact_message"]').val(),

				}, function (data) {

					form.fadeOut('fast', function () {

						$(this).siblings('p').show();

					});

				});

				e.preventDefault();

			}

		});

	})

});



/* ========================================================== */

/*   Popup-Gallery                                            */

/* ========================================================== */

$('.popup-gallery').find('a.popup1').magnificPopup({

	type: 'image',

	gallery: {

		enabled: true

	}

});



$('.popup-gallery').find('a.popup2').magnificPopup({

	type: 'image',

	gallery: {

		enabled: true

	}

});



$('.popup-gallery').find('a.popup3').magnificPopup({

	type: 'image',

	gallery: {

		enabled: true

	}

});



$('.popup-gallery').find('a.popup4').magnificPopup({

	type: 'iframe',

	gallery: {

		enabled: false

	}

});

$("#scroll-btn").click(function () {
	$('html, body').animate({
		scrollTop: $("#about").offset().top
	}, 1000);
});

$(".to_top").click(function () {
	$('html, body').animate({
		scrollTop: $("#to_top").offset().top
	}, 1000);
});


$("input[name='male']").change(function () {

	if ($("input[value='1']").prop("checked")) {
		$('.type_hair.man').css("display", "flex");
		$('.type_hair.girl').css("display", "none");

	} else {
		$('.type_hair.girl').css("display", "flex");
		$('.type_hair.man').css("display", "none");
	}
});
$('.sogl').click(function () {
	if ($(this).is(':checked')) {
		$('.btn-buy-finish').removeAttr('disabled');
	} else {
		$('.btn-buy-finish').attr('disabled', 'disabled');
	}
});
$(".btn-buy_seria").click(function(){
	$('.active_seria').removeClass('active_seria');
	$('.btn-buy_seria').each(function(index){
		var price = $(this).attr('data-price');
		$(this).html('Купить за '+price+'₽');
	})
	$(this).toggleClass('active_seria');
	$(this).html('Выбрано');
	var data = $(this).attr("data-seria");
	var cost = $(this).attr("data-price");
	$('.seria-input').val(data);
	$('.seria-input-cost').val(cost);
	$('html, body').animate({
			scrollTop: $("#zakaz").offset().top
	}, 1000);
});
function handleFileSelect(evt) {
	var file = evt.target.files; // FileList object
	var f = file[0];
	// Only process image files.
	if (!f.type.match('image.*')) {
		alert("К загрузке доступны только изображения..");
	}
	var reader = new FileReader();
	// Closure to capture the file information.
	reader.onload = (function (theFile) {
		return function (e) {
			// Render thumbnail.
			var span = document.createElement('span');
			span.innerHTML = ['<img class="thumb" title="', escape(theFile.name), '" src="', e.target.result, '" />'].join('');
			$('#fl_nm').css("display", "none");
			$('.fl_upld').find('span').css("display", "none");
			$('#drop t').text("Выбрать другую");
			document.getElementById('upld').insertBefore(span, null);
		};
	})(f);
	// Read in the image file as a data URL.
	reader.readAsDataURL(f);
}
document.getElementById('fl_inp').addEventListener('change', handleFileSelect, false);


$('.slider').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	arrows: true,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				slidesToShow: 1,
			}
		}
	]
});


$('.slider__popup').magnificPopup({
	type: 'image'
	// other options
});


$(function () {
	$.ajaxSetup({
		url: 'submit_file.php', // путь к php-обработчику
		type: 'POST', // метод передачи данных
		dataType: 'json', // тип ожидаемых данных в ответе
		beforeSend: function () { // Функция вызывается перед отправкой запроса
			console.debug('Запрос отправлен. Ждите ответа.');

			// тут можно, к примеру, начинать показ прелоадера, в общем, на ваше усмотрение
		},
		error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
			console.error('Упс! Ошибочка: ' + text + ' | ' + error);
		},
		complete: function () { // функция вызывается по окончании запроса
			console.debug('Запрос полностью завершен!');
			// тут завершаем показ прелоадера, если вы его показывали
		}
	});
	var submit_ok;
	$("button.btn-buy.btn-buy-finish").click(function () {
		submit_ok = 1;
		if ($('.seria-input').val() == '') {

			$('.errors_messages').html('Выберете серию');
			$('.errors_messages').removeClass('success');
			$('.errors_messages').addClass('error');
			$('html, body').animate({
				scrollTop: $("#ancToSeries").offset().top
			}, 2000);
			submit_ok = 0;

		}

		if ($('#fl_inp').val() == '') {

			$('.errors_messages').html('Загрузите фотографию');
			$('.errors_messages').removeClass('success');
			$('.errors_messages').addClass('error');
			$('html, body').animate({
				scrollTop: $("#upld").offset().top
			}, 2000);
			submit_ok = 0;
		}
		if (!$('input[name="male"]').is(':checked')) {
			$('.errors_messages').html('Выберите пол.');
			$('.errors_messages').removeClass('success');
			$('.errors_messages').addClass('error');
			$('html, body').animate({
				scrollTop: $(".chose_male").offset().top
			}, 2000);
			submit_ok = 0;
		}
		if (!$('input[name="color_hair"]').is(':checked')) {
			$('.errors_messages').html('Выберите цвет волос.');
			$('.errors_messages').removeClass('success');
			$('.errors_messages').addClass('error');
			$('html, body').animate({
				scrollTop: $(".color_hair").offset().top
			}, 2000);
			submit_ok = 0;
		}


		$('form').on('submit', function (e) {
			e.preventDefault();
			if( isLat($('#fio').val()) == false ){
				
				if (submit_ok == 1) {
					var $that = $(this),
						formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
					$.ajax({
						contentType: false, // важно - убираем форматирование данных по умолчанию
						processData: false, // важно - убираем преобразование строк по умолчанию
						data: formData,
						success: function (json) {
							if (json) {
								$('.errors_messages').fadeIn(1);
								$('html').append(json);// тут что-то делаем с полученным результатом
							}
						}
					});
				}
			} else{
		    	$('.errors_messages').html('Введите имя на русском');
				$('.errors_messages').removeClass('success');
				$('.errors_messages').addClass('error');
	            submit_ok = 0;
		    }

		});

	});

	var isLat = function (str) {
    	return /[a-zA-Z]/i.test(str);
	}
	
	setTimeout(()=>$('.photo_format_alert_wrap').css({
		'display':'block',
		'left': '50px'
	}) , 2000)
	
	$('.photo_format_alert_close').click(function(){
		$('.photo_format_alert_wrap').css('left','-400px')
		setTimeout(()=>$('.photo_format_alert_wrap').css('display','none') , 1000);
	});
});


// $.magnificPopup.open({
// 	items: {
// 			src: '<div id="test-modal" class="white-popup"><button title="Close (Esc)" type="button" class="mfp-close">×</button><div class="pyro"><div class="before"></div><div class="after"></div></div><h1>Внимание!</h1><p class="modal__text">До 01.08.2020 цена на мультфильм составляет всего 500 руб.</p><p></p></div>',
// 			type:'inline'
// 	},
// 	modal: true
// });