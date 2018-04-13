<?php

	session_start();
	if(isset($_POST["deposito"])){
		if(file_exists("cliente.xml")){
			$arquivo = "cliente.xml";
			$xml = simplexml_load_file($arquivo);
			
			foreach($xml as $i=>$v) {
				if($v->email == $_SESSION["email"]) {
					$v->saldo = $v->saldo + $_POST["deposito"];
					$xml->asXML($arquivo);
					break;
				}
			}
			
			echo"<html lang = 'pt-BR'>";
			echo"<head>";
			echo"<title>Deposito</title>";
			echo"<meta charset = 'UTF-8' />";
			echo"<link rel = 'stylesheet' type = 'text/css' href = 'prova.css' />";
			echo"</head>";
			echo"<body>";
			echo"<div class = 'autentica'>";
			echo "Seu saldo apos o deposito: R$" . $v->saldo; 
			echo "<br /><br /><br />";
			echo "<nav>";
			echo "<a href = 'home.php'>Voltar</a>";
			echo "</nav>";
			echo "</div>";
			echo"</body>";
			echo"</html>";
		}
	}
	else{
?>
<!DOCTYPE html>

<html lang = "pt-BR">
	<head>
		<title>Deposito</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "prova.css" />
	</head>

	<body>
	<div class = "dep">
		<h1>Deposito</h1>
		<form action = "" method = "post">
		Indique o valor a ser depositado:
		<input type = "number" name = "deposito" />
	
		<input type = "submit" value = "Depositar" />
		</form>
	</div>
	<body>
	
</html>
<?php
	}
?>