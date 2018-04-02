$(document).ready(function(){

	//PDF File
	$("input#pdf_productos").change(function(){

		var formData = new FormData();
		// En premier on créér les nouveaux emplacements des PDF en FRONT
		$.each(this.files, function(){
			var nPdfTag = '<div class="pdf col-xs-4 col-sm-2 delete-pdf-container newpdf">'+
							'<img src="/imagenes/pdf.gif" alt="pdf">'+
							'<span>'+this.name+'</span>'+
							'<a href="#" class="delete-pdf" onclick="deletepdf(this);return false;" data-pdfid="0">'+
								'<i class="fa fa-trash"></i>'+
							'</a>'+
							'<div class="overlay-loading">'+
								'<i class="fa fa-cog fa-spin"></i>'+
							'</div>'+
						'</div>';
			$('div#all_pdfs').append(nPdfTag);
			formData.append('pdfs[]', this);
		});

		// On envoie ensuite les fichiers au serveur
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: formData,
			dataType: 'JSON',
			processData: false,
			contentType: false,
			type: 'POST',
			url: '/dashboard/productos/uploadpdf',
			success: function(data){
				$.each(data, function(k, v){
					if (v == false) {
						$('div.newpdf').eq(0).remove();
					} else {
						var div = $('div.newpdf').get(0);
						$(div).find('.overlay-loading').remove();
						$(div).find('.delete-pdf').data('pdfid', v);
						$(div).prepend('<input type="hidden" name="pdfId[]" value="'+v+'">');
						$(div).removeClass('newpdf');
					}
				});
			},
			error: function(){
				$('div.newpdf').each(function(){
					$(this).remove();
				});
				alert('Le chargement des PDF a échoué');
			}
		});
	});
	
	$('.delete-item').click(function(event){
	    event.preventDefault();
	    var urlId = $(this).data('urlid'),
	    	boton = $(this);
	    swal({
			title: "Êtes vous sûr?",
			text: "Cette action est irréversible...",
			icon: "warning",
			buttons: ["Annuler", "Effacer définitivement"],
		}).then(function(action){
        	if(action === true){
        		$.ajax({
        			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        			type: 'DELETE',
        			url: '/dashboard/productos/' + urlId,
        			dataType: 'JSON',
        			success: function(data){
	        			if (data === true) {
	        				boton.closest('tr').fadeOut('slow', function(){
	        					$(this).remove();
	        				});
	        			}
        			}
				});
			}
		});
	});

	$('.delete-img').click(function(event){
		event.preventDefault();
		deleteImg(this);
	});

	function makeSlug(){
		var titulo = $('#titulo').val();
	
		$.ajax({ 
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: 'POST', 
	        url: '/dashboard/checkslugproducts', 
	        data: { 'titulo': titulo }, 
	        success: function(data){
	        	console.log(data);
	        	$('#hidden').val(data);
	        }
		});
	}
	$('#titulo').keyup(makeSlug);
});
function deleteImg(button){
	if ($(button).data('imgid') !== '') {
		var imgId = $(button).data('imgid');
		swal({
			title: "Êtes vous sûr?",
			text: "Cette action est irréversible...",
			icon: "warning",
			buttons: ["Annuler", "Effacer définitivement"],
		}).then(function(action){
			if(action === true){
        		$.ajax({
        			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        			type: 'DELETE',
        			url: '/dashboard/productos/removeimg/' + imgId,
					success:function(data){
						if (data === true || data === 'true') {
							$(button).closest('.form-group').remove();
							$("#cuantasCuantas").val(parseInt($("#cuantasCuantas").val())-1);  	
						}
					}
				});
			}
		});
	}else{
		$(button).closest('.form-group').remove();	
	}
	return false;
}

function cargarImagen(input){
	var txt = $(input).attr('id');
	var i = txt.match(/\d/g);
	i = parseInt(i.join(""));
	readURL(input, i);
}

function readURL(input, i) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    $('#pre-view'+i).html('<img id="blah'+i+'" src="#" alt="your image" style="height:100px; width:auto;" /><a href="#" class="delete-img" onclick="deleteImg(this);return false;" data-imgid=""><i class="fa fa-trash"></i></a>');
    reader.onload = function(e) {
      $("#blah"+i).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
    if($('#inputs-files'+(i+1)).length<1){
	    $('#inputs-files'+i).after('<div class="form-group row" id="inputs-files'+(i+1)+'">'+
		        					'<input type="file" accept=".png, .jpg, .jpeg" class="img col-md-3" name="imgInp[]" id="imgInp'+(i+1)+'" onchange="cargarImagen(this)"/>'+
		        					'<div id="pre-view'+(i+1)+'" class="col-md-3 delete-img-container">'+
		        				  	'</div>'+
							        '<div class="form-group col-md-6 leyenda">'+
							        	'<label for="leyenda'+(i+1)+'">Copyright</label>'+
							        	'<input name="leyenda'+(i+1)+'" id="leyenda'+(i+1)+'" class="form-control" type="text">'+
									'</div>'+
		    					 '</div>');
    }
  }
}

function deletepdf(button){
	var pdfId = $(button).data('pdfid');
	swal({
		title: "Vous êtes sûr?",
		text: "Cette action est irréversible...",
		icon: "warning",
		buttons: ["Annuler", "Supprimer Définitivement"],
	}).then(function(action){
		if(action === true){
			$.ajax({
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				type: 'DELETE',
				url: '/dashboard/productos/deletepdf/' + pdfId,
				success:function(data){
					if (data === true || data === 'true') {
						$(button).closest('.delete-pdf-container').remove();  	
					}
				}
			});
		}
	});
}