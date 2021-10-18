<?php

// connexion a la base de donnee
   include ('connexion_db.php');

   if (isset($_POST['submit'])) {
       $produit = htmlspecialchars($_POST['produits']);
       $quantite_min = htmlspecialchars($_POST['quantites_min']);
       $qt_stock = htmlspecialchars($_POST['quantites_stock']);
       $categorie = htmlspecialchars($_POST['categories']);
       
       $insert = $conn->prepare("INSERT INTO animalerie_produits (produits,quantites_min,quantites_stock,categories) VALUES (?,?,?,?)");
       $insert->execute(array($produit,$quantite_min,$qt_stock,$categorie));
       header('location:produits_animaux.php');
   }

     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
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
table{
    width:50%;
    border-collapse:collapse;
    margin:2em auto;
}
th,td{
  text-align:center;
}
td,th{
    padding:.3em;
}
th{
    background: rgb(124, 75, 0);
    color:white;
}
td .editer{
    text-decoration:none;
    font-weight:bold;
    padding:0em .5em;
    background: darkblue;
    color:white;
}
td .delete{
    text-decoration:none;
    font-weight:bold;
    padding:0em .5em;
    background: crimson;
    color:white;
}
form{
    width:50%;
    margin:1em auto;
    text-align:center;
}
form div{
    margin-bottom:.5em;
}
form div input{
    width:80%;
    height:30px;
}
button,input[type="submit"]{
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
button{
    background: crimson;
    
}
button a{
    text-decoration:none;
    color:white;
    font-weight:bold;
}
    </style>
</head>
<body>
    <header>
    <h1>
        Produits animaux
    </h1>
    <button> <a href="bord.php">Accueil</a></button>
    </header>
    <form action="" method="post">
        <div>
            <input type="text" name="produits" id="produits" placeholder="produits" required>
        </div>
        <div>
            <input type="text" name="quantites_min" id="qt_min" placeholder="quantités_minimal" required>
        </div>
        <div>
            <input type="text" name="quantites_stock" id="qt_stock" placeholder="quantités_stock" required>
        </div>
        <div>
            <input type="text" name="categories" id="categories" placeholder="categories" required>
        </div>
        <div>
            <input type="submit" name="submit" value="stocker">
            <button><a href="bord.php">Annuler</a></button>
        </div>
    </form>
    <div>

        <table>
           <tr>
               <th>reference</th>
               <th>produits</th>
               <th>quantite_minimal</th>
               <th>quantite_stock</th>
               <th>categorie</th>
               <th colspan="2">Actions</th>
           </tr>
           <?php

          $select = $conn->prepare("SELECT * FROM animalerie_produits");
         $select->execute();
         $nombre=1;
        while ($row=$select->fetch(PDO::FETCH_OBJ)) {
             $nombres=$nombre++;
            echo "
            <tr>
            <td>$nombres</td>
            <td>$row->produits</td>
            <td>$row->quantites_min</td>
            <td>$row->quantites_stock</td>
            <td>$row->categories</td>
            <td><a class='editer' href='editer_produits.php?id=$row->id'>editer</a>
            <a class='delete' href='supprimer_produits.php?id=$row->id'>supprimer</a>
            </td>
        
        </tr>
            ";
        }

      ?>  
        </table>
    </div>
</body>
</html>

