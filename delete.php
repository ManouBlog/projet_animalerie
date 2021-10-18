<?php

// connexion a la base de donnee
include ('connexion_db.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
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
    border:1px solid black;
    
}
th,td{
  text-align:center;
  padding:1em;
 
}

th{
    background:crimson;
    color:white;
    text-transform: capitalize;
    
}
.btn{
    border:2px solid darkblue;
    background: transparent;
    padding:.8em;
}
.btn a{
    text-decoration:none;
    font-weight:bold;
    
    color:black;
    
}
    </style>
</head>
<body>
   <header>
   <h1>Modifier une Donnée</h1>
    <button> <a href="bord.php">Accueil</a></button>
   </header>
<table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>race</th>
            <th>categorie</th>
            <th>poids</th>
            <th>age</th>
            <th>cout</th>
            <th>taille</th>
            <th>fourrue</th>
            <th colspan="2">action</th>
        </tr>
        <?php

      //  connexion a la base de donnee
         include ('connexion_db.php');

          $select = $conn->prepare("SELECT * FROM animalerie_listes");
          $select->execute();
          $nombre=1;
          while ($row=$select->fetch(PDO::FETCH_OBJ)) {
            $nombres=$nombre++;
              echo "
              <tr>
              <td>$nombres</td>
              <td>$row->nom</td>
              <td>$row->race</td>
              <td>$row->categorie</td>
              <td>$row->poids</td>
              <td>$row->age</td>
              <td>$row->cout</td>
              <td>$row->taille</td>
              <td>$row->fourrue</td>
              <td>
              <button class='btn'>
              <a class='delete' href='action_delete.php?id=$row->id'>
              supprimer
              </a>
              </button>
              </td>
          </tr>
              ";
          }
        ?>
    </table>
   
   
  
</body>
</html>