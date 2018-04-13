<?php

	if(!file_exists("cliente.xml")){
		
		$fp = fopen("cliente.xml","w");
		
		$conteudo_inicial = '<?xml version="1.0"?><cliente></cliente>';
		
		fwrite($fp,$conteudo_inicial);
		
		fclose($fp);
	}

	$arquivo = 'cliente.xml';
	$xml = simplexml_load_file($arquivo);
	
	$nova_posicao = sizeof($xml->cliente);
	
	
	$xml->cliente/*referencia a tag cliente*/[$nova_posicao]->nome/*referencia a tag nome*/ = $_POST["nome"];
	$xml->cliente[$nova_posicao]->email/*referencia a tag email*/ = $_POST["email"];
	$xml->cliente[$nova_posicao]->senha/*referencia a tag senha*/ = $_POST["senha"];
	$xml->cliente[$nova_posicao]->saldo/*referencia a tag senha*/ = 0;
	
	$xml->asXML($arquivo);
	
	header("location:index.php");
?>