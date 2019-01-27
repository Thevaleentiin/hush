<?php $recup = new UserController();
$resultat = $recup->AfficherNomCompte($_SESSION['email'], 'prenom'); ?>
<body id="Myprofil">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-bleu.png" alt=""><span class="active">Recharger</span></a></li>
                    <li><a href="/hush/src/views/index-cultiver.php"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href=""><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href=""><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="src/views/mon-compte.php"><img src="src/asset/images/message-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content-top">
            <a href="#" class="BtnReturn"><img src="src/asset/images/arrow-left.png" alt="flèche gauche retour en arrière"></a>
            <a href="?p=reglage-compte" class="MsgButton"><img src="src/asset/images/ellipsis.png" alt="pictogramme message"></a>
            <div class="profil-info">
                <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                <h1><?= $_SESSION['prenom']; ?></h1>
                <p>Borne Nation</p>
            </div>
        </section>
        <section class="icon-profil">
            <div class="icon-content">
                <img src="src/asset/images/prise-noir.png" alt="nombre de rechargement">
                <p>6</p>
            </div>
            <div class="icon-content">
                <img src="src/asset/images/etoile-noir.png" alt="nombre de rechargement">
                <p>7</p>
            </div>
            <div class="icon-content">
                <img src="src/asset/images/feuille-noir.png" alt="nombre d'actions réalisées sur les bornes végétation">
                <p>9</p>
            </div>
        </section>
        <section class="publication-container">
            <article class="send-in">
                <form class="" action="" method="post">
                    <div class="container-input">
                        <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                        <textarea name="message" rows="5" placeholder="Exprimez-vous"></textarea>
                    </div>
                    <div class="cont-bottom">
                        <img src="src/asset/images/photo.png" alt="appareil à photo">
                    </div>
                </form>
            </article>
            <article class="publication-content">
                <div class="top-content">
                    <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                    <div class="text-content">
                        <p class="title-content"><span>Julie Sauvignet</span> à partagé une publication</p>
                        <p class="date">mardi, à 17:30</p>
                    </div>
                </div>
                <p class="message-content">
                    J’ai entretenue les tulipes aujourd’hui ! Elle sont sublime.
                </p>
            </article>
            <article class="publication-content">
                <div class="top-content">
                    <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                    <div class="text-content">
                        <p class="title-content"><span>Julie Sauvignet</span> à partagé une publication</p>
                        <p class="date">mardi, à 17:30</p>
                    </div>
                </div>
                <p class="message-content">
                    J’ai entretenue les tulipes aujourd’hui ! Elle sont sublime.
                </p>
            </article>
            <article class="publication-content">
                <div class="top-content">
                    <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                    <div class="text-content">
                        <p class="title-content"><span>Julie Sauvignet</span> à partagé une publication</p>
                        <p class="date">mardi, à 17:30</p>
                    </div>
                </div>
                <p class="message-content">
                    J’ai entretenue les tulipes aujourd’hui ! Elle sont sublime.
                </p>
            </article>
        </section>

    </main>
