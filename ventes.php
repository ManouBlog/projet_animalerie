
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ventes</title>
    <style>
        *,*::after,*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
table{
    width:50%;
    border-collapse:collapse;
    margin:2em auto;
}
th,td{
  text-align:center;
}
td{
    padding:.4em;
}
th{
    background: blueviolet;
    color:white;
}
.voir a{
    text-decoration:none;
    font-weight:bold;
    border:2px solid crimson;
    padding:0em 1em;
    border-radius:5px;
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

    </style>
</head>
<body>
    <header>
        <h1>listes ventes</h1>
        <button> <a href="bord.php">Accueil</a></button>
    </header>
    <table>
    <tr>
        <th>id</th>
        <th>Animaux</th>
        <th>Prix_unitaire</th>
        <th>Nombre</th>
        <th>Total</th>
        <th>Action</th>
        </tr>
        <?php

//  connexion a la base de donnee
   include ('connexion_db.php');

    $select = $conn->prepare("SELECT * FROM animalerie_ventes");
    $select->execute();
    $nombre=1;
    while ($row=$select->fetch(PDO::FETCH_OBJ)) {
        $nombres=$nombre++;
        echo "
        <tr>
        <td>$nombres</td>
        <td>$row->animaux</td>
        <td>$row->prix_unitaire</td>
        <td>$row->nombre</td>
        <td>$row->total</td>
        <td class='voir'><a href='#'>voir</a></td>
        
    </tr>
        ";
    }
  ?>
    </table>
</body>
</html>
