<?php
include ("../clases/Usuario.php");
include ("../lib/constantes.php");
include ("../lib/db.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombreusurio   = $_POST["nombre"];
$nombre         = $_POST["nombreusurio"];
$password       = $_POST["password"];

$oUsr=new Usuario($nombreusurio, $nombre, $password,"");
var_dump($oUsr);
if($oUsr->Valida()){
    echo "Usuario existe";
//    echo "<a href=".URLBASE."CambiarClave.php />Cambiar Clave</a>";
}
else{
     if($oUsr->AgregarUsuario()){
        echo "Usuario Agregado";
    }
}

    
