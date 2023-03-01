<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>formulaire</title>
</head>
<body>
	<div class="afform">
<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		//echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from apprenant";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border>";
		echo "<h1> Liste des apprenants et leurs informations</h1>";
		echo "<tr>
				<th>CNI</th>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Mail</th>
				<th>Telephone</th>
				<th>Suppression</th>
				<th>Informations</th>
				<th>Modification</th>
			</tr>";
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo "<tr>";
			echo "<td>".$ligne['cni']."</td>
			<td>".$ligne['prenom']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['mail']."</td>
			<td>".$ligne['telephone']."</td>
			<td><a href='supprimer.php?var=" .$ligne['cni']."'>supprimer</a></td>
			<td><a href='show.php?var=" .$ligne['cni']."'><mark>show</mark></a></td>
			<td><a href='from_modifier.php?var=".$ligne['cni']."'>modifier</a></td>";
			echo "</tr>";
		}
			echo "</table>";
}//fin du else
?>
</div>
</body>
</html>