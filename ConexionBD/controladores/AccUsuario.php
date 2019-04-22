<?php
include ("../lib/constantes.php");
include ("../lib/db.php");
include ("../clases/Usuario.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$oUsr=new Usuario($usuario, "", $clave);

if($oUsr->Valida()){
    echo "PERFECTO ".$oUsr->getNombre();
    $_SESSION["Usuario"]=$oUsr;
    echo "<a href=".URLBASE."menu.php />Menu Principal</a>";
//    echo "<a href=".URLBASE."CambiarClave.php />Cambiar Clave</a>";
}
else{
    echo "ERROR de las CREDENCIALES";
}

