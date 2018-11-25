<?php
session_start();

if ($_SESSION['Username']) {
    session_destroy();
    echo '<script language = javascript>
	("Sesion terminada...")
	self.location = "../login.php"
	</script>';
} else {
    echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión, por favor regístrese")
	self.location = "../login.php"
	</script>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
