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
<div class="ajouter">	
<?php 
//recuperation des donnees du fromulaire
$cni = $_POST['cni'];
$prenom = $_POST['prenom'];
$nom =$_POST['nom'];
$mail =$_POST['mail'];
$telephone =$_POST['telephone'];
//ajout image
$imgname=$_FILES['img']['name'];

$targetDir = "image/";                       
$fileName = basename($_FILES["img"]["name"]);
$targetFilePath = $targetDir . $fileName;     
move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
//-------------------------- ------------- -------------------

//move_uploaded_file($imgname, 'image/'.$imgname);

//var_dump($imgname);
//connexion au serveur de BD de la base
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
//creation de la requete SQL pour inserer les donnes
$req="INSERT INTO apprenant(cni, prenom, nom, mail, telephone,img)VALUES('$cni', '$prenom', '$nom', '$mail', '$telephone','$imgname')";
	echo $req. '<br>';
//execution de la requete
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));
if($resultat){
	echo "Insertion reussie! <br>";
	echo "<a href='affichagev2.php'>Afficher la liste?</a>";
	echo "<a href='formulaire.html'>Ajouter un autre apprenant</a>";
}
?>
</div>
</body>
</html>