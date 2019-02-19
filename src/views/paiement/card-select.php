<body id="CardPayment">
    <main>
        <section class="content">
            <a href="javascript:history.back()" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1>Méthode de paiement</h1>
        </section>
        <section class="card-form">
            <form class="<?= $_SERVER['PHP_SELF']; ?>?p=cb-payment" method="post">
            <div class="payement-bloc">
                <input class="max form" type="text" name="carte" value="" placeholder="Numéro de carte" maxlength="16">
                <div class="container-datacard">
                    <input class="half-input form" type="text" name="cvv" value="" placeholder="CVV" maxlength="3">
                    <input class="half-input form" type="text" name="expiration" value="" placeholder="MM/AA" maxlength="5">
                </div>
                <input type="text" name="titulaire_carte" value="" placeholder="Nom du titulaire de la carte">
            </div>
            <input id="envoiepayment" type="submit" name="payment_card" value="Paiement">
          </form>
        </section>
    </main>
</body>
<?php
    if ($_POST['payment_card']) {
        // stocker carte encrypté
        // créer réservation en bdd et redirigé sur la page confirmation
    }
 ?>
