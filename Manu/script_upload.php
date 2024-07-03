<?php
require_once('header.php');

if($_FILES['picture']['name'] != null){
    $picture = $_FILES['picture']['name'];
} else {
    $picture = $_POST['savepicture'];
}

$stmt = $conn->prepare("UPDATE disc 
SET disc_title = :title ,disc_year = :year,
disc_picture = :picture, disc_label = :label, disc_genre = :genre,
disc_price = :prix
WHERE disc_id = :id");

$stmt->bindValue(':id', $_POST['saveid']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':year', $_POST['year']);
$stmt->bindValue(':prix', $_POST['prix']);
$stmt->bindParam(':picture', $picture);
$stmt->bindValue(':label', $_POST['label']);
$stmt->bindValue(':genre', $_POST['genre']); 

$stmt->execute();

header('location:indexBD.php');
?>