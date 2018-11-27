<?php 
require('../head2.php');
$head = head();
print_r($head);

session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION) {
    echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "../login.php"
</script>';
}

 $id = $_SESSION['ID'];
 $usu = $_SESSION['usuario']; 
 $tip = $_SESSION['tip'];


/*navegador de opcionees*/
echo"
<nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
  <a class='navbar-brand' href='indexRestaurante.php'>
    <img src='../../img/logo.jpg' alt='Logo' style='width:40px;'>
  </a>
  <ul class='navbar-nav'>
    <li>
      <a class='nav-link' href='inicio.php'>Mis Datos</a>
    </li>
    <li class='nav-item active'>
      <a class='nav-link' href='producto.php'>Mis Datos</a>
    </li>
    <li>
      <a class='nav-link' href='cerrarsesion.php'>Cerrar Sesion</a>
    </li>
  </ul>
</nav>";

echo "
<div onload='mostrarProductos()'>
  
</div>
";


$footer= footer();
echo($footer);


?>