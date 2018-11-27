<?php 
if (!isset($_SESSION)) {
        session_start();
}

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