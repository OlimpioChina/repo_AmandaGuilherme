<?php

	session_start();

	if(file_exists("cliente.xml")){
		//modificaçao
		header('Content-Type: text/html; charset=utf-8');
		$arquivo = "cliente.xml";
		$xml = simplexml_load_file($arquivo);
		
		$posicao = sizeof($xml->cliente);
		
		if($xml->cliente[$posicao]->email = $_POST["email"] && $xml->cliente[$posicao]->senha = $_POST["senha"]){
			$_SESSION["email"] = $_POST["email"];
			header("location:home.php");
		}
	}
	else{
		echo"<html lang = 'pt-BR'>";
		echo"<head>";
	
		echo"<title>Cadastre-se</title>";
		echo"<meta charset = 'UTF-8' />";
		echo"<link rel = 'stylesheet' type = 'text/css' href = 'prova.css' />";
		echo"</head>";
	    echo"<body>";
		echo"<div class = 'autentica'>";
		  echo"<h1>Nenhum cliente encontrado!</h1>";
		  echo "<nav>";
		echo "<a href = 'cadastro.php'> Cadastre-se </a>";
		echo "</nav>";
		echo "</div>";
		echo"</body>";
		echo"</html>";
	}

?>