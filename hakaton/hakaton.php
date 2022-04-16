<?php
require_once 'process.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>HAKATON</title>
	  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<c05c8b0a-98e8-4c59-8224-8fe3d45f94a7>" type="text/javascript"></script>
    <script src="icon_customImage.js" type="text/javascript"></script>
	<style>
        html, body, #map {
            width: 80%; height: 80%; padding: 0; margin: 0;
        }
    </style>
</head>
<body>
<?php

?>
<a href="anketa.php">Адресы</a>
<br><br>
<div id="map"></div>





<script type="text/javascript">

    ymaps.ready(init); 
    var myMap;
    
    function init() {
    
        var i;
        var place;
        var content;

        var pointer = [
        <?php
$result = $mysqli->query("SELECT * FROM `date`") or die($mysqli->error);
while ($row = $result->fetch_assoc()):?>

    <?php echo  "[",$row['coord'],"]," ?> 
<?php endwhile; ?>

];
        var myMap = new ymaps.Map("map", {
        
            center: [51.128207, 71.430420],
            zoom: 10    
            
        });
    
        for(i = 0; i < pointer.length; ++i) {
        
            place = new ymaps.Placemark(pointer[i], {
            hintContent: i,
            balloonContent: pointer[i]
        });
            myMap.geoObjects.add(place);
        }
        
    };
    
</script>

</body>
</html>