//=acceder al div info para mostrar información==========================
var resultado = document.getElementById("info");

//=Funcion para mostrar todos los ususarios==============================
function mostrarProductos()
{
var xmlhttp;
if (window.XMLHttpRequest) {
	xmlhttp = new XMLHttpRequest();
}else{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange = function(){
	if (this.readyState === 4 && this.status === 200) {
		resultado.innerHTML = xmlhttp.responseText;
	} 
}
	xmlhttp.open("GET","servidor.php?personas=" + "personas", true);
	xmlhttp.send();
}

//=funcion para casilla editar nombre de usuario==================================
function editarUsuario(usuarioID){
	var nombreID = "nombreID" + usuarioID;
	var emailID = "emailID" + usuarioID;
	var borrar = "borrar" + usuarioID;
	var actualizar = "actualizar" + usuarioID;
	var editarNombreID = nombreID + "-editar";

	//obtener nombres de cada persona
	var nombreDelUsuario = document.getElementById(nombreID).innerHTML;
	var parent = document.querySelector("#"+nombreID);
	if (parent.querySelector("#"+editarNombreID)===null) {
		document.getElementById(nombreID).innerHTML = '<input type="text" id = "'+editarNombreID+'" value = "'+nombreDelUsuario+'">';
		document.getElementById(borrar).disabled = "true";
		document.getElementById(actualizar).style.display = "block";
	}
}


//=funccion para actualizar nombre de usuario en DB================
function actualizarUsuario(usuarioID){

var xmlhttp;
if (window.XMLHttpRequest) {
	xmlhttp = new XMLHttpRequest();
}else{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

var nombreActualizado = document.getElementById("nombreID" + usuarioID + "-editar").value;

xmlhttp.onreadystatechange = function(){
	if (this.readyState === 4 && this.status === 200) {
		mostrarUsuarios();
	} 
}
xmlhttp.open("GET","servidor.php?usuarioIDActualizado="+usuarioID + "&nombreActualizado=" + nombreActualizado, true);
xmlhttp.send();
}

//=funccion para borrar usuario en DB================
function borrarUsuario(usuarioID){
 var respuesta = confirm("esta seguro de borrar el usuario");
if (respuesta === true) {
 	if (window.XMLHttpRequest) {
	xmlhttp = new XMLHttpRequest();
	}else{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function(){
	if (this.readyState === 4 && this.status === 200) {
		mostrarUsuarios();
	} 
	}

xmlhttp.open("GET","servidor.php?usuarioIDEliminado="+usuarioID, true);
xmlhttp.send();

}
}

//=mostrar ventana para nuevo igreso================
var overlay = document.getElementById("overlay");
var nuevaVentana = document.getElementById("nuevaVentana");

function ejecutarNuevaVentana(){
	overlay.style.opacity = .9;

	if (overlay.style.display == "block") {
		overlay.style.display = "none";
		nuevaVentana.style.display = "none";
	}else{
		overlay.style.display = "block";
		nuevaVentana.style.display = "block";
	}

	document.getElementById("nuevoUsuarioID").value = "";
	document.getElementById("nuevoEmailID").value = "";
	document.getElementById("nuevoContrasenaID").value = "";
}

function agregarUsuario(){
	overlay.style.display = "none";
	nuevaVentana.style.display = "none";
	if (window.XMLHttpRequest) {
	xmlhttp = new XMLHttpRequest();
	}else{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	var nuevoUsuario = document.getElementById("nuevoUsuarioID").value;
	var nuevoEmail = document.getElementById("nuevoEmailID").value;
	var nuevoContrasena = document.getElementById("nuevoContrasenaID").value;
	xmlhttp.onreadystatechange = function(){
	if (this.readyState === 4 && this.status === 200) {
		mostrarUsuarios();
	} 
	}

	xmlhttp.open("GET","servidor.php?nuevoUsuario="+nuevoUsuario+"&nuevoEmail="+nuevoEmail+"&nuevoContrasena="+nuevoContrasena, true);
	xmlhttp.send();
}

//=funcion ejecutada por defecto================
mostrarUsuarios();