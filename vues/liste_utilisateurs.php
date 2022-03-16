<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="liste_utilisateurs">
    <title>Liste_utilisateur</title>
</head>
<body>
    <h1>ailTECH : Système de gestion des incidents</h1>
    <hr>

    

    <section>
        $host ;
        $bdd ;
        $user ;
        $pwd ;
        $cnx ;
        </section>

        $rqt


    <?php

        date_default_timezone_set('Indian/Reunion');

        $host = 'localhost';
        $bdd = 'dbtickets';
        $user = 'btssio';
        $pwd = 'btssio';
        try{
            $cnx = new PDO ("mysql:host=$host;dbname=$bdd", $user, $pwd);
            $cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('Erreur : '.$e->getMessage());
        }
        $sql = "SELECT nom_Tck, descriptionTCK, YEAR(curdate())-YEAR(dateCrea_usr) as Ancienneté, YEAR(dateCrea_usr) FROM tbl_users";
        $resultat = $cnx->query($sql);
        $data = $resultat->fetchAll();

        echo "<p>Extraction du ".date('d-m-Y \à\ H:i')."</p>";

        echo "<p>Nombre d'utilisateur : ".$resultat->rowCount()."</p>";
    ?>

    <h2>Liste des utilisateurs</h2>
    <table border=1>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Courriel</th>
                <th>Ancienneté</th>
                <th>Année de création</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data as $ligne){
                    echo "<tr><td>".$ligne['nom_usr']."</td>";
                    echo "<td>".$ligne['email_usr']."</td>";
                    echo "<td>".$ligne['Ancienneté']."</td>";
                    echo "<td>".$ligne['YEAR(dateCrea_usr)']."</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <hr>
    <p>Lycée Pierre Poivre - &copy; BTS SIO</p>
</body>
</html>