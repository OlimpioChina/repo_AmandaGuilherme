<!DOCTYPE html>

<html lang = "pt-BR">
	<head>
		<title>Login</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "prova.css" />
	</head>
	
	<body>
		<div>
		<h1>Login</h1>
		<form action = "autentica.php" method = "post">
	
			Login:
			<input type = "email" name = "email" />
			<br /><br />
			
			Senha:
			<input type = "password" name = "senha" />
			<br /><br />
			
			<input type = "submit" value = "Acessar" />
			<input type = "reset" value = "Apagar" />
			<br />
			
			<nav>
			<a href = "cadastro.php">Cadastre-se</a>
			</nav>
		</form>
		</div>
	</body>
	
</html>