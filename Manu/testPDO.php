<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "admin";
        $password = "Afpa1234";
        $dbname = "the_district";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // configurer le mode d'erreur PDO pour générer des exceptions
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connecté avec succès à la base de données";
        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }


$stmt = $conn->query("SELECT * FROM plat;");
while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";

} 


   
?>



   
    
</body>
</html>