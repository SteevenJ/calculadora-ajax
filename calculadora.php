<?php

$operacion = $_POST["operacion"];
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

switch ($operacion) {
	case 'suma':
		echo ($numero1+$numero2);
		break;
	case 'resta':
		echo ($numero1-$numero2);
		break;
	case 'multiplicacion':
		echo ($numero1*$numero2);
		break;
	case 'division':
		echo ($numero1/$numero2);
		break;
	default:
		echo "Ni idea pues";
		break;
}



?>