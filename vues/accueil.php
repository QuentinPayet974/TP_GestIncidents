<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type ="..css/style.css"/>
    <title>Projet gestion tickets</title>
</head>
<body>

</body>
</html>
<?php
    //192.168.1.91
    //10.10.0.53
    include("vues/header.php");
    include("vues/menu.php")
?>
        <section>
            <h1>Bienvenue</h1> 
            <article>
                <h3>Qu'est-ce que la cybersécurité ?</h3>
                <p>La cybersécurité est la pratique consistant à protéger les systèmes, 
                    les réseaux et les programmes contre les attaques numériques ou cyberattaques. 
                </p>
            </article>
            <article>
                <h3>Qu’est ce qu’une cyberattaque ?</h3> 
                <p>Une cyber-attaque est une atteinte à des systèmes informatiques réalisée dans un but malveillant. 
                    Elle cible différents dispositifs informatiques : des ordinateurs ou des serveurs, 
                    isolés ou en réseaux, reliés ou non à Internet, des équipements périphériques tels que les imprimantes, 
                    ou encore des appareils communicants comme les téléphones mobiles, les smartphones ou les tablettes. 
                    Il existe 4 types de risques cyber aux conséquences diverses, affectant directement 
                    ou indirectement les particuliers, les administrations et les entreprises. </p>
            </article>
            <article>
                <h3>Quels sont les risques ?</h3>
                <p>Les risques peuvent être regroupés en 4 catégories : </p>
                <ol start="1">
                    <li>Cybercriminalité : pour s'enrichir, le plus souvent..</li>
                    <li>Atteinte à l'image : pour décrédibiliser un individu.</li>
                    <li>Espionnage : pour récupérer des informations secrètes..</li>
                    <li>Sabotage : pour déclencher une panne</li>
                </ol>
            </article>
            <article>
                <h3>Documents de référence</h3>
                <a href="https://www.gouvernement.fr/risques/risques-cyber" target="_blank">Référence gouvernemental </a> 
                <br>
                <a href="https://clusif.fr/publications/gestion-des-incidents-quand-une-cyberattaque-vous-plonge-dans-le-blackout/"target="_blank"> A lire</a>
            </article>
        </section>

<?php
    include("vues/footer.php");
?>
