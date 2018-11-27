// $(document).ready(function(){
// 	$("#btnlogin").click(function(){
// 		var varusuario = $("#usuario").val();
// 		var varpassword = $("#password").val();

// 			var parametros = {
// 				usuario:varusuario,
// 				password:varpassword
// 			};

// 			$.ajax({
// 				url:"http://localhost/proyecDise-oWeb-master/Vistas/login_usuario.php",
// 				type:"GET",
// 				data:parametros,
// 				dataType:"json",
// 				success:function(dato){
// 						alert('Bienvenido'+dato);
// 						console.log(dato);
// 						self.location.href ='direccion.php';
// 						return false;	
	
// 				},
// 				error:function(dato){
// 					alert('error'+dato);
// 					console.log(dato);
// 					self.location.href ='JUMM.php';
// 					return false;
// 				}
// 			});
		


		
// 	});


// });

function validarusuario(){

	var varusuario = $("#usuario").val();
	var varpassword = $("#password").val();
	alert(varpassword);
	
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function(){
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200 || xmlhttp.status == 304) {
		alert('Bienvenido');
		var mensaje = xmlhttp.responseText;
		alert(mensaje);

		var datos = JSON.parse(xmlhttp.responseText);
		for (var i in datos) {	
				if (varusuario === datos[i].usuario && varpassword==datos[i].password) {

				self.location.href='direccion.php?usu='+varusuario+'&pass='+varpassword+
				'&tip='+datos[i].tipousuario+'&id='+datos[i].id;
				return false;
					
				}
			}
		}
	}

	xmlhttp.open("GET", "datos.json", true);
	xmlhttp.send();

}