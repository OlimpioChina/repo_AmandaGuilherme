<!DOCTYPE html>

<html lang = "pt-BR">
	<head>
	
		<title>Cadastre-se</title>
		<meta charset = "UTF-8" />
		
		<link rel = "stylesheet" type = "text/css" href = "prova.css" />
	
	</head>
	
	<body>
		<div>
		  <h1>Cadastre-se</h1>

		<form action = "recebe_cadastro.php" method = "post">
	
		Nome:
		<input type = "text" name = "nome" required = "required"/>
		<br /><br />
		
		Email:
		<input type = "email" name = "email" required = "required" />
		<br /><br />
		
		Senha:
		<input type = "password" name = "senha" required = "required"/>
		<br /><br />
		
		<input type = "submit" value = "Cadastar" />
		<input type = "reset" value = "Apagar" />
			
		</form>
		</div>

	</body>
</html>