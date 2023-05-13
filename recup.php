<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <title>Carnet d'adresses</title>
	</head>
	<body>
        <h1>Carnet d'adresses</h1>
		<?php
		$mysqli = new mysqli("localhost", "root", "root", "Projet2");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM Restaurant";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['name'] . ' ' . $ligne['menu'] . ' ' . $ligne['invite'] . ' ' . $ligne['email'] . ' ' . $ligne['adresse'] . '<br>';
		}
		$mysqli->close();
		?>
	</body> 
</html>

<?php
		$mysqli = new mysqli("localhost", "root", "root", "Projet2");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM Restaurant";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['name'] . ' ' . $ligne['menu'] . ' ' . $ligne['invite'] . ' ' . $ligne['email'] . ' ' . $ligne['adresse'] . '<br>';
		}
		$mysqli->close();
		?>