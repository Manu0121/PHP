<?php 

	$host= "localhost";
	$usuario ="root";
	$senha ="";
	$banco = "banco";

	$conexao = new Mysqli("$host", "$usuario","$senha","$banco");

	if ($conexao -> connect_error) {
		echo "Erro de Conexão";
	}
	else{
		echo "Conectado";
	}



 ?>
 