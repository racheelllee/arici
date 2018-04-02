function initMap() {
    var uluru = {lat: 44.5184515, lng: 0.1578428};
    var map = new google.maps.Map(document.getElementById('maps'), {
      zoom: 9,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
}

(function($){
	function formToJSON(f) {
		var fd = $(f).serializeArray();
		var d = {};
		$(fd).each(function() {
			if (d[this.name] !== undefined){
				if (!Array.isArray(d[this.name])) {
					d[this.name] = [d[this.name]];
				}
				d[this.name].push(this.value);
			}else{
				d[this.name] = this.value;
			}
		});
		return d;
	}
	var site = {
		init:function(){
			if ($('div#content').length > 0) { site.firstLetter(); }
			if ($('main#contact_page').length>0) { site.contact.init(); }
			if ($('div#slideshow').length > 0 && $('div#slideshow ul li.item').length > 1) {site.slideshow.init(); }
			if ($('#others-ones ul#slider li').length > 3) {site.realisations.slideshow();}
			$('nav a#burger').click(function(event){
				$(this).parent().find('ul').toggleClass('activated');
				event.preventDefault();
				return false;
			});
		},
		firstLetter : function(){
			var elem = $("div#content").find('p').eq(0).contents().filter(function () { return this.nodeType == 3 }).first(),
				text = elem.text().trim(),
				first = text.slice(0, 1);

				if (!elem.length)
					return;

			elem[0].nodeValue = text.slice(first.length);
			elem.before('<span id="firstLetter">' + first + '</span>');
		}
	};
	site.slideshow = {
		init: function(){
			$('div#slideshow ul').addClass('owl-carousel');
			$('.owl-carousel').owlCarousel({
				loop:true,
				nav:true,
				dots:false,
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					}
				}
			});
		}
	};
	site.realisations = {
		slideshow: function(){
			console.log('Bonjour');
			$('#others-ones ul#slider').addClass('owl-carousel');
			$('.owl-carousel').owlCarousel({
				loop:true,
				nav:true,
				dots:false,
				margin:0,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					900:{
						items:3
					}
				}
			});	
		}
	}
	site.contact = {
		init:function(){
			site.contact.animation();


			$('form#contact_form').submit(function(event){
				$('form#contact_form').find('button').prop('disabled', true).text('Envoi en cours');
				var ulError = $(this).find('ul#errorMsg'),
					canSend = site.contact.validate(formToJSON(this));
				ulError.html('');
				if (canSend !== true) {
					var liMsg = '';
					for (var i = 0; i < canSend.length; i++) {
						if(canSend[i] !== true) {
							liMsg += '<li>'+canSend[i]+'</li>';
						}
					}
					ulError.html(liMsg);
					$('form#contact_form').find('button').prop('disabled', false).text('Envoyer votre message');
				}else{
					$.ajax({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
	        			method: 'POST',
	        			url: '/contact',
	        			dataType:'JSON',
	        			data: formToJSON($('form#contact_form')),
					}).done(function(datas){
						console.log(datas);
						if (datas === true) {
							$('form#contact_form').after('<div class="succes_envoy"><h2>Votre message a bien été envoyé.</h2><p>Merci pour votre message, nous vous répondrons dans les plus brefs délais.</p></div>');
							$('form#contact_form').remove();
						} else {
							var liMsg = '';
							for (var i = 0; i < datas.length; i++) {
								if(datas[i] !== true) {
									liMsg += '<li>'+datas[i]+'</li>';
								}
							}
							ulError.html(liMsg);		
							$('form#contact_form').find('button').prop('disabled', false).text('Envoyer votre message');
						}
					});
				}
				
				event.preventDefault();
				return false;
			});
		},
		validate:function(datas){
			var nom = true,
				courriel = true,
				sujet = true,
				message = true,
				regMail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (datas.nom.replace(/\s/g,'').length < 1) {
				nom = 'Vous devez renseigner votre nom';
			}
			if (datas.courriel.replace(/\s/g,'').length < 1) {
				courriel = 'Vous devez renseigner votre email';
			} else {
				if (!regMail.test(datas.courriel)) {
					courriel = "L'adresse email est invalide";
				}
			}
			if (datas.sujet.replace(/\s/g,'').length < 1) {
				sujet = 'Vous devez renseigner le sujet de votre message';
			}
			if (datas.message.replace(/\s/g,'').length < 1) {
				message = 'Vous devez renseigner un message';
			}
			return (nom === true && courriel === true && sujet === true && message === true)
				? true
				: [nom, courriel, sujet, message];
		},
		animation:function(){
			$('form#contact_form .form-group input, form#contact_form .form-group textarea').each(function(){
				if ($(this).val() !== '') {
					$(this).parent().addClass('focused');
				}
			});
			$('form#contact_form .form-group input, form#contact_form .form-group textarea').focus(function(){
				$(this).parent().addClass('focused');
			});
			$('form#contact_form .form-group input, form#contact_form .form-group textarea').focusout(function(){
				if ($(this).val() === '') {
					$(this).parent().removeClass('focused');
				}
			});
		}
	};
	$(document).ready(site.init);
})(jQuery);