$(document).ready(function() {
	$('#enviar').on('click',function(e){
		e.preventDefault();
		var nombre=$('#nombre').val();
		var mail=$('#mail').val();
		$.ajax({
			type:"POST",
			url:"Control/guardar.php",
			data:('nombre='+nombre+'&mail='+mail),
			beforeSend:function(){
				$('#alert').show();
				$('#mensaje').html('guardando...');
			},
			success:function(respuesta){
				$('#alert').hide();
				if (respuesta==1){
				$('#mensaje').html('Registrado correctamente');
				}else{
					if (respuesta==0){
					$('#mensaje').html('No es Posible Registrarse');
					}
				}
			}
		});
	});

});
