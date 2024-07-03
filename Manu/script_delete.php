<?php

require_once('header.php');


var_dump($_POST);

    $stmt = $conn->prepare('DELETE 
    FROM disc
    WHERE disc_id = :id');
    $stmt->bindValue(':id', $_POST['Nombredisque']);
    $stmt->execute();
    header('location:indexBD.php');




?>





