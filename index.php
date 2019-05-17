<?php 
session_start();
require 'config.php';

if(empty($_SESSION["logado"])) {
	header("Location: login.php");
} else {
	$codigo = "";
    $email = "";

	$sql = "SELECT * FROM usuarios WHERE id = ".addslashes($_SESSION["logado"]);
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		$dado = $sql->fetch();
		$email = $dado["email"];
		$codigo = $dado["codigo"];
		$convidados = $dado["convidados"];
	}
}
?>
<h1>Acesso Restrito para o usuário: <?php echo $email; ?></h1>
<a href="sair.php">Sair</a><br>
<p>Link para convites: http://localhost/projetoRegistroConvite/cadastro.php?codigo=<?php echo $codigo;  ?></p><br>
<p>Convites cadastrados com sucesso: <?php echo $convidados; echo ($convidados >= 5)? "<br><br> Limite de convites alcançado!":"" ?></p>
