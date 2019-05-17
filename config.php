<?php 
$dsn = "mysql:dbname=projeto_registro_convite;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falha na conexão:".$e->getMessage();
}
?>