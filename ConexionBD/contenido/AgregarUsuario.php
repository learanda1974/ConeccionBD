<?php
        // put your code here
        include '../lib/constantes.php';
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
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div class='define'>
                    <h1>Titulo de la página</h1>
                </div>
            </header>
        
            <section>
                <div class="contenedorRes">

                    <form action="../controladores/AgregarUsuario.php" method="POST"> 
                        Nombre Usuario: <input name="nombreusurio" type="text">
                        <br>
                        User: <input name="nombre" type="text" required="">
                        Password: <input name="password" type="password" required="">
                        
                        
                        <input type="submit" value="Enviar"  >                     
                    </form>
                    <div<p><a href="<?=URLBASE;?>">Volver</a></p><br> <input type="button" value="" />
                </div>
                
                
            </section>
        </div>
                
        <?php
        // put your code here
        ?>
    </body>
</html>
