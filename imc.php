<?php
/*Exercício*/
$imc = 23.5;

switch(true) {
	case ($imc >= 40):
		echo "Obesidade Grau III (mórbida).";
		break;
	case ($imc >= 35 AND  $imc <= 39.9):
		echo "Obesidade Grau II (severa).";
		break;
	case ($imc >= 30 AND $imc <= 39.9):
		echo "Obesidade Grau I.";
		break;
	case ($imc >= 25 AND $imc <= 29.9):
		echo "Pré-obeso.";
		break;
	case ($imc >= 25):
		echo "Sobrepeso.";
		break;
	case ($imc>= 18.5 AND $imc <= 24.9):
		echo "Normal.";
		break;
	case ($imc <= 18.5):
		echo "Baixo peso.";
		break;
	default: 
		echo "Quilograma por metro quadrado inválido";
}


?>