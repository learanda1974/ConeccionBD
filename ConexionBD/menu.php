<?php
include ("../ConexionBD/clases/Usuario.php");
include ("../ConexionBD/lib/constantes.php");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <title></title>
    </head>
    <body>
        
        <div class="menu">
            <ul>
                <li><a class="list-group-item" href="<?=URLBASE;?>"><i class="fa fa-home fa-2x"></i> Menu</a></li>
                <li><a class="list-group-item" href="<?=URLBASE;?>contenido/HOME.php"><i class="fa fa-sun-o fa-2x"></i>HOME </a></li>
                <li><a class="list-group-item" href="<?=URLBASE;?>contenido/CambiarClave.php"><i class="fa fa-sun-o fa-2x"></i>Cambiar Clave </a></li>
                <li><a class="list-group-item" href="<?=URLBASE;?>contenido/AgregarUsuario.php"><i class="fa fa-birthday-cake fa-2x"></i> Agregar Usuario</a></li>
                <li><a class="list-group-item" href="<?=URLBASE;?>contenido/LIST RESERVATION.php"><i class="fa fa-birthday-cake fa-2x"></i> LIST RESERVATION</a></li>
            </ul>
        </div>
        
        <?php
            // put your code here
            echo $_SESSION["Usuario"]->getNomusuario();
        ?>
    </body>
</html>
