<body id="message">
    <?php
    $toid = $_POST['toid'];
    $fromid = $_POST['fromid'];
     ?>
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
        <section class="content-top">
            <a href="javascript:history.back()" class="BtnReturn"><img src="src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1><?= $_POST['Nom'];?></h1>
        </section>
        <section class="messages">
        </section>
        <section class="inputMessage">
            <form class="SendMessage" action="" method="post">
                <input type="hidden" name="toid" value="<?= $toid; ?>">
                <input type="hidden" name="fromid" value="<?= $fromid; ?>">
                <input type="hidden" name="Nom" value="<?= $_POST['Nom']; ?>">
                <textarea name="message" rows="1" id="MsgTextArea" placeholder="Aa"></textarea>
                <input type="submit" name="SendOne" id ="SendOne" value="">
            </form>
        </section>
    </main>
    <script type="text/javascript">
        var init = true;
        autosize($('#MsgTextArea'));

        function scrollToEnd(time=300){
            $('html, body').animate({ scrollTop: $('#message .messages').height() }, time);
            console.log("ok")
        }
        // function récupérer les messages
         function recup_msg(){
             $.post('src/ajax/getMessage.php?toid=<?= $toid; ?>&fromid=<?= $fromid; ?>', function(data){
                 $('#message .messages').html(data);
                 if(init == true){
                     scrollToEnd(0);
                     init = false;
                 }
             });

         }
         setInterval(recup_msg,2000);
         scrollToEnd();
         recup_msg();
         //function qui envoie les messages
         function sendMessage(){
            let messageBox = $('#MsgTextArea');
            message = $.trim(messageBox.val());
            $.post('src/ajax/sendMessage.php?toid=<?= $fromid; ?>&fromid=<?= $toid; ?>', { message:message }, function(r){
            console.log(r);
                if( r > 0) {
                    recup_msg();
                    messageBox.val('');
                    scrollToEnd();
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
