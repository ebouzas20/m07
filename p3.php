<html>
	<head>
		<meta charset="UTF-8">
        <title>P3</title>
	</head>
	<body>

		<?php
		function kmRecorregut(){
			echo (rand(5, 15) . "km");
		}

		function vehicleCreat(){
			echo ($marca . " " . $preu . " " . $km);
		}

		class vehicle{
			public $marca;
			public $any;
			public $cavalls;
			public $km;
			public $preu;
    	
		}
		
		function __constructor($marca, $preu, $km){
			$this->marca = $marca;
			$this->preu = $preu;
			$this->km = $km;
		}

		function setCoche($marca, $preu, $km){
			$this->marca = $marca;
			$this->preu = $preu;
			$this->km = $km;
		}

		function getCoche($marca, $preu, $km){
			return $this->marca;
			return $this->preu;
			return $this->km;
		}

		

?>
	</body>
</html>

