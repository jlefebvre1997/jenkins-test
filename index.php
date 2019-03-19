<!DOCTYPE html>
<html>
<head>
	<title>HELLO</title>
</head>
<body>
	<h1>Salut</h1>
	<?php 
		$pdo = new PDO("mysql:host=mariadb;dbname=db;charset=utf8mb4", "user", "password");

		$query = $pdo->prepare('create table if not exists compteur (id int auto_increment not null primary key, compteur int not null)');
		$query->execute();

		$compteur = $pdo->prepare('select compteur from compteur');
		$compteur->execute();

		if ($compteur->rowCount() === 0) {
			$query = $pdo->prepare('insert into compteur values (default, 0)');
			$query->execute();
		} else {
			echo $compteur->fetchColumn();
			$query = $pdo->prepare('update compteur set compteur = compteur + 1 where id = 1');
			$query->execute();
		}
	?>
</body>
</html>