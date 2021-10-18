<?php
 session_start();
// connexion a la base de donnee
include ('connexion_db.php');

?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
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
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 1.5em;
}
header div{
    font-size: 1.2em;
    font-weight: bold;
}
header div a{
    margin-left:1em;
}
main{
    width: 80%;
    margin: .5em auto;
    display: flex;
    flex-wrap: wrap;
    align-items:center;
    justify-content: space-around;
    gap: 1em;
}
main div{
    width:40%;
    height: 100px;
    text-align: center;

    line-height: 100px;
    font-size: 2em;
    border-radius:2em;
    margin: 1em 0;
}
main div a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
main div:nth-child(1){
    background: teal;
}
main div:nth-child(2){
    background: rgb(28, 41, 41);
}
main div:nth-child(3){
    background: rgb(19, 2, 66);
}
main div:nth-child(4){
    background: rgb(6, 36, 0);
}
main div:nth-child(5){
    background: rgb(104, 0, 26);
}
main div:nth-child(6){
    background: rgb(104, 0, 26);
}
main div:nth-child(7){
    background: rgb(104, 0, 26);
}
main div:nth-child(8){
    background: rgb(104, 0, 26);
}
    </style>
</head>
<body>
    <header>
        <h1>Animalerie</h1>
        <div>
            <span>
                <?php echo $_SESSION['uesrname']; ?>
            </span>
            <a href="deconnecter.php">Se deconnecter</a>
        </div>
    </header>
    <main>
        <div>
            <a href="ajouter_animaux.php">Ajouter des animaux</a>
        </div>
        <div>
            <a href="listes_animaux.php">Listes des animaux</a>
        </div>
        <div>
            <a href="modifier_animal.php">Modifier une donnée</a>
        </div>
        <div>
            <a href="delete.php">supprimer un animal</a>
        </div>
        <div>
            <a href="listes_clients.php">voir la liste des clients</a>
        </div>
        
        <div>
            <a href="enregistrer_clients.php">Enregistrer les clients</a>
        </div>
        <div>
            <a href="ventes.php">ventes</a>
        </div>
        <div>
            <a href="produits_animaux.php">Produits pour animaux</a>
        </div>
    </main>
</body>
</html>