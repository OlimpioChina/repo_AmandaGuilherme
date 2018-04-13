<?php

	session_start();
	if(isset($_POST["saque"])){
		if(file_exists("cliente.xml")){
			$arquivo = "cliente.xml";
			$xml = simplexml_load_file($arquivo);
			
				foreach($xml as $i=>$v) {
					if($v->email == $_SESSION["email"]) {
						$v->saldo = $v->saldo - $_POST["saque"];
						$xml->asXML($arquivo);
						break;
					}
				}
			}
			//if($xml->saldo >= $_POST["saque"]){
				echo "<html lang = 'pt-BR'>";
				echo "<head>";
				echo "<title>Saque</title>";
				echo "<meta charset = 'UTF-8' />";
				echo "<link rel = 'stylesheet' type = 'text/css' href = 'prova.css' />";
				echo "</head>";
				echo "<body>";
				echo "<div class = 'autentica'>";
				echo "Seu saldo após o saque: R$" . $v->saldo;
				echo "<nav>";
			    echo "<a href = 'home.php'> Voltar</a>";
				echo "</nav>";
				echo "</div>";
				echo "</body>";
				echo "</html>";
			//}
			/*else{
				echo "<html lang = 'pt-BR'>";
				echo "<head>";
				echo "<title>Saque</title>";
				echo "<meta charset = 'UTF-8' />";
				echo "<link rel = 'stylesheet' type = 'text/css' href = 'prova.css' />";
				echo "</head>";
				echo "<body>";
				echo "<div class = 'autentica'>";
				echo "<h1>Saldo Insuficiente!</h1>";
				echo "<nav>";
				echo "<a href = 'home.php'> Voltar</a>";
				echo "</nav>";
				echo "</div>";
				echo "</body>";
				echo "</html>";
			}*/
	}
	else{
?>

<!DOCTYPE html>

<html lang = "pt-BR">
	<head>
		<title>Saque</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "prova.css" />
	</head>
	
	<body>
		<div class = "dep">
		  <h1>Saque</h1>
		  
		<form action = "" method = "post">
		Indique o valor a ser sacado:
		<input type = "number" name = "saque" />
		
		<input type = "submit" value = "Sacar" />
		</form>
		</div>
	</body>
	
</html>
<?php
	}
?>