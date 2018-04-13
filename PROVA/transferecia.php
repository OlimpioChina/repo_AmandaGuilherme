<?php

	session_start();
	if(isset($_POST["email_cliente1"])){
		if(file_exists("cliente.xml")){
			$arquivo = "cliente.xml";
			$xml = simplexml_load_file($arquivo);
			
			
				foreach($xml as $i=>$v) {
					if($v->/*referencia a tag cliente*/email/*referencia a tag cliente*/ == $_POST["email_cliente1"]){
						$v->saldo = $v->saldo - $_POST["transferencia"];
						$xml->asXML($arquivo);
						break;
					}
				}
				foreach($xml as $i=>$v) {
					if($v->email == $_POST["email_cliente2"]){
						$v->saldo = $v->saldo + $_POST["transferencia"];
						$xml->asXML($arquivo);
						break;
					}
				}
				
				echo "<html lang = 'pt-BR'>";
				echo "<head>";
				echo "<title>Transferencia</title>";
				echo "<meta charset = 'UTF-8' />";
				echo "<link rel = 'stylesheet' type = 'text/css' href = 'prova.css' />";
				echo "</head>";
			    echo "<body>";
				echo "<div class = 'trans2'>";
				echo "<h1>Transferencia feita com sucesso!</h1><br />";
			    echo "Seu saldo após a transferencia:" . $v->saldo; 
				echo "<br /><br />";
				echo "<nav>";
			    echo "<a href = 'home.php'> Voltar</a>";
				echo "</nav>";
				echo "</div>";
				echo "</body>";
				echo "</html>";
		}
	}
	else{
?>

<!DOCTYPE html>

<html lang = "pt-BR">
	<head>
		<title>Transferencia</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "prova.css" />
	</head>
	
	<body>
		<div class = "trans">
		  <h1>Transferencia</h1>
			<form action = "" method = "post">
			Digite seu E-mail:
			<input type = "email" name = "email_cliente1" />
			<br />
			
			Digite o E-mail a ser transferido:
			<input type = "email" name = "email_cliente2" />
			<br />
			
			Valor a ser transferido:
			<input type = "number" name = "transferencia" />
			<br />
			
			<input type = "submit" value = "Transferir" />
			<nav>
			<a href = "index.php">Voltar</a>
			</nav>
			</form>
		</div>
	</body>
	
</html>
<?php
	}
?>