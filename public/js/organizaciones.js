$(document).ready(function(){
	$('#savee').click(function(){
		$('.lista').each(function(key, val){
			if($(this).find('input[name="imgInp[]"]').get(0).files.length > 0){
				var txt = $(this).attr('id');
				var id = txt.match(/\d/g);
				id = parseInt(id.join(""));
				var flag = false;
				if (key == $('.lista').length-1) {
					flag = true;
				}
				edit(this, id, flag);
			}else{
				swal({
					title: "Attention",
					text: "Vous devez selectioner une image",
					icon: "warning"
				});
			}
		});
	});

	$('#addOrganizacion').click(function(event){
		event.preventDefault();
		var combien= $('.lista').length;
		$(this).parent().before('<div id="list0" class="col-md-12 lista">'+
								'<input name="imgInp[]" accept=".png, .jpg, .jpeg" id="imgInp'+combien+'" onchange="cargarImagen(this)" class="img col-md-2" style="margin-top: 3%;" type="file">'+ 
								'<div id="pre-view0" class="col-md-3 delete-img-container" style="margin-top: 3%;">'+
									'<img id="blah'+combien+'" src="#" alt="your image" style="height: 100px; width: auto;">'+
								'</div>'+ 
								'<div class="form-group col-md-4">'+
									'<label for="texto">Text</label>'+
									'<textarea name="texto" class="form-control newtextarea"></textarea>'+
								'</div>'+ 
								'<div class="form-group col-md-2">'+
									'<label for="nivel">Niveau</label>'+
									'<select id="nivel" name="nivel" class="form-control">'+
										'<option value="0" selected="selected">0</option>'+
										'<option value="1">1</option>'+
										'<option value="2">2</option>'+
									'</select>'+
								'</div>'+
								'<div class="col-md-1">'+
							    	'<a href="" id="0" class="delete-icon" onclick="deleteOrganizacion(this);return false;"><i class="fa fa-trash"></i></a>'+
							    '</div>'+
							'</div>');
		transformToEditor();
		return false;
	});
});

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
  }
}


function deleteOrganizacion(input){
	var id =input.id;
	if(input.id != 0){
		$.ajax({
			headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: 'DELETE',
			url: '/dashboard/deleteOrganizacion/'+id,
			success: function(data){
				$(input).closest('.lista').remove();
			}
		});
	}else{
		$(input).closest('.lista').remove();
	}

}

function edit(linea, id, reload){
	var image = $(linea).find('input[name="imgInp[]"]').get(0).files[0];
	var texto= $(linea).find('textarea[name="texto"]').val();
	var nivel = $(linea).find('select[name="nivel"]').val();
	console.log(image, texto, nivel);
	if(texto!='' && nivel!=''){
		console.log(image, texto, nivel);
		var form = new FormData();
		form.append('id', id);
		form.append('image', image);
		form.append('texto', texto);
		form.append('nivel', nivel);
		$.ajax({ 
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: 'POST', 
	        url: '/dashboard/editOrganizacion',
	        processData: false,
	        contentType: false, 
	        data: form,
				success:function(){
					if(reload == true){
						window.location.href='/dashboard/organizaciones?res=true';
					}		
				}
		});
	}
}


