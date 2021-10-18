<?php

// connexion a la base de donnee
include ('connexion_db.php');

    $id=$_GET['id'];

    $select = $conn->prepare("SELECT * FROM animalerie_listes WHERE id=$id");
    $select->execute(array($id));
    if ($select) {
       $row = $select->fetch(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
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
    font-size:1.1em;
    color:white;

}
.close{
    background:rgb(150, 2, 32);
}
    </style>
</head>
<body>
<header>
<h1>Mettre à jour</h1>
    <button> <a href="bord.php">Accueil</a></button>
</header>
<div class="content">
<form action="action_editer.php" method="post">
            <div>
                <label for="nom">Nom de l'animal:</label> <br>
                <input type="text" name="nom" id="nom"  value="<?php echo $row["nom"];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div>
                <label for="race">Race de l'animal:</label> <br>
                <input type="text" name="race" id="race" value="<?php echo $row["race"];?>">
            </div>
            <div>
                <label for="categorie">Categorie de l'animal:</label> <br>
                <input type="text" name="categorie" id="categorie" value="<?php echo $row["categorie"] ;?>">
            </div>
            <div>
                <label for="poids">Poids de l'animal:</label> <br>
                <input type="text" name="poids" id="poids" value="<?php echo $row["poids"];?>">
            </div>
            <div>
                <label for="age">Age de l'animal:</label> <br>
                <input type="text" name="age" id="age" value="<?php echo $row["age"];?>">
            </div>
            <div>
                <label for="count">Cout de l'animal:</label> <br>
                <input type="text" name="cout" id="count" value="<?php echo $row["cout"];?>">
            </div>
            <div>
                <label for="taille">Taille de l'animal:</label> <br>
                <input type="text" name="taille" id="taille"  value="<?php echo $row["taille"];?>">
            </div>
            <div>
                <label for="taille">Fourrue de l'animal:</label> <br>
                <input type="text" name="fourrue" id="fourrue" value="<?php echo $row["fourrue"];?>">
            </div>
            <input type="submit" value="Update" name="submit">
            <button class="close"><a href="modifier_animal.php">Annuler</a></button>
        </form>
    </div>
</body>
</html>
