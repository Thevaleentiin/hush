<?php session_start();
require_once '../../class/util.php';
$autolib = Util::Autolib();
?>
<!DOCTYPE html>
<html l dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Borne Cultiver - Hush</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/hush/src/asset/css/master.css">
  <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
  <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet' />
</head>
    <body id="borneCultiver">
        <main>
            <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left.png" alt="flèche gauche retour en arrière"></a>
            <div id='map' style='width: 100%; height: 600px;'></div>
            <section>
                <div class="borne-content">
                    <img src="../../asset/images/borne-pyramide.jpg" alt="borne diderot">
                    <div class="content-borne">
                        <p class="title-borne">Borne Reuilly</p>
                        <p class="adress-borne">32 Rue de Crozatier, 75012, Paris</p>
                        <p>2km</p>
                        <p>Carnet de borne</p>
                    </div>
                </div>
            </section>
        </main>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="src/asset/script/style.js"></script>
        <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoidmFsZW50aW5rYWhuIiwiYSI6ImNqcXBtYm90MjAyajU0OG8xZmxuaDJ2bDMifQ.4lXM63hKjqz6waLAbSLxsg';
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/basic-v9',
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
            // point apres la recherche
            map.addSource('single-point', {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": []
            }
        });

        map.addLayer({
            "id": "point",
            "source": "single-point",
            "type": "circle",
            "paint": {
                "circle-radius": 10,
                "circle-color": "#007cbf"
            }
        });

        // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
        // makes a selection and add a symbol that matches the result.
        geocoder.on('result', function(ev) {
            map.getSource('single-point').setData(ev.result.geometry);
        });
        });


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
