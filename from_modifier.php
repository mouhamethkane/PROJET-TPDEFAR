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
<div class="modifier">	
<?php
//recuperations de cni transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
$requete = "SELECT * FROM apprenant WHERE cni =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);
?>

<h3> Modification des donnes de l'apprenant <?php echo $ligne['cni']; ?> </h3>

<!--Creation du formulaire dynamique et prechargement des donnees-->
<form action="modifier.php" method="post">
	<input type="hidden" name="cni" 
	value="<?php echo $ligne['cni'];?>"><br>
	<input type="text" name="prenom" 
	value="<?php echo $ligne['prenom'];?>"><br>
	<input type="text" name="nom" 
	value="<?php echo $ligne['nom'];?>"><br>
	<input type="text" name="mail" 
	value="<?php echo $ligne['mail'];?>"><br>
	<input type="text" name="telephone" 
	value="<?php echo $ligne['telephone'];?>"><br>
	<input type="submit" value="Enregistrer">
	<input type="reset" value="Annuler">
</form>
</div>
</body>
</html>