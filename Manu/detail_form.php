

<?php

require_once("header.php");
    
?>

<?php
                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
               
                $stmt->execute(array($_GET['nodiscs']));
               
                $result = $stmt->fetch();

                ?>
<body>                   


    
        <img src="pictures(1)/<?php echo $result['disc_picture'];?>" width='100px' class="img-fluid rounded-start"><br>
        <label class='mt-2 ' for='titre'>titre : <?php echo $result['disc_title'];?></label><br>
        <label class='mt-2 ' for='artist'>Artist : <?php echo $result['artist_name'];?></label><br>

        <label class='mt-2 ' for='year'>Année : <?php echo $result['disc_year'];?></label><br>
        <label class='mt-2 ' for='genre'>Genre : <?php echo $result['disc_genre'];?></label><br>
        <label class='mt-2 ' for='label'>label : <?php echo $result['disc_label'];?></label><br>
        <label class='mt-2 ' for='price'>Prix : <?php echo $result['disc_price'];?></label><br>
        
    <form action='page_ajout.php' method=Get>
        <button type='submit'>Ajouter</button>
    </form>
    <form action='pageupdate.php' method=Get>
        <button type='submit'>Modifie</button>
    </form>
    <form action='pageDelete.php' method=Get>
        <button type='submit'>Supprime</button>
    </form>
        <button type='bouton' onclick='window.location="indexBD.php"'>Retour</button><br>
        </select><br>

  
  
  </body>
  </html>