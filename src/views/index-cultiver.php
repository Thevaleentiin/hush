<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/hush/src/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
    <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
    <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="indexCultiver">
      <main>
          <div id="loader">
            <img src="/hush/src/images/loader.gif" alt="loader hush">
          </div>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href=""><img src="/hush/src/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                      <li><a href=""><img src="/hush/src/images/feuille-bleu.png" alt=""><span>Cultiver</span></a></li>
                      <li><a href=""><img src="/hush/src/images/carnet-bleu.png" alt=""><span>Carnet</span></a></li>
                      <li><a href=""><img src="/hush/src/images/message-bleu.png" alt=""><span>Message</span></a></li>
                      <li><a href="/src/views/mon-compte.php"><img src="/hush/src/images/message-bleu.png" alt=""><span>Compte</span></a></li>
                  </ul>
              </nav>
          </header>
          <section class="container-search">
              <form class="search_bar" id="SearchBar" action="index.html" method="post">
                  <input type="text" name="search" value="" placeholder="Où allez-vous ?">
              </form>
          </section>
          <!-- <section class="menu-inscription">
            <div>
              <ul>
                <li><a href="/hush/src/views/inscription">Créer un compte</a></li>
                <li><a href="/hush/src/views/connexion.php">Se Connecter</a></li>
              </ul>
            </div>
          </section> -->
          <section class="type-vegetation">
              <h1>Végétation</h1>
                <!-- Slider main container -->
                <div class="swiper-container container-type">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide type-content"><img src="/hush/src/images/foret.jpg" alt=""><p>Arbustre</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/images/foret.jpg" alt=""><p>Fleurs</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/images/foret.jpg" alt=""><p>Fleurs éxotique</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/images/foret.jpg" alt=""><p>Plante</p></div>
                    </div>
          </section>
          <section class="aroundMe">
              <h2>Atour de moi</h2>
                <!-- Slider main container -->
                <div class="swiper-container container-type">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                    </div>
          </section>
      </main>

    <!-- <?php
    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
    }

    ?> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script type="text/javascript" src="/hush/src/script/style.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        //initialize swiper when document ready
        var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 2.5,
        spaceBetween: 15,
        freeMode: true,
        loop: false
        })
        });
    </script>
  </body>
</html>
<?php




 ?>
