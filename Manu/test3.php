
// Exemple 2

<?php 
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <form method="get">
 <input type='text' name='disc_id'>
    </form>
    Disc N° <?=$disc->disc_etiquette?>db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $db->prepare("select * from disc where disc_id=?");
$requete->execute(array($_GET["disc_id"]));
$disc = $requete->fetch(PDO::FETCH_OBJ);
?>

<html>
<head>

<meta charset="UTF-8">
    <title>Test PDO</title>


    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_name ?>
    Disc year <?= $disc->disc_year ?>


</body>
</html>
    Disc year <?= $disc->disc_1995 ?>
</body>
</html>

