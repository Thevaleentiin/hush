<body id="index">
    <main>
        <?php
            if (!isset($_SESSION['email'])) {
                echo '
                <div id="loader">
                  <img src="src/asset/images/loader.gif" alt="loader hush">
                </div>
                ';
            }
         ?>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-bleu.png" alt=""><span class="active">Recharger</span></a></li>
                    <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href=""><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>

        <div id='map' style='width: 100%; height: 600px;'></div>
        <div id="geocoder" class="geocoder"></div>
    </main>
