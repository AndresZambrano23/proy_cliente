<?php 
function head(){
    $head ='
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ESSEN</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../../bootstrap-4.0.0/dist/css/bootstrap.min.css"/>
        <script src="../../bootstrap-4.0.0/dist/js/jquery-1.11.3.min.js"></script>
        <script src="../../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    </head>
    <body>';
    return $head;
}

function footer(){
    $footer ='
    <script src="../../JS/validar_usuario.js" type="text/javascript"></script>
    <script src="../../bootstrap-4.0.0/dist/js/jquery-1.11.3.min.js"></script>
    <script src="../../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="../../JS/registrar_usuario.js" type="text/javascript"></script>
    <script src="../../JS/restaurante.js" type="text/javascript"></script>
    </body>
    </html>
    ';
    return $footer;
}
?>