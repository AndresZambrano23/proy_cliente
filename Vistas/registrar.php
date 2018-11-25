<?php 
require('head.php');
$head = head();
print_r($head);
echo "
<body id='LoginForm'>
<div class='container'>
    <h1 class='form-heading'>REGISTRATE AQUI</h1>
    <div class='login-form'>
        <div class='main-div'>
            <div class='panel'>
                <h2>REGISTRATE AQUI</h2>
            </div>

                <form id='Login'>
                    <div class='form-group'>
                        <input type='TEXT' class='form-control'  id='usuario' placeholder='Nombre de usuario'>
                    </div>

                    <div class='form-group'>
                        <input type='password' class='form-control' id='password' placeholder='Password'>
                    </div>

                    <div class='form-group'>
                        <input type='text' class='form-control' id='tipousuario' placeholder='Que usuario eres'>
                    </div>

               



                    <button type='submit' class='btn btn-primary' id='btnregistrar'>REGISTRESE</button>
                    <input type='submit' value='Atras' class='btn btn-info' id='btnregresar'>
                </form>
        </div>
    </div>
</div>


</body>
";



?>