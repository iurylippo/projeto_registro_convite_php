<?php 
session_start();
require 'config.php';

if(!empty($_GET["codigo"])) {
	$codigo = addslashes($_GET["codigo"]);

	$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND convidados < 5";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() == 0) {
		header("Location: login.php");
		exit;
	}

} else {
	header("Location: login.php");
	exit;
}

if(isset($_POST["email"]) && !empty($_POST["email"])) {
	$email = addslashes($_POST["email"]);
	$senha = md5(addslashes($_POST["senha"]));
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() <= 0) {
          
        $sql = "UPDATE usuarios SET convidados = convidados+1 WHERE codigo = '$codigo'";
        $sql = $pdo->query($sql);

    	$codigo = md5(rand(0, 99999).rand(0, 99999));

    	$sql = "INSERT INTO usuarios SET email = :email, senha = :senha, codigo = :codigo";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":codigo", $codigo);
		$sql->execute();
	
		unset($_SESSION['logado']);
		header("Location: index.php");
    	exit;
    } else {
    	echo "Usuário já cadastrado!";
    }
}
	
?>
<h1>Cadastrar Conta</h1><br>
<form method="post">
	E-Mail:<br>
	<input type="text" name="email" required=""><br><br>

	senha:<br>
	<input type="password" name="senha" required=""><br><br>

	<input type="submit" value="Cadastrar">
</form>
