$(document).ready(function(){

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
			title: "Esta seguro?",
			text: "Esta acción no se puede revertir...",
			icon: "warning",
			buttons: ["Cancelar", "Borrar definitivamente"],
		}).then(function(action){
			if(action === true){
        		$.ajax({
        			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        			type: 'DELETE',
        			url: '/dashboard/paginas/removeimg/' + imgId,
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
	readURL(input);
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    $('#pre-view').html('<img id="blah" src="#" alt="your image" style="height:100px; width:auto;" />');
    reader.onload = function(e) {
      $("#blah").attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
