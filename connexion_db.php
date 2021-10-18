<?php

try {
$conn = new PDO('mysql:host=localhost;dbname=animalerie','root','');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    echo  $th->getMessage();
}

?>