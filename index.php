<?php

// connexion a la base de donnee
include ('connexion_db.php');

//inserer les infos dans la table de base de donnee

if (isset($_POST['submit'])) {

 /*recuperè les textes qui seront inserés dans las inputs */   
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $cpass = htmlspecialchars($_POST['cpass']);

    $insert = $conn->prepare("INSERT INTO animalerie_user (username,pass,cpass) VALUES (?,?,?)");
    $insert->execute(array($user,$pass, $cpass));
}
$conn=null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Inscription</title>
</head>
<body>
    <div class="content">
    <h1>Animalerie</h1>
        <form action="" method="post">
          
           <div>
               <label for="name">Nom utilisateur:</label> <br>
               <input type="text" name="username" id="user">
           </div>
           <div>
               <label for="pass">Mot De Passe:</label> <br>
               <input type="password" name="pass" id="pass">
           </div>
           <div>
               <label for="cpass">Confirmation Mot De Passe:</label> <br>
               <input type="password" name="cpass" id="cpass">
           </div>
           <div>
               <input type="submit" value="envoyer" name="submit">
           </div>
            
        </form>
    </div>
</body>
</html>