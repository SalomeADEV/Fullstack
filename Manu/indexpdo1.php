<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    
    <?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
    /* date , info client, plat, prix */
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("SELECT commande.date_commande,
                                commande.telephone_client,
                                commande.email_client,
                                commande.adresse_client,
                                plat.libelle,
                                plat.prix
                                FROM commande 
                                INNER JOIN plat ON commande.id_plat = plat.id");
    $requete->execute();
    $commandes = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($commandes as $commande) : ?>
        <div>
            <?= $commande->date_commande ?>
        </div>
        <div>
            <?= $commande->telephone_client ?>
        </div>
        <div>
            <?= $commande->email_client ?>
        </div>
        <div>
            <?= $commande->adresse_client ?>
        </div>
        <div>
            <?= $commande->libelle ?>
        </div>
        <div>
            <?= $commande->prix ?>
        </div>
    <?php endforeach; ?>
    



</body>

</html>