<?php

 if ( isset($_POST['accept']) && !empty($_POST['accept'])) {

   if (isset($_POST['nom']) && !empty($_POST['nom'])) { 
      $nom = trim(strip_tags($_POST["nom"]));
      } else {
         die('Erreur de ....');
      }
      
   if (isset($_POST['prenom']) && !empty($_POST['prenom'])) { 
      $prenom = trim(strip_tags($_POST["prenom"]));
      } else {
         die('Erreur de ....');
      }

    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) { 
        $eamil = trim(strip_tags($_POST["prenom"]));
        $email = filter_var($POST["mail"], FILTER_VALIDATE_EMAIL);
        } else {
            die('Erreur de ....');
        }



// envoyer base de donné 

// AJAX pour plus de redirection 
// redirection 
// header('Location: http://localhost/portfolio/index.php?msg=ok');
// faire une pop-up de valdiation 
 
 } else {
    die('erreur de complétion du formulaire');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="impression.css" media="print">

    <title>Frédéric Lausson</title>
</head>
<body>
    
    <?php require( __DIR__ . '\partials\header.php')?>
 
    <main>
        <H1>meci de votre message ! </H1>
        <a class="btn-s" href="index.php">Accueil</a>
    </main>

    <?php require( __DIR__ . '\partials\footer.php')?>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>