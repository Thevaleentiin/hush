<?php session_start();
require_once '../class/util.php';
$autolib = Util::Autolib();
?>
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
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
	<link rel="stylesheet" type="text/css" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css">
  </head>
  <body id="indexCultiver">
      <main>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href="/hush/index.php"><img src="/hush/src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                      <li><a href="/hush/src/views/index-cultiver.php"><img src="/hush/src/asset/images/feuille-bleu.png" alt=""><span class="active">Cultiver</span></a></li>
                      <li><a href=""><img src="/hush/src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                      <li><a href=""><img src="/hush/src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                      <li><a href="/hush/src/views/mon-compte.php"><img src="/hush/src/asset/images/message-noir.png" alt=""><span>Compte</span></a></li>
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
                        <div class="swiper-slide type-content"><img src="/hush/src/asset/images/foret.jpg" alt=""><p>Arbustre</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/asset/images/foret.jpg" alt=""><p>Fleurs</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/asset/images/foret.jpg" alt=""><p>Fleurs éxotique</p></div>
                        <div class="swiper-slide type-content"><img src="/hush/src/asset/images/foret.jpg" alt=""><p>Plante</p></div>
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

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script type="text/javascript" src="/hush/src/asset/script/style.js"></script>
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
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoidmFsZW50aW5rYWhuIiwiYSI6ImNqcXBtYm90MjAyajU0OG8xZmxuaDJ2bDMifQ.4lXM63hKjqz6waLAbSLxsg';
    const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/valentinkahn/cjqvhko3w3g4e2rlh0dadaeef',
    center: [2.349830, 48.856580],
    zoom: 11.3
    });

    map.on('load', function()
    {
        map.loadImage("https://i.imgur.com/B9OfNZt.png", function(error, image)
        {
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
                        foreach ($autolib as $coordinates) {
                            ?>
                            {
                                "type": "Feature",
                                "properties": {
                                    "description": "<p>Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina</p>",
                                    "icon": "custom-marker"
                                },
                                "geometry": {
                                    "type": "Point",
                                    "coordinates": [<?php echo $coordinates; ?>]
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

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        placeholder: 'Où allez-vous ? ...'
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
  </body>
</html>
<?php




 ?>
