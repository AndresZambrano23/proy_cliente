<?php 
// require('head.php');
// $head = head();
// print_r($head);
// echo "
// <!--<nav class='navbar navbar-expand-sm bg-light navbar-light'>
//   <ul class='navbar-nav'>
//     <li class='nav-item active'>
//       <a class='nav-link' href='#'>Active</a>
//     </li>
//     <li class='nav-item'>
//       <a class='nav-link' href='#'>Link</a>
//     </li>
//     <li class='nav-item'>
//       <a class='nav-link' href='#'>Link</a>
//     </li>
//     <li class='nav-item'>
//       <a class='nav-link disabled' href='#'>Disabled</a>
//     </li>
//   </ul>
// </nav>-->
// ";

echo"prueba";

$usu=$_REQUEST['usu'];
$pass=$_REQUEST['pass'];
$tip=$_REQUEST['tip'];
$id=$_REQUEST['id'];

echo $usu.' - '.$pass.' - '.$tip.' - '.$id;


        $_SESSION['ID'] = $id;
        $_SESSION['usuario'] = $usu;
        $_SESSION['tip'] = $tip;
        



        if ($tip == 1) {
            echo '<script>  alert("Bienvenido");
    window.location="cliente/indexCliente.php" ;
   </script>';
        } else if ($tip == 2) {
            echo '<script>  alert("Bienvenido");
    window.location="administrador/indexAdministrador.php" ;
         </script>';
        } elseif ($tip == 3) {
            echo '<script>  alert("Bienvenido");
   window.location="restaurante/indexRestaurante.php" ;
        </script>';
        } elseif ($tip == 4) {
            echo '<script>  alert("Bienvenido");
   window.location="mensajero/indexMensajero.php" ;
        </script>';
        }

?>