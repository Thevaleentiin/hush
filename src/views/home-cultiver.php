<body id="indexCultiver">
      <main>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href="?p=home"><img src="src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                      <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-bleu.png" alt=""><span class="active">Cultiver</span></a></li>
                      <li><a href="?p=mycarnet"><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                      <li><a href="?p=conversations"><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                      <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-noir.png" alt=""><span>Compte</span></a></li>
                  </ul>
              </nav>
          </header>
          <div id='map' style='width: 100%; height: 600px;'></div>
          <div id="geocoder" class="geocoder"></div>
          <section class="type-vegetation">
              <h1>Végétation</h1>
                <!-- Slider main container -->
                <div class="swiper-container container-type">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide type-content"><img src="src/asset/images/foret.jpg" alt=""><p>Arbustre</p></div>
                        <div class="swiper-slide type-content"><img src="src/asset/images/foret.jpg" alt=""><p>Fleurs</p></div>
                        <div class="swiper-slide type-content"><img src="src/asset/images/foret.jpg" alt=""><p>Fleurs éxotique</p></div>
                        <div class="swiper-slide type-content"><img src="src/asset/images/foret.jpg" alt=""><p>Plante</p></div>
                    </div>
          </section>
          <section class="aroundMe">
              <h2>Autour de moi</h2>
                <!-- Slider main container -->
                <div class="swiper-container container-type">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide type-content">
                            <a href="#">
                                <img src="src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                                <div class="content-borne">
                                    <p class="title-borne">Borne Reuilly</p>
                                    <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide type-content">
                            <a href="#">
                                <img src="src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                                <div class="content-borne">
                                    <p class="title-borne">Borne Reuilly</p>
                                    <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide type-content">
                            <a href="#">
                                <img src="src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                                <div class="content-borne">
                                    <p class="title-borne">Borne Reuilly</p>
                                    <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide type-content">
                            <a href="#">
                                <img src="src/asset/images/autolib-diderot.jpg" alt="borne diderot">
                                <div class="content-borne">
                                    <p class="title-borne">Borne Reuilly</p>
                                    <p class="adress-borne">32 Rue de Crozatier,<br>75012, Paris</p>
                                </div></a>
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

            $('#geocoder').click(function(e){
                e.preventDefault();
                window.location.href = '?p=borne-cultiver';
                return false;
            });
            });
        </script>
        <?php
          $select = new BorneManager();
          $bornes = $select->findAllBorne();
        // var_dump($bornes);
         ?>
        <script type="text/javascript">
         mapboxgl.accessToken = 'pk.eyJ1IjoidmFsZW50aW5rYWhuIiwiYSI6ImNqcXBtYm90MjAyajU0OG8xZmxuaDJ2bDMifQ.4lXM63hKjqz6waLAbSLxsg';
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/basic-v9',
        center: [2.349830, 48.856580],
        zoom: 11.3
        });


          map.on('load', function(){

            map.loadImage("src/asset/images/location-marker.png", function(error, image){
                  if (error) throw error;
                  map.addImage("custom-marker", image);

                  map.addLayer({
                    "id": "places",
                    "type": "symbol",
                    "source": {
                        "type": "geojson",
                        "data": {
                          "type": "FeatureCollection",
                          "features": [
                            <?php
                            foreach ($bornes as $coordinates) {
                                $numb = $coordinates->getId(); ?>

                              {
                                "type": "Feature",
                                "properties": {
                                  "description":"<?php $req = new BorneController();$requete = $req->afficherBorne($coordinates->getAdresse(), $coordinates->getId()); ?><?= $requete ?>",
                                  "icon": "custom-marker"
                                },
                                "geometry": {
                                  "type": "Point",
                                  "coordinates": [<?php echo $coordinates->getPosition(); ?>]
                                }
                              },
                              <?php
                            }?>]
                          }
                        },
                        "layout": {
                            "icon-image": "custom-marker"
                        }
                    });
              });

              map.on('click', 'places', function (e)
              {
                  var coordinates = e.features[0].geometry.coordinates.slice();
                  var description = e.features[0].properties.description;

                  while (Math.abs(e.lngLat.lng - coordinates[0]) > 180)
                  {
                      coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                  }

                  new mapboxgl.Popup().setLngLat(coordinates).setHTML(description).addTo(map);
              });

              map.on('mouseenter', 'places', function()
              {
                  map.getCanvas().style.cursor = 'pointer';
              });

              map.on('mouseleave', 'places', function()
              {
                  map.getCanvas().style.cursor = '';
              });
          });

          /* Barre de recherche */
          var geocoder = new MapboxGeocoder({
              accessToken: mapboxgl.accessToken,
              placeholder: 'Où allez-vous?...'
          });

          document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

          map.addControl(new mapboxgl.GeolocateControl({
           positionOptions:
           {
              enableHighAccuracy: true
           },
           trackUserLocation: true
          }));
        </script>
