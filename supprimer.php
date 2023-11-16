<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
<div class="suprime">	
<?php 
$id =$_GET['var'];
//Connexion au serveur de BD
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
//Creation de la requete de suppression 
$req ="DELETE FROM information WHERE cni =$id";
//echo "<br>$req";
$resultat = mysqli_query($conn, $req)or die(mysqli_error($conn));
if($resultat){
	//echo "Suppression reussie! <br>";
	echo "<a href='affichagev2.php'>Afficher la liste</a><br>";
}
else{
	echo " Echec de la Suppression ";
}
?>
</div>
</body>
</html>