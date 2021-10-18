<?php
session_start();
// connexion a la base de donnee
include ('connexion_db.php');
if (session_start()) {
session_destroy();
header('location:seconnecter.php');
}

?>