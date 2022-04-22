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
        <div id="hero" class="section">
            <div class="wrapper flex-row">
                <div id="hero-enfant" class="flex-enfant">
                    <h1 id="h1-hero"><span>frédéric</span><span>lausson</span></h1>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="div-globalspacing">
                            <a class="btn" href="">à-propos</a>
                            <a class="btn-s" href="portfolio.php">portfolio</a>
                        </div>
                    </div>
                </div>
                <img class="flex-enfant" src="media\Photo Fred détouré - Copie.png" alt="portrait frederic">
            </div>
        </div>
        <div class="section">
            <div class="wrapper">
                <h2>à-propos</h2>
                <h3>test</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="section">
            <div class="wrapper">
                <h2>mes projets</h2>
                <h3>Au hasard</h3>
                <div class="galerie">
                    <img class="galerie-enfant" id="test-galerie" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <img class="galerie-enfant" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <img class="galerie-enfant" src="media\11_Post-production - Copie.png" alt="marie minchella">
                    <img class="galerie-enfant" src="media\11_Post-production - Copie.png" alt="marie minchella">
                </div>
            </div>
        </div>
        <div id="section-formulaire" class="section">
            <div class="wrapper" id="section-form">
                <h2>me contacter</h2>
                
                <form method="POST" action="">
                    <input type="text" name="speudo" placeholder="Nom" autocomplete="off">
                    <input type="email" name="mail" placeholder="E-mail"autocomplete="off">
                    <textarea placeholder="Votre message" ></textarea>
                    <label class="accept-form" for="accept"><input type="checkbox" name="accept" required="">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la relation commerciale qui peut en découler (*).</label>
                    <input class="btn" id="btn-form" type="submit" name="valider">
                </form>
            </div>
        </div>
    </main>

    <?php require( __DIR__ . '\partials\footer.php')?>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>