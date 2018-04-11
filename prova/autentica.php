<?php

	if(file_exists("cliente.xml")){
		//modificaçao
		header('Content-Type: text/html; charset=utf-8');
		$arquivo = "cliente.xml";
		$xml = simplexml_load_file($arquivo);
		
		$posicao = sizeof($xml->cliente);
		
		if($xml->cliente[$posicao]->email = $_POST["email"] && $xml->cliente[$posicao]->senha = $_POST["senha"]){
			$i = 0;
			$xml->cliente[$posicao]->senha = $i++;
			header("location:home.php");
		}
	}
	else{
		echo "Nenhum cliente encontrado! <br />";
		echo "<a href = 'cadastro.php'> Cadastre-se </a>";
	}

?>