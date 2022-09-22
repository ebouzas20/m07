<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $contadorC = array(0,1,2,3,4,5,6,7,8,9);

        foreach ($contadorC as $taula){
        $contadorC = random_int(0,5);

        if ($contadorC == 5)
        echo("La taula $taula esta plena\n") ;


        elseif ($contadorC == 0) {
        echo("La taula $taula esta buida\n"); 

        }

        else
        echo("La taula $taula te $contadorC comensals\n");

        }

        ?>
    </body>
</html>
