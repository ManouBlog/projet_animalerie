<?php
// connexion a la base de donnee
include ('connexion_db.php');

$id=$_GET['id'];
$delete = $conn->prepare("DELETE FROM animalerie_listes WHERE id=:id");
$delete->execute([":id"=>$id]);
header('location:delete.php');

?>