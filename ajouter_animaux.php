<?php

// connexion a la base de donnee
include ('connexion_db.php');

//inserer les infos dans la table de base de donnee

if (isset($_POST['submit'])) {

 /*recuperè les textes qui seront inserés dans las inputs */   
    $nom = htmlspecialchars($_POST['nom']);
    $race = htmlspecialchars($_POST['race']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $poids = htmlspecialchars($_POST['poids']);
    $age = htmlspecialchars($_POST['age']);
    $cout = htmlspecialchars($_POST['cout']);
    $taille = htmlspecialchars($_POST['taille']);
    $fourrue = htmlspecialchars($_POST['fourrue']);

    $insert = $conn->prepare("INSERT INTO animalerie_listes (nom,race,categorie,poids,age,cout,taille,fourrue) VALUES (?,?,?,?,?,?,?,?)");
    $insert->execute(array($nom,$race,$categorie,$poids,$age,$cout,$taille,$fourrue));
    header('location:listes_animaux.php');
}
$conn=null;
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes_animaux</title>
    <style>
*,*::after,*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.content{
    width:50%;
    margin:.5em auto 2em auto;
    padding:0 3em;
}
.content div{
    margin:.5em 0;
}
.content div input{
   width:100%;
   height:45px;
   border-radius:50px;
   border:2px solid gray;
   outline:none;
   padding-left:1.5em;
   margin-top:.5em;
   font-size:1.5em;
}
button,input[type="submit"]{
    width:100px;
    height:40px;
    border:none;
    background: blue;
    color:white;
    font-size:1.3em;
    font-weight:bold;
    cursor: pointer;
    border-radius:10px;
}
button a{
    text-decoration:none;
    color:white;
}
header{
    display:flex;
    justify-content:space-between;
    padding: .5em 1em;
}
header button {
    width:100px;
    border:none;
    background: blue;
    height:30px;
    border-radius:5px;
}
header button a {
    text-decoration:none;
    font-weight:bold;
    font-size:1em;
    color:white;

}
.close{
    background:rgb(150, 2, 32);
}

    </style>
</head>
<body>
<header>
   <h1>Ajouter</h1>
   <div>
   <button> <a href="add_oiseaux.php">Oiseaux</a></button>
   <button> <a href="bord.php">Accueil</a></button>
   </div>
    
</header>
    <div class="content">
        <form action="" method="post">
            <div>
                <label for="nom">Nom de l'animal:</label> <br>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="race">Race de l'animal:</label> <br>
                <input type="text" name="race" id="race"required>
            </div>
            <div>
                <label for="categorie">Categorie de l'animal:</label> <br>
                <input type="text" name="categorie" id="categorie" required>
            </div>
            <div>
                <label for="poids">Poids de l'animal:</label> <br>
                <input type="text" name="poids" id="poids" required>
            </div>
            <div>
                <label for="age">Age de l'animal:</label> <br>
                <input type="text" name="age" id="age" required>
            </div>
            <div>
                <label for="count">Cout de l'animal:</label> <br>
                <input type="text" name="cout" id="count" required>
            </div>
            <div>
                <label for="taille">Taille de l'animal:</label> <br>
                <input type="text" name="taille" id="taille" required>
            </div>
            <div>
                <label for="taille">Fourrue de l'animal:</label> <br>
                <input type="text" name="fourrue" id="fourrue" required>
            </div>
            <input type="submit" value="stocker" name="submit">
            <button class="close"><a href="bord.php">Annuler</a></button>
        </form>
    </div>
</body>
</html>