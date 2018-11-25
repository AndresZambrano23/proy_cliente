$(document).ready(function(){
	$("#btnregistrar").click(function(){
		var varusuario = $("#usuario").val();
		var varpassword = $("#password").val();
		var vartipousuario = $("#tipousuario").val();


		var parametros = {
			'usuario':varusuario,
			'password':varpassword,
			'tipousuario':vartipousuario
		};	

		$.ajax({
			url:"http://localhost:82/Essen/Vistas/registrar_usuario.php",
			type:"POST",
			data:parametros,
			dataType:"json",
			success:function(dato){
				// $("#info").text(dato);
				alert('Usted se ha registrado exitosamente'+dato);
				console.log(dato);
				self.location.href ='login.php';
				return false;		
			},
			error:function(dato){
				alert('Usted se ha registrado exitosamente'+dato);
				console.log(dato);
				self.location.href ='login.php';
				return false;
			}
		});
	});

	$("#btnregresar").click(function(){
		alert('regresando');
		self.location.href ='login.php';
		return false;
	});

});
