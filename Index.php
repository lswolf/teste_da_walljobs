<html>
<head>
	<title>Login de Usuário</title>
	<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="login.php">
					<label for="chk" aria-hidden="true">Entrar</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="senha" placeholder="Senha" required="">
					<button  type="submit" value="entrar" id="entrar" name="entrar">Entre</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="cadastro.php">
					<label for="chk" aria-hidden="true">Cadastrar</label>
					<input type="email" name="email" placeholder="Email" required="">
                    <input type="text" name="nome" placeholder="Nome" required="">
                    <input type="numeric" name="cpf" placeholder="CPF" size="11" maxlength="11"  required="">
					<input type="password" name="senha" placeholder="Senha" required="">
					<button>Cadastrar</button>
				</form>
			</div>
	</div>
</body>
</html>
