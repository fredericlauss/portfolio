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
    <!-- <?php
        if(isset($_GET['msg']) && $_GET['msg'] == "ok")
        {
            echo "tagada tsoin tsoin";
        }
    ?> -->
        <div id="hero" class="section">
            <div class="wrapper flex-row">
                <div id="hero-enfant" class="flex-enfant">
                    <h1 id="h1-hero"><span>frédéric</span><span>lausson</span></h1>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="div-globalspacing">
                            <a class="btn" href="a-propos.php">à-propos</a>
                            <a class="btn-s" href="portfolio.php">découvrir mon portfolio</a>
                        </div>
                    </div>
                </div>
                <img loading="lazy"  width="600" height="600" class="flex-enfant" src="media/frederic-lausson-web-developpeur2.png" alt="portrait frederic lausson croisant les bras">
            </div>
        </div>
        <div class="section">
            <div class="wrapper">
                <h2>à-propos</h2>
                <h3>test</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="div-center">
                    <a class="btn-s" href="a-propos.php">à propos</a>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="wrapper">
                <h2>mes projets</h2>
                <h3>Au hasard</h3>
                <div id="hasard"class="galerie">
                <a href="portfolio.php">
                    <img loading="lazy"  width="250" height="250" class="galerie-enfant" id="test-galerie" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <div class="galerie-titre-p">
                        <h4>titre</h4>
                        <p>exemple de texte pour faire cliquer !</p>
                    </div>
                </a>
                <a href="portfolio.php">
                    <img loading="lazy"  width="250" height="250" class="galerie-enfant" id="test-galerie" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <div class="galerie-titre-p">
                        <h4>titre</h4>
                        <p>exemple de texte pour faire cliquer !</p>
                    </div>
                </a>
                <a href="portfolio.php">
                    <img loading="lazy"  width="250" height="250" class="galerie-enfant" id="test-galerie" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <div class="galerie-titre-p">
                        <h4>titre</h4>
                        <p>exemple de texte pour faire cliquer !</p>
                    </div>
                </a>
                <a href="portfolio.php">
                    <img loading="lazy"  width="250" height="250" class="galerie-enfant" id="test-galerie" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <div class="galerie-titre-p">
                        <h4>titre</h4>
                        <p>exemple de texte pour faire cliquer !</p>
                    </div>
                </a>
                </div>
                <div class="div-center">
                    <a class="btn-s" href="portfolio.php">portfolio</a>
                </div>
            </div>
        </div>
        <div id="section-formulaire" class="section">
            <div class="wrapper" id="section-form">
                <h2>me contacter</h2>
                
                <form method="POST" action="validation.php" name="form">
                    <div><label for="Nom">Nom</label><p id="verif-nom" class="cache rouge">nom</p></div>
                    <input id="nom" type="text" name="nom" placeholder="Duncan" autocomplete="off">
                    

                    <div><label for="Prénom">Prénom</label><p id="verif-prenom" class="cache rouge">prénom</p></div>
                    <input id="prenom" type="text" name="prenom" placeholder="Michel" autocomplete="off">

                    <div><label for="email">E-mail</label><p id="verif-email" class="cache rouge">e-mail</p></div>
                    <input id="mail" type="email" name="mail" placeholder="honorable.michel.ducan@gmail.com"autocomplete="off">
                    

                    <div><label for="email">Votre message</label><p id="verif-message" class="cache rouge">votre message</p></div>
                    <textarea name="message" id="message" placeholder="Votre message"></textarea>
                    

                    <label class="accept-form" for="accept"><input id="checkbox" type="checkbox" name="accept">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la relation commerciale qui peut en découler (*).</label>
                    <p id="verif-checckbox" class="cache rouge">il faut cocher !</p>
                    <!-- on peut name de l'input peut etre "rgpd[]" pour avoir un resultat en array  -->

                    <input class="btn-s" id="btn-form" type="submit" name="valider">
                    <p id="verif" class="cache rouge">Le formulaire est invalide</p>
                    <!-- <p id="verif2" class="cache vert">Le formulaire bien envoyé !</p> -->
                </form>
            </div>
        </div>
    </main>

    <?php require( __DIR__ . '\partials\footer.php')?>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>