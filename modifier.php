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
<div class="modifier1">	
<?php 
//recuperation des donnees du formulaire
$cni =$_POST['cni'];
$prenom =$_POST['prenom'];
$nom =$_POST['nom'];
$mail =$_POST['mail'];
$telephone =$_POST['telephone'];

//connexion a la BD et execution  de la requete de mise a jour
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
$req="UPDATE apprenant
		SET prenom = '$prenom',
		nom = '$nom',
		mail = '$mail',
		telephone = '$telephone'
		WHERE cni = $cni";
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));

//echo "Modification effectuer <br>";
echo "<a href='affichagev2.php'>retourner a la liste</a><br>";
?>
</div>
</body>
</html>