<?php

// commentaire sur une ligne phpinfo();
/* aezaze
azeaze
azeaze */ 
// echo 'text';
// echo '<h2>titre h2 </h2>';

// var_dump permet d'afficher des variables avec les des infos en plus 
// html 
// name de l'input peut etre rgpd[]
 // Vérifier si le formulaire est soumis 
//  $mdp = 'lausson'; test pour variable " mdp "
//  $mdpp = 'fred';
 if ( isset($_POST) && !empty($_POST)) { // isset = vaiable déffini !empty = négation de " vide " 
    /* récupérer les données du formulaire en utilisant 
       la valeur des attributs name comme clé 
      */
    $tableau = $_POST;
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
    $accept = $_POST['accept'];
    // if ($nom = $mdp && $prenom = $mdpp) { test pour mdp comparer avec une variable voir plus haut
    //     echo 'gg mon gars'; 
    // }
    $check = isset($_POST['accept']) ? "cheched" :"uncheked"; // condition ternaire
    echo $check;
    // html 
    // name de l'input peut etre rgpd[]
    // liste déoulate par tableau 
    // afficher le résultat
    echo '<h3>Informations récupérées en utilisant POST</h3>'; 
    var_dump($tableau);
    echo '<hr>';
    print_r($tableau);

    echo '<h3>Informations récupérées en utilisant POST</h3>'; 
    echo 'Nom : ' . $nom;
    echo '<hr>';
    echo 'Prénom : ' . $prenom;
    echo '<hr>';
    echo 'e-mail : ' . $mail;
    echo '<hr>';
    echo 'message : ' . $message;
    echo '<hr>';
    echo 'accept : ' . $accept;
    // echo $_POST["rdv"][2]; comment appeller un tableau 
    exit;
 }
?>

<!-- 
<h1> texte en html </h1> -->