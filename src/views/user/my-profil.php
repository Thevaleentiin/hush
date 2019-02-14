<?php
//var_dump($_SESSION);
?>
<body id="Myprofil">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                    <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href="?p=mycarnet"><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-bleu.png" alt=""><span  class="active">Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content-top">
            <a href="javascript:history.back()" class="BtnReturn"><img src="src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <a href="?p=reglage-compte" class="MsgButton"><img src="src/asset/images/ellipsis.png" alt="pictogramme message"></a>
            <div class="profil-info">
                <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                <h1><?= $_SESSION['nom'].' '.$_SESSION['prenom'] ?></h1>
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
                        <textarea name="message" id="PubliTextArea" rows="5" placeholder="Exprimez-vous"></textarea>
                    </div>
                    <div class="cont-bottom">
                        <img src="src/asset/images/photo.png" alt="appareil à photo">
                        <input type="submit" name="SendOne" class="SendMsgPubli" id="SendOne" value="">
                    </div>
                </form>
            </article>
            <div class="publication-affiche">
            </div>
        </section>
    </main>
    <script type="text/javascript">
        autosize($('#PubliTextArea'));

        // function récupérer les messages
         function recup_publi(){
             $.post('src/ajax/getPublication.php?id_user=<?= $_SESSION['id'] ?>&nom=<?= $_SESSION['nom'] ?>&prenom=<?= $_SESSION['prenom'] ?>', function(data){
                 $('#Myprofil .publication-affiche').html(data);
             });

         }
         setInterval(recup_publi,2000);
         recup_publi();
         //function qui envoie les messages
         function sendMessage(){
            let messageBox = $('#PubliTextArea');
            publication = $.trim(messageBox.val());
            $.post('src/ajax/sendPublication.php?id_user=<?= $_SESSION['id'] ?>&id_borne=0', { publication:publication }, function(r){
            console.log(r);
                if(r.length !== 0) {
                    recup_publi();
                    messageBox.val('');
                }
                else{
                    // Affiche msg erreur
                }
            });

           }

     </script>

   <script type="text/javascript">
     $(document).ready(function () {
         $('#SendOne').click(function(e){
             e.preventDefault();
             sendMessage();
         });
        });
     </script>
