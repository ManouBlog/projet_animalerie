<?php

 //  connexion a la base de donnee
 include ('connexion_db.php');
 
 $id=htmlspecialchars($_POST['id']);
 $produit = htmlspecialchars($_POST['produits']);
 $quantite_min= htmlspecialchars($_POST['quantites_min']);
 $qt_stock = htmlspecialchars($_POST['quantites_stock']);
 $categorie = htmlspecialchars($_POST['categories']);
 $insert = $conn->prepare("UPDATE animalerie_produits SET produits=:produits,quantites_min=:q_min,quantites_stock=:q_stock,categories=:categories WHERE id=$id");
 $insert->execute(array(":produits"=> $produit,":q_min"=>$quantite_min,":q_stock"=>$qt_stock,":categories"=> $categorie));
 header('location:produits_animaux.php');

?>