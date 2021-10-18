<?php
 session_start();
// connexion a la base de donnee
include ('connexion_db.php');

/*===== verification si l utilisateur fait partir de la base de donnee ====*/

/* verification si l administrateur a cliquer sur le btn
*/

if (isset($_POST['submit'])) {
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $_SESSION['uesrname']=$user;
    $userVerif = $conn->query("SELECT username FROM animalerie_user WHERE username ='$user'");
 /* verifie s il ya au moins une information dans la db 
*/
    if($userVerif->fetch(PDO::FETCH_ASSOC)>0){
       
        $passVerif =$conn->query("SELECT username,pass FROM animalerie_user WHERE username ='$user' AND pass ='$pass'");
/* verifie si le mot de passe ecrire est vraie ou faux
*/
        if ($passVerif->fetch(PDO::FETCH_ASSOC)>0) {
            header('location:bord.php');
        }
        else {
           echo "mot de passe incorrect";
        }
        }
        else {
            echo "pas dans la base de donnee";
        }
    }
   
$conn=null;
?>
<!DOCTYPE html>
<html lang="en">
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
               <input type="submit" value="Se Connecter" name="submit">
           </div>
            
        </form>
    </div>
</body>
</html>