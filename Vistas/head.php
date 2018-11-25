<?php 
function head(){
    $head ='
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ESSEN</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/body.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../css/regist.css" />
    </head>
    <body> ';
    return $head;
}

function footer(){
    $footer ='
    <script src="../bootstrap-4.0.0/dist/js/jquery-1.11.3.min.js"></script>
    <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="../JS/registrar_usuario.js" type="text/javascript"></script>
    <script src="../JS/validar_usuario.js" type="text/javascript"></script>
    </body>
    </html>
    ';
    return $footer;
}
?>