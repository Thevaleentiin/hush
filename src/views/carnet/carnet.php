<body id="carnet">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-bleu.png" alt=""><span class="active">Recharger</span></a></li>
                    <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href="?p=mycarnet"><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content">
            <a href="javascript:history.back()" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1><?php
                $adr = new BorneController();
                $adresse = $adr->chercherUneBorne($_GET['id_borne']);
                echo $adresse->getAdresse();
             ?></h1>
        </section>
        <section class="publication-container">
            <?php
            if (isset($_GET['id_borne'])) {

                $mes = new PublicationController();
                $publications = $mes->RecupererDesPubli($_GET['id_borne']);
                echo $publications;




            }else{
                echo 'Erreur d\'accès à la borne';
            }

             ?>
        </section>
    </main>
