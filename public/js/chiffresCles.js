$(document).ready(function(){
	$('#savee').click(function(){
		$('.lista input[name="label"]').each(function(key, val){
			var txt = $(this).parent().parent().attr('id');
			var id = txt.match(/\d/g);
			id = parseInt(id.join(""));
			var flag = false;
			if (key == $('.lista input[name="label"]').length-1) {
				flag = true;
			}
			edit(this, id, flag);
		});
	});

	$('#addChiffre').click(function(){
		 var combien = $('.lista').length;
		$('#list'+(combien)).after('<div class="col-md-12 lista" id="list0">'+
										'<div class="form-group col-md-6">'+
											'<label for="label">Label</label>'+
											'<input name="label" class="form-control" type="text" />'+
										'</div>'+
										'<div class="form-group col-md-6">'+
											'<label for="cantidad">cantidad</label>'+
											'<input name="cantidad" class="form-control" type="text" />'+
										'</div>'+
									'</div>');
	});
});

function edit(input, id, reload){
	var suHermano = $(input).parent().siblings().find('input').val();
	var value = input.value;
	if(suHermano!='' && value!=''){
		$.ajax({ 
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: 'POST', 
	        url: '/dashboard/editChiffres', 
	        data: { 'id':id, 'value':value, 'hermano':suHermano}, 
	        success: function(data){
				if(reload == true){
	        		window.location.href='/dashboard/chiffres_cles?res=true';
				}
	        }
		});
	}
}
