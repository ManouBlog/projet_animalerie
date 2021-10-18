
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes_clients</title>
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
    width:80%;
    border-collapse:collapse;
    margin:2em auto;
    border:1px solid black;
}

th,td{
  text-align:center;
  padding:1em 0;
 
}
th{
    background:crimson;
    color:white;
    text-transform: capitalize;
    
}
.btn{
   
    background: transparent;
}
.btn a{
    text-decoration:none;
    font-weight:bold;
    color:black;
    border:2px solid darkblue;
    padding:0 1em;
    
}
    </style>
</head>
<body>
<header>
    <h1>Listes Clients</h1>
   <button> <a href="bord.php">Accueil</a></button>
    </header>
    <table>
        <tr>
            <th>ordre</th>
            <th>nom de clients</th>
            <th>Adresse</th>
            <th>numero</th>
            <th>ville</th>
            <th>cartes</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php

      //  connexion a la base de donnee
         include ('connexion_db.php');

          $select = $conn->prepare("SELECT * FROM animalerie_clients");
          $select->execute();
          $nombre=1;
          while ($row=$select->fetch(PDO::FETCH_OBJ)) {
              $nombres=$nombre++;
              echo "
              <tr>
              <td>$nombres</td>
              <td>$row->nom</td>
              <td>$row->adresse</td>
              <td>$row->numero</td>
              <td>$row->ville</td>
              <td>$row->cartes</td>
              <td class='btn'><a href='#'>voir</a></td>
               </tr>
              ";
          }


        ?>
    </table>
</body>
</html>
