<?php
include ("../clases/Usuario.php");
include ("../lib/constantes.php");
include ("../lib/db.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($_SESSION["Usuario"]) && !isset($_POST["usuario"])){
    var_dump($_SESSION)."Leonardo";    
    header("location:".URLBASE);
    exit;
}


if(!isset($_SESSION["Usuario"])){
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];
    $oUsr=new Usuario($usuario, "", $clave);

    if($oUsr->Valida()){
        
        $_SESSION["Usuario"]=$oUsr;
        
    }
    else{
        echo "ERROR de las CREDENCIALES";
    }
}
else{
    $oUsr=$_SESSION["Usuario"];
}

echo "PERFECTO ".$oUsr->getNombre();
echo "<a href=".URLBASE."menu.php />Menu Principal</a>";
echo "<a href=".URLBASE."CerrarSesion.php />Cerrar sesion</a>";
