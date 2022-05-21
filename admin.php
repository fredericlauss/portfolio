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
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    echo " ";
    } else {
        echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;
    }

?>
    <div class='section'>
            <div class='wrapper'>
                <h2>Mes messages</h2>
                <h3>formulaire accueil</h3>
                <div class="flex-row-form"><p class="form-input">Nom</p><p class="form-input">Prénom</p><p class="form-input">e-mail</p><p class="form-input">message</p><p class="form-input">RGPD</p></div>
                <?php
                $layoutForm = '<div class="flex-row-form"><p class="form-input">1</p><p class="form-input">2</p><p class="form-input">3</p><p class="form-input">4</p><p class="form-input">5</p></div>';
                $healthy = array("1", "2", "3", "4", "5");
                
                // $longueur = count($data);
                // for ($i=0 ; $i<$longueur ; $i++) {
                //     echo $data[$i][0], '<br>', $layoutForm, '<br>';
                //     echo $data[$i][1], '<br>';
                //     echo $data[$i][2], '<br>';
                //     echo $data[$i][3], '<br>';
                //     echo $data[$i][4], '<br>';

                //     // créer tout une variable avec tout le html requis avec variable de dans 
                //     // ganre $ligne = " <div>$data[i][1] </div> "
                // }
                
                foreach ($data as $element) {
                
                        $yummy   = array($element['nom'], $element['prénom'], $element['e-mail'], $element['message'], $element['valid']);
                        $newphrase = str_replace($healthy, $yummy, $layoutForm);
                        // foreach ($element as $elementrr) {
                        //     print_r("<p>$elementrr<p>");
                        // }
                        echo $newphrase;
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