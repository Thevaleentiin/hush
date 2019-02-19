<body id="methodPaiement">
    <main>
        <section class="content">
            <a href="javascript:history.back()" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1>Méthode de paiement</h1>
        </section>
        <section class="methode">
            <div class="">
                <a href="?p=cb-payment&id_borne=<?= $_GET['id_borne'] ?>">
                    <img src="src/asset/images/cb.png" alt="logo carte bleu">
                </a>
            </div>
            <div class="">
                <a href="#">
                    <img src="src/asset/images/apple-pay.png" alt="logo apple pay">
                </a>
            </div>
        </section>
    </main>
</body>
