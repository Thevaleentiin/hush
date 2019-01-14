<?php session_start(); ?>
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
          <section class="container-search">
              <form class="search_bar" id="SearchBar" action="index.html" method="post">
                  <input type="text" name="search" value="" placeholder="Où allez-vous ?">
              </form>
          </section>
          <div id='map' style='width: 100%; height: 600px;'></div>
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
</script>
  </body>
</html>
<?php




 ?>
