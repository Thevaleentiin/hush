<div id="map"></div>
<div id="geocoder" class="geocoder"></div>

<!--<div id="map-content">TEST</div>-->

<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.js"></script>
<script type="text/javascript">
	mapboxgl.accessToken = 'pk.eyJ1IjoiYmxlbW9hbCIsImEiOiJjanF1cWVnYmMwNHdvNDJxdWRmMGt4MTNlIn0.EQALkGHNpWE7_NIQ2WMzrw';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v9',
		center: [2.38076,48.84351],
		zoom: 9
	});
	map.on('load', function()
	{
		map.loadImage("https://i.imgur.com/tfPJS4b.png", function(error, image)
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
		                foreach ($autolib as $coordinates)
						{
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
	/* Barre de recherche */
	var geocoder = new MapboxGeocoder({
	    accessToken: mapboxgl.accessToken,
	    placeholder: 'Recherche ...'
	});
	document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
	/* Localisation
	map.addControl(new mapboxgl.GeolocateControl({
	   positionOptions:
	   {
	      enableHighAccuracy: true
	   },
	   trackUserLocation: true
	}));
	*/
</script>