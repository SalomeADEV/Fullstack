<?php
require_once('header.php');
?>
<body>


Ajout/Add




<?php 

$stmt = $conn->prepare('SELECT * FROM artist');

$stmt->execute();

$result = $stmt->fetchAll();
?>

<form action='script_ajout.php' method='POST'>
    
    <label class='mt-2' for='title'>Titre :</label><br><input type='text' id='title' name='title'><br>

    <label for="artist">Artiste :</label>

        <select name="artist" id="artist">
       <?php 

        foreach($result as $artist){
        echo '<option value="'.$artist['artist_id'].'">'.$artist['artist_name'].'</option>';
        }

        ?>
<form action>
    </select><br>
    <label class='mt-2' for='year'>Année :</label><br><input type='text' id='year' name='year'><br>
    <label class='mt-2' for='genre'>Genre :</label><br><input type='text' id='genre' name='genre'><br>
    <label class='mt-2' for='label'>label :</label><br><input type='text' id='label' name='label'><br>
    <label class='mt-2' for='price'>Prix :</label><br><input type='text' id='price' name='prix'><br>

    <label class='mt-2' for='jaquette'>Jacquette d'album :</label><br><input type='file' id='jaquette' name='picture'><br>

    <button type='submit'>Ajouter</button>
</form>

</body>
</html>