<?php 
session_start();
require 'config.php';

if(isset($_POST["email"]) && !empty($_POST["email"])) {
	$email = addslashes($_POST["email"]);
	$senha = md5(addslashes($_POST["senha"]));

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		$dado = $sql->fetch();
		$_SESSION["logado"] = $dado["id"];
		header("Location: index.php");
		exit;
	} else {
		echo "Email ou senha incorretos!";
	}
}


?>
<h1>Login</h1><br>
<form method="post">
	E-Mail:<br>
	<input type="text" name="email" required=""><br><br>

	senha:<br>
	<input type="password" name="senha" required=""><br><br>

	<input type="submit" value="Entrar">
	<a href="cadastro.php">Cadastrar</a>
</form>