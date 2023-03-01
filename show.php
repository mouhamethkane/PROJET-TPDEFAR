<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="jobphp">    
<?php 
$id =$_GET['var'];

//connexion a la BD et execution  de la requete de mise a jour
$conn = mysqli_connect('localhost', 'root', '', 'TPDEFAR');
$requete = "SELECT * FROM apprenant WHERE cni =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);

//var_dump($ligne);
//echo "recuperation effectuer <h1>" .$ligne['cni']."</h1>" ;
echo "<h1>" .$ligne['nom']."</h1>" ;
echo "<h1>" .$ligne['prenom']."</h1>" ;
echo "<h1>" .$ligne['mail']."</h1>" ;
echo "<h1>" .$ligne['telephone']."</h1>" ;
echo "<h1>" .$ligne['img']."</h1>" ;
echo "<a href='affichagev2.php'>retourner au formulaire</a><br>";
?>


<img src="image/<?php echo $ligne['img'];?>">
</div>    
</body>
</html>
