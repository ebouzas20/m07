<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
		<title>FORM</title>
	</head>
	
	<body>
		<?php 
	   $nom = "John";
	   $cognom = "Doe";
	   $edat = 34;
	   $data_naixement = date("jS, F, Y", strtotime("12.05.1983"));
	   $phone = 650191311;
	   $adreça = "Barcelona - Espanya";
	   $email = "pepe@gmailo.com";
	   $treballa = "si";
	   $height = 167;
		?>
	
		<form method="POST">
			<div>
				<h1>Descrivint a <?php echo $nom ." ". $cognom ?></h1>
				<br>
				<h2>Les dades de <?php echo $nom ?> son:</h2>
				<ul>
					<li>Es diu: <?php echo $nom?></li>
  					<li>Te <?php echo $edat?> anys</li>
  					<li>Va nexier l'any: <?php echo $data_naixement?></li>
					<li>El seu telefon es: <?php echo $phone?></li>
					<li>Viu a: <?php echo $adreça?></li>
					<li>El seu email es: <?php echo $email?></li>
					<li>I actualment <strong><?php echo $treballa?></strong> treballa</li>					
				<ul>
			</div>
		</form> 
	</body>
</html>
