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
			if ($('div#slideshow').length > 0 && $('div#slideshow div.item').length > 1) {site.slideshow.init(); }
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
			$('div#slideshow').addClass('owl-carousel');
			$('.owl-carousel').owlCarousel({
				loop:true,
				nav:true,
				dots:false,
				responsive:{
					0:{
						items:1
					}
				}
			});
		}
	};
	site.contact = {
		init:function(){
			site.contact.animation();
			$('form#contact_form').submit(function(event){
				var ulError = $(this).find('ul#errorMsg'),
					canSend = site.contact.validate(formToJSON(this));
				ulError.html('');
				if (canSend !== true) {
					var liMsg = '';
					event.preventDefault();
					for (var i = 0; i < canSend.length; i++) {
						if(canSend[i] !== true) {
							liMsg += '<li>'+canSend[i]+'</li>';
						}
					}
					ulError.html(liMsg);
					return false;
				}
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