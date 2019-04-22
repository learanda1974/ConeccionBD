<?php
include("lib/constantes.php");
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
        <title>Form Login | Fazt </title>
        <link href="estilos/estilos.css" rel="stylesheet"/>        
    </head>
    <body>
                
        <div class="login-box">
            <img src="img/download.png" class="avatar" alt="Logo de Coneccion">
            <h1>Login Here</h1>
            <form name="formu" action="<?=URLBASE?>controladores/AccUsuario.php" method="post">
                <!--Username-->
                <label for="username">Username</label>
                <input name="usuario" type="text" placeholder="Enter Username">

                <!--Password-->
                <label for="password">Pasword</label>
                <input name="clave" type="password" placeholder="Enter Password">
                <input type="submit" value="Log In">

                <!--Crear Enlaces-->
                <a href="#">Lost your password?</a><br>
                <a href="#">Don't have an accoint</a>

            </form>
        </div>    
    </body>
</html>
