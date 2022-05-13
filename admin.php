<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'accueil de mon portfolio. Je suis developper web.">
    <!-- <meta name=”robots” content=”index,follow”> poser question ??? -->
    <!-- https://developer.mozilla.org/fr/docs/Web/HTTP/CSP  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="impression.css" media="print">

    <title>Frédéric Lausson</title>
</head>
<body>
    
    <?php require( __DIR__ . '\partials\header.php')?>
 
    <main>
    <?php

if ($mysqlconnection = new PDO('mysql:host=localhost;dbname=testbdd;charset=utf8;', 'root' , "" )) {


    $request = "SELECT * FROM `testbddd` WHERE 1";
    $query = $mysqlconnection->query($request);
    $data = $query->fetchAll();
    var_dump($data);
    echo " ";
    } else {
        echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;
    }

?>
    <div class='section'>
            <div class='wrapper'>
                <h2>Mes messages</h2>
                <h3>formulaire accueil</h3>
                <?php
                $longueur = count($data);
                for ($i=0 ; $i<$longueur ; $i++) {
                    
                    print_r($data[$i][0] . "<br>");
                    print_r($data[$i][1] . "<br>");
                    print_r($data[$i][2] . "<br>");
                    print_r($data[$i][3] . "<br>");
                    print_r($data[$i][4] . "<br>");

                    // créer tout une variable avec tout le html requis avec variable de dans 
                    // ganre $ligne = " <div>$data[i][1] </div> "
                }

                ?>
                <div>
                <div></div>
                </div>
            </div>
        </div>
   
    </main>

    <?php require( __DIR__ . '\partials\footer.php')?>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>