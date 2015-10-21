<?php
	$numero1 = $_POST["num1"];	//$GET["usuario"];
	$numero2 = $_POST["num2"];
	$operacion = $_POST["op"];
		 
	if ($operacion == "+") {
		# code...
		$resultado = $numero1 + $numero2;
		echo "La operacion es $numero1 + $numero2 =". $resultado;
	}elseif ($operacion == "-") {
		# code...
		$resultado = $numero1 - $numero2;
		echo "La operacion es $numero1 - $numero2 =". $resultado;
	}elseif ($operacion == "*") {
		# code...
		$resultado = $numero1 * $numero2;
		echo "La operacion es $numero1 * $numero2 =". $resultado;
	}elseif ($operacion == "/") {
		# code...
		$resultado = $numero1 / $numero2;
		echo "La operacion es $numero1 / $numero2 =". $resultado;
	}
?>