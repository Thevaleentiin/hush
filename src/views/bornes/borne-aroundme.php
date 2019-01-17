<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/hush/src/asset/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
    <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
    <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="borneAroundMe">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left.png" alt="flèche gauche retour en arrière"></a>

          <section class="container-search">
              <form class="search_bar" id="SearchBar" action="index.html" method="post">
                  <input type="text" name="search" value="" placeholder="Où allez-vous ?">
              </form>
          </section>
          <section class="aroundMe">
                <!-- Slider main container -->
                <div class="swiper-container container-type">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/prise-noir.png" alt=""> 4 Disponible</p>
                                <p><img src="/hush/src/asset/images/euro-noir.png" alt=""> 5€ / 2 heures</p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/prise-noir.png" alt=""> 4 Disponible</p>
                                <p><img src="/hush/src/asset/images/euro-noir.png" alt=""> 5€ / 2 heures</p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/prise-noir.png" alt=""> 4 Disponible</p>
                                <p><img src="/hush/src/asset/images/euro-noir.png" alt=""> 5€ / 2 heures</p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/prise-noir.png" alt=""> 4 Disponible</p>
                                <p><img src="/hush/src/asset/images/euro-noir.png" alt=""> 5€ / 2 heures</p>
                                <p>2km</p>
                            </div>
                        </div>
                    </div>
          </section>
      </main>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script type="text/javascript" src="/hush/src/asset/script/style.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        //initialize swiper when document ready
        var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 15,
        freeMode: true
        })
        });
    </script>
  </body>
</html>
<?php




 ?>
