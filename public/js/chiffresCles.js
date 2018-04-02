$(document).ready(function(){
	$('#savee').click(function(){
		$('.lista').each(function(key, val){
			var txt = $(this).attr('id');
			var id = txt.match(/\d/g);
			id = parseInt(id.join(""));
			var flag = false;
			if (key == $('.lista').length-1) {
				flag = true;
			}
			edit(this, id, flag);
		});
	});

	transformToEditor();

	$('#addChiffre').click(function(event){
		event.preventDefault();
		$(this).parent().before('<div class="col-md-12 lista" id="list0">'+
			'<div class="form-group col-md-5">'+
				'<label for="cantidad">Quantité</label>'+
				'<textarea name="cantidad" class="form-control newtextarea"></textarea>'+
			'</div>'+
			'<div class="form-group col-md-5">'+
				'<label for="label">Label</label>'+
				'<textarea name="label" class="form-control newtextarea"></textarea>'+
			'</div>'+
		    '<div class="col-md-1">'+
		    	'<a href="" id="0" class="delete-icon" onclick="deleteChiffre(this);return false;"><i class="fa fa-trash"></i></a>'+
		    '</div>'+
		'</div>');
		transformToEditor();
		return false;
	});
});

function edit(linea, id, reload){
	var value = $(linea).find('textarea[name="label"]').val();
	var suHermano = $(linea).find('textarea[name="cantidad"]').val();
	if(suHermano!='' && value!=''){
		$.ajax({ 
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: 'POST', 
	        url: '/dashboard/editChiffres', 
	        data: { 'id':id, 'value':value, 'hermano':suHermano},
			success:function(){
				if(reload == true){
					window.location.href='/dashboard/chiffres_cles?res=true';
				}		
			}
		});
	} else {
		if(reload == true){
			window.location.href='/dashboard/chiffres_cles?res=true';
		}
	}
}


function deleteChiffre(input){
	var id =input.id;
	if(input.id != 0){
		$.ajax({
			headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: 'DELETE',
			url: '/dashboard/deleteChiffres/'+id,
			success: function(data){
				$(input).closest('.lista').remove();
			}
		});
	}else{
		$(input).closest('.lista').remove();
	}

}
