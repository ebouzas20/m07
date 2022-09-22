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

$contadorH = array(0,1,2,3,4,5,6,7,8,9);
$contadorP = array(0,1,2,3,4);

foreach ($contadorP as $planta){

foreach ($contadorH as $hab){
$persones = random_int(0,4);


if ($persones == 4)
echo("La Habitació $hab de la planta $planta esta plena\n") ;
elseif ($persones == 0) {
echo("La Habitació $hab de la planta $planta esta buida\n"); 
}
else
echo("La Habitació $hab de la planta $planta hi han $persones persones\n");
}
}
?>

    </body>
</html>
