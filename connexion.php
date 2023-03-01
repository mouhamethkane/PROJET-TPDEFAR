<?php
//connexion au serveur de base de donnees
//parametres : adresse_serveur, login, mot_de_passe, base_de_donnees
$conn = mysqli_connect('localhost','root', '','TPDEFAR');
//tester si la connexion a reussi ou pas 
if(mysqli_connect_errno()){//cas d'echec
	echo 'Echec connexion <br>';
	echo "Message d'erreur : ",mysqli_connect_errno();
}
else{//cas de succes 
	echo 'connexion reussie!';
}
?>