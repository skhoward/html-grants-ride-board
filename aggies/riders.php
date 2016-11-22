<?php require '../connections/connections.php' ?>
<?php 
    session_start();
    if(isset($_SESSION["UserID"])) {
        
    } else {
        header('Location: ../login.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Riders Page</title>
 <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Riders</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 35.166559, lng: -107.843142};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAttvBtlHvLpEm6mDgiooDBxYyVrlpCVdY&callback=initMap">
    </script>
  </body>
</html>