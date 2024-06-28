<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
   <?php  
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
    /* date , info client, plat, prix */
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $requete = $db->prepare("SELECT p.nom_plat,c.nom_categorie
    //                             -- plats.number_plats,
    //                             -- plats.plats_actifs(categorie),
    //                             -- id_plats 'plus vendus' 
    //                             -- id__plat plus remunerateur,
    //                             -- id_clients,([chiffre d'affaires_client]) ORDER BY DESC, 
    //                             FROM plat p
    //                             INNER JOIN categorie c ON c.id_categorie = p.id_categorie
    //                             ORDER BY nom_plat DESC;"
    //                         );

    $requete = $db->prepare("SELECT plat.libelle as platlib,categorie.libelle as catlib FROM plat INNER JOIN categorie ON categorie.id = plat.id_categorie ORDER BY plat.libelle DESC");

    $requete->execute();
    $plats = $requete->fetchAll(PDO::FETCH_OBJ);
   // $requete->closeCursor();
    // var_dump($plats);
    // die();
  
    foreach ($plats as $plat) : ?>

       <div>
            <p>
              Plat : <b><?= $plat->platlib; ?></b><br>
              -- Catégorie : <?= $plat->catlib; ?>
            </p>

        </div>
 
    <?php endforeach; ?>


</body>
</html>