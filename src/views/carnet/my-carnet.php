<body id="Mycarnet">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                    <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href="?p=mycarnet"><img src="src/asset/images/carnet-bleu.png" alt=""><span class="active">Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content">
            <h1>Votre borne</h1>
            <p>
                <?php
                    $adr = new BorneController();
                    $adresse = $adr->chercherUneBorne($_SESSION['favoris_id']);
                    echo $adresse->getAdresse();
                 ?>
            </p>
        </section>
        <section class="publication-container">
            <article class="send-in">
                <form class="" action="" method="post">
                    <div class="container-input">
                        <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                        <textarea name="message" id="PubliTextAreaCarnet" rows="5" placeholder="Exprimez-vous"></textarea>
                    </div>
                    <div class="cont-bottom">
                        <img src="src/asset/images/photo.png" alt="appareil à photo">
                        <input type="submit" name="SendOne" class="SendMsgPubli" id="SendOne" value="">
                    </div>
                </form>
            </article>
            <div class="publication-borne">
                <?php

                 ?>
            </div>
        </section>
    </main>
    <script>
    autosize($('#PubliTextAreaCarnet'));

    // function récupérer les messages
     function recup_publication(){
         $.post('src/ajax/getPublicationborne.php?id_borne=<?= $_SESSION['favoris_id'] ?>', function(data){
             $('#Mycarnet .publication-borne').html(data);
         });

     }
     setInterval(recup_publication,2000);
     recup_publication();
    //function qui envoie les messages
    function sendMessage(){
       let messageBox = $('#PubliTextAreaCarnet');
       publication = $.trim(messageBox.val());
       $.post('src/ajax/sendPublicationborne.php?id_user=<?= $_SESSION['id'] ?>&id_borne=<?= $_SESSION['favoris_id'] ?>', { publication:publication }, function(r){
           if(r.length !== 0) {
               recup_publication();
               messageBox.val('');
           }
           else{
               // Affiche msg erreur
               //alert('Impossible d\'envoyer le massage');
           }
       });

      }
    </script>
    <script>
    $(document).ready(function () {
        $('#SendOne').click(function(e){
            e.preventDefault();
            sendMessage();
        });
       });
    </script>
