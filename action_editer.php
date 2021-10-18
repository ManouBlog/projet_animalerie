<?php
// connexion a la base de donnee
include ('connexion_db.php');
$id=htmlspecialchars($_POST['id']);
$nom = htmlspecialchars($_POST['nom']);
$race = htmlspecialchars($_POST['race']);
$categorie = htmlspecialchars($_POST['categorie']);
$poids = htmlspecialchars($_POST['poids']);
$age = htmlspecialchars($_POST['age']);
$cout = htmlspecialchars($_POST['cout']);
$taille = htmlspecialchars($_POST['taille']);
$fourrue = htmlspecialchars($_POST['fourrue']);

$insert = $conn->prepare("UPDATE animalerie_listes SET nom=:nom,race=:race,categorie=:categorie,poids=:poids,age=:age,cout=:cout,taille=:taille,fourrue=:fourrue WHERE id=$id");
$insert->execute(array(":nom"=>$nom,":race"=>$race,":categorie"=>$categorie,":poids"=>$poids,":age"=>$age,":cout"=>$cout,":taille"=>$taille,":fourrue"=>$fourrue));
header('location:bord.php');

?>