<?php
$autolib = Util::Autolib();
?>
<!DOCTYPE html>
<html>
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
  <?= $contenu; ?>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
  <script type="text/javascript" src="/hush/src/asset/script/style.js"></script>
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
