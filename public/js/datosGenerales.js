$(document).ready(function(){
	$('.delete-item').click(function(event){
	    event.preventDefault();
	    var urlId = $(this).data('urlid');
	    swal({
			title: "Êtes-vous sûr?",
			text: "Cette action est irréeversible...",
			icon: "warning",
			buttons: ["Annuler", "Supprimer définitevement"],
		}).then(function(action){
        	if(action === true){
        		$.ajax({
        			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        			type: 'DELETE',
        			url: '/dashboard/datos_generales/' + urlId,
        			success: function(data){
	        			console.log(data);
        			}
				});
			}
		});
	});

	$('.delete-img').click(function(event){
		event.preventDefault();
		deleteImg(this);
	});
});

function cargarImagen(input){
	var txt = $(input).attr('id');
	var i = txt.match(/\d/g);
	i = parseInt(i.join(""));
	readURL(input, i);
}

function deleteImg(button){
	if ($(button).data('imgid') !== '') {
		var imgId = $(button).data('imgid');
		swal({
			title: "Êtes-vous sûr?",
			text: "Cette action est irréeversible...",
			icon: "warning",
			buttons: ["Annuler", "Supprimer définitevement"],
		}).then(function(action){
			if(action === true){
        		$.ajax({
        			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        			type: 'DELETE',
        			url: '/dashboard/datos_generales/removeimg/' + imgId,
					success:function(data){
						if (data === true || data === 'true') {
							$(button).closest('.linea').remove();
							$("#cuantasCuantas").val(parseInt($("#cuantasCuantas").val())-1);  	
						}
					}
				});
			}
		});
	}else{
		swal({
			title: "Êtes-vous sûr?",
			text: "Cette action est irréeversible...",
			icon: "warning",
			buttons: ["Annuler", "Supprimer définitevement"],
		}).then(function(action){
			console.log(action, $(button).closest('.linea'));
			if(action === true){
				$(button).closest('.linea').remove();
        	}
		});
	}
	return false;
}

function readURL(input, i) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    $('#pre-view'+i).html('<img id="blah'+i+'" src="#" alt="your image" style="height:100px; width:auto;" /><a href="#" onclick="deleteImg(this);return false;" class="delete-img" data-imgid=""><i class="fa fa-trash"></i></a>');
    reader.onload = function(e) {
      $("#blah"+i).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
    if($('#inputs-files'+(i+1)).length<1){
	    $('#inputs-files'+i).after('<div class="col-md-6 linea" id="inputs-files'+(i+1)+'">'+
								    '<div>'+
			        					'<input type="file" accept=".png, .jpg, .jpeg" class="img col-md-4" name="imgInp[]" id="imgInp'+(i+1)+'" onchange="cargarImagen(this)"/>'+
			        					'<div id="pre-view'+(i+1)+'" class="col-md-4">'+
		        				  	'</div>'+
		        				  	'<div class="col-md-12">'+
										'<div class="form-group">'+
											   '<label for="url">URL</label>'+
											   	'<input type="text" name="url'+(i+1)+'" class="form-control" />'+
										'</div>'+
								    '</div>'+
		    					 '</div>');
    }
  }
}

function cargaImage(input){
	var txt = $(input).attr('id');
	readTheURL(input);
}

function readTheURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    $('#pre-view').html('<img id="blah" src="#" alt="your image" style="height:100px; width:auto;" />');
    reader.onload = function(e) {
      $("#blah").attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

