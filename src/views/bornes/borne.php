<body id="borne">
        <main>
            <a href="javascript:history.back()" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>

            <div id='map' style='width: 100%; height: 600px;'></div>
            <section>
                <div class="borne-content">
                    <img src="src/asset/images/borne-pyramide.jpg" alt="borne diderot">
                    <div class="content-borne">
                        <p class="title-borne">Borne Reuilly</p>
                        <p class="adress-borne">32 Rue de Crozatier, 75012, Paris</p>
                        <p>2km</p>
                        <p>Réserver une place</p>
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
                                    "description":"<?= $coordinates->getAdresse(); ?>",
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
