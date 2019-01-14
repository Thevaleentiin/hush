<?php
session_start();
require_once 'src/class/util.php';
$autolib = Util::Autolib();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/master.css">
    <link href="src/ressource/font/Gilroy-Bold.tff">
    <link href="src/ressource/font/Gilroy-Regular.tff">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
	<link rel="stylesheet" type="text/css" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css">
  </head>
  <body id="index">
      <main>
          <div id="loader">
            <img src="src/images/loader.gif" alt="loader hush">
          </div>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href="/hush/index.php"><img src="src/images/prise-bleu.png" alt=""><span class="active">Recharger</span></a></li>
                      <li><a href="/hush/src/views/index-cultiver.php"><img src="src/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                      <li><a href=""><img src="src/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                      <li><a href=""><img src="src/images/message-noir.png" alt=""><span>Message</span></a></li>
                      <li><a href="src/views/mon-compte.php"><img src="src/images/message-noir.png" alt=""><span>Compte</span></a></li>
                  </ul>
              </nav>
          </header>

          <div id='map' style='width: 100%; height: 600px;'></div>
          <div id="geocoder" class="geocoder"></div>
      </main>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
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
