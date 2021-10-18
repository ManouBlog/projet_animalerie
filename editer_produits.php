<?php

 //  connexion a la base de donnee
 include ('connexion_db.php');

 $id=$_GET['id'];

 $select = $conn->prepare("SELECT * FROM animalerie_produits WHERE id=$id");
 $select->execute(array($id));
 if ($select) {
    $row = $select->fetch(PDO::FETCH_ASSOC);
 }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre A jour</title>
    <style>
*,*::after,*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
form{
    width:50%;
    margin:3em auto;
}
form div{
    margin:.5em 0;
    padding:0 3em;  
}
form div input:not(input[type="submit"]){
    width:100%;
    height:40px;
    padding-left:2em;
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
.close{
    background: crimson;
    
}
.close a{
    text-decoration:none;
    color:white;
    font-weight:bold;
}
    </style>
</head>
<body>
    <header>
        <h1>METTRE A JOUR LES PRODUITS</h1>
    </header>
<form action="action_editer_produit.php" method="post">
        <div>
        <label for="produits">Produits:</label> <br>
<input type="text" name="produits" id="produits" placeholder="produits" value="<?php echo $row["produits"];?>" required>
        </div>
        <div>
            <label for="qt_min">quantite_minimal:</label> <br>
            <input type="text" name="quantites_min" id="qt_min" placeholder="quantités_minimal" value="<?php echo $row["quantites_min"];?>" required>
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        </div>
        <div>
        <label for="qt_stock">quantite_stock:</label> <br>
            <input type="text" name="quantites_stock" id="qt_stock" placeholder="quantités_stock" value="<?php echo $row["quantites_stock"];?>" required>
        </div>
        <div>
        <label for="categorie">categories:</label> <br>
            <input type="text" name="categories" id="categories" placeholder="categories" value="<?php echo $row["categories"];?>" required>
        </div>
        <div>
            <input type="submit" name="submit" value="update">
            <button class="close"><a href="produits_animaux.php">Annuler</a></button>
            <button class="voir"><a href="produits_animaux.php">listes</a></button>
        </div>
    </form>
</body>
</html>