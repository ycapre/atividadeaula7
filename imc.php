<?php 
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];
		
		$altura2 = $altura*$altura;
		$imc = $peso/$altura2;
		
		$resultado = number_format($imc);
		
		if(isset($resultado) && $resultado != '0'){;	
			echo '<h1>Seu IMC é:</h1>';
			echo '<h2>'.$resultado.'</h2>';
		}else{
			echo '<h1>Por favor, utilize apenas numeros!</h1>';	
		}
		?>