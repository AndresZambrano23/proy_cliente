<?php 
require('../head2.php');
$head = head();
print_r($head);

/*navegador de opcionees*/
echo"
<nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
  <a class='navbar-brand' href='indexCliente.php'>
    <img src='../../img/logo.jpg' alt='Logo' style='width:40px;'>
  </a>
  <ul class='navbar-nav'>
    <li class='nav-item active'>
      <a class='nav-link' href='datoscliente.php'>Mis Datos</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='domicilio.php'>Pide a domicilio</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='orden.php'>Verifica Tu Orden</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link disabled' href='terminos.php'>Terminos & Condiciones</a>
    </li>
  </ul>
</nav>";

?>