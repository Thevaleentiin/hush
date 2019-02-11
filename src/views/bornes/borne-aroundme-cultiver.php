<body id="borneAroundMe">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
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
                                <p><img src="/hush/src/asset/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/asset/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/asset/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/asset/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                        <div class="swiper-slide type-content">
                            <img src="/hush/src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                            <div class="content-borne">
                                <p class="title-borne">Borne Reuilly</p>
                                <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                <p><img src="/hush/src/asset/images/feuille-noir.png" alt=""> 15 Plantes </p>
                                <p><img src="/hush/src/asset/images/user-noir.png" alt=""> 8 personnes </p>
                                <p>2km</p>
                            </div>
                        </div>
                    </div>
          </section>
      </main>
      <script type="text/javascript">
        $(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 2,
            spaceBetween: 15,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            roundLengths : true,
            freeMode: true,
            centeredSlides : false
            })
            });
        </script>
