<?php 
require_once('header.php');
?>
<body>
Manipulation des BD/PDO
Utiliser un langage côté serveur
<div class='container mt-3'>
        <div class='row justify-content-center'>
            <div class='h3 text-white col-6'>Tout les albums</div><button type='button' class='btn btn-primary col-5' style="width: 240px;" onclick='window.location="page_ajout.php"'>ajout</button>
        </div>

        <form action='detail_form.php' class='mt-3 row justify-content-center'>

<?php
            //recupere tout les disc dans la base de donnée
                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id");
               
                $stmt->execute();

                $result = $stmt->fetchAll();

                //affiche les disc dans une card boostrap
                foreach($result as $row){
                echo '<div class="card mb-3 mx-3 col-5 bg-dark-subtle" id="'.$row['disc_id'].'"style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="pictures(1)/'.$row['disc_picture'].'" class="img-fluid rounded-start" alt="'.$row['disc_title'].'">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">'.$row['artist_title'].'</h5>
                    <p class="card-text">'.$row['artist_name'].'</p>
                    <p class="card-text">Label : '.$row['disc_label'].'</p>
                    <p class="card-text">Year : '.$row['disc_year'].'</p>
                    <p class="card-text">Genre : '.$row['disc_genre'].'</p>
                    <button type="submit" name="nodiscs" class="btn btn-primary" value='.$row['disc_id'].'>Details</button>
                </div>
                </div>
            </div>
            </div>';
                };
            ?>

</div>




    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>