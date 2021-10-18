<?php

 //  connexion a la base de donnee
 include ('connexion_db.php');
 if (isset($_POST['submit'])) {
     
 /*recuperè les textes qui seront inserés dans las inputs */   
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $numero = htmlspecialchars($_POST['numero']);
    $ville = htmlspecialchars($_POST['ville']);
    $cartes = htmlspecialchars($_POST['cartes']);

    $insert = $conn->prepare("INSERT INTO animalerie_clients (nom,adresse,numero,ville,cartes) VALUES (?,?,?,?,?)");
    $insert->execute(array($nom,$adresse,$numero,$ville,$cartes));
    header('location:bord.php');
 }


?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enregistrer_clients</title>
    <style>
*,*::after,*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
header{
    display:flex;
    justify-content:space-between;
    padding: .5em 1em;
    align-items:center;
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
    font-size:1.3em;
    color:white;

}
form{
    width:50%;
    margin:3em auto;
}
form div{
    padding:0 3em;
}
form div input:not(input[type="submit"]){
    width:100%;
    height:40px;
    margin-bottom:1em;
}
.close,input[type="submit"]{
    width:100px;
    height:30px;
    cursor: pointer;
    border:none;
    font-size:1.2em;
}
input[type="submit"]{
    background: darkblue;
    color:white;
    font-weight:bold;
}
.close{
    background: crimson;
    
}
.close a{
    text-decoration:none;
    color:white;
    font-weight:bold;
}
.voir{
    background:black;
    width:100px;
    height:30px;
    cursor: pointer;
    border:none;
    font-size:1.2em;
}
.voir a{
    text-decoration:none;
    color:white;
    font-weight:bold;
}

    </style>
</head>
<body>
    <header>
        <h1>Enregistrer les informations des clients</h1>
        <button> <a href="bord.php">Accueil</a></button>
    </header>

<div class="content">
        <form action="" method="post">
            <div>
                <label for="nom">Nom du client:</label> <br>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="adresse">adresse du client:</label> <br>
                <input type="text" name="adresse" id="adresse"required>
            </div>
            <div>
                <label for="numero">numero du client:</label> <br>
                <input type="number" name="numero" id="numero" required>
            </div>
            <div>
                <label for="ville">ville du client:</label> <br>
                <input type="text" name="ville" id="ville" required>
            </div>
            <div>
                <label for="cartes">carte banquaire du client:</label> <br>
                <input type="text" name="cartes" id="cartes" required>
            </div>
          <div>
          <input type="submit" value="stocker" name="submit">
            <button class="close"><a href="bord.php">Annuler</a></button>
            <button class="voir"><a href="listes_clients.php">listes</a></button>
          </div>
        </form>
    </div>
    
</body>
</html>