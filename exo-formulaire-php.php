<?php

// // commentaire sur une ligne phpinfo();
// /* aezaze
// azeaze
// azeaze */ 
// // echo 'text';
// // echo '<h2>titre h2 </h2>';

// // var_dump permet d'afficher des variables avec les des infos en plus 
// // html 
// // name de l'input peut etre rgpd[]
//  // Vérifier si le formulaire est soumis 
// //  $mdp = 'lausson'; test pour variable " mdp "
// //  $mdpp = 'fred';
//  if ( isset($_POST['accept']) && !empty($_POST['accept'])) { // isset = vaiable déffini !empty = négation de " vide " 
//     /* récupérer les données du formulaire en utilisant 
//        la valeur des attributs name comme clé 
//        $_POST je sais pas pk on cible le bouton 
//       */
//     $tableau = $_POST;
//     $nom = $_POST['nom']; 
//     $prenom = $_POST['prenom'];
//     $mail = $_POST['mail'];
//     $message = $_POST['message'];
//     $accept = $_POST['accept'];
//     // if ($nom === $mdp && $prenom === $mdpp) { test pour mdp comparer avec une variable voir plus haut
//     //     echo 'gg mon gars'; 
//     // } else {
//    //     die('Erreur de ....');
//    //  }

// // faille XSS

// $nom = trim(strip_tags($_POST["nom"]));

// echo 'nom: ' . $nom;









//     $check = isset($_POST['accept']) ? "cheched" :"uncheked"; // condition ternaire
//     echo $check;
//     // html 
//     // name de l'input peut etre rgpd[]
//     // liste déoulate par tableau 
//     // afficher le résultat
//     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
//     var_dump($tableau);
//     echo '<hr>';
//     print_r($tableau);

//     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
//     echo 'Nom : ' . $nom;
//     echo '<hr>';
//     echo 'Prénom : ' . $prenom;
//     echo '<hr>';
//     echo 'e-mail : ' . $mail;
//     echo '<hr>';
//     echo 'message : ' . $message;
//     echo '<hr>';
//     echo 'accept : ' . $accept;
//     // echo $_POST["rdv"][2]; comment appeller un tableau 



//     // tbleau for each  
//       foreach($_POST as $value) {
//          echo $value . '<br>';
//       }

//       // deuxieme méthode 

//       foreach($_POST as $key => $value) {
//          echo $key . ' ====> ' . $value . '<br>';
//          echo "$key ========> $value <br>";
//       }
//     exit;
//  }


 // e-mail 


//  $email = filter_var($POST["mail"], FILTER_VALIDATE_EMAIL);
//  echo $email;



 // exo fin 

 if ( isset($_POST['accept']) && !empty($_POST['accept'])) {

   if (isset($_POST['nom']) && !empty($_POST['nom'])) { 
      $nom = trim(strip_tags($_POST["nom"]));
      // teste longueur ( long et + de 1 )
      } else {
         die('Erreur de ....');
      }
      
   if (isset($_POST['prenom']) && !empty($_POST['prenom'])) { 
      $prenom = trim(strip_tags($_POST["prenom"]));
      } else {
         die('Erreur de ....');
      }

 // redirection 

 
 } else {
    die('erreur de complétion du formulaire');
 }

?>
<!DOCTYPE html>
<html lang="fr-FR">
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
       <h1>Tableau</h1>

      <div>
            <h3>Nom</h3>
            <h3><?php echo $nom;?></h3>
      </div>
      <div>
            <h3>prenom</h3>
            <h3><?php echo $prenom;?></h3>
      </div>
    </main>

    <?php require( __DIR__ . '\partials\footer.php')?>
    
    <!-- <script type="text/javascript" src="script.js"></script> -->
</body>
</html>