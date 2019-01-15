<!--<!DOCTYPE html>
<html>
    <head>
        <style>
            /* Set the size of the div element that contains the map */
            #map {
                height: 400px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
            }
        </style>
    </head>
    <body>
        The div element for the map 
        <div id="map"></div>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var lat = "<?php echo $lat ?>";
                console.log(lat);
                var longi = "<?php echo $longi ?>";
                var uluru = {lat: parseFloat(lat), lng: parseFloat(longi)};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 18, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map, title: "Lokasi Pelapor"});
            }
        </script>
        Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVIUZHvHyWk_F1jgZcqduNLUNqUr8fC5I&callback=initMap">
        </script>
    </body>
</html>-->
<div style="overflow:hidden;width: 700px;position: relative;"><iframe width="700" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=-7.7520206%2C%20110.4892787+(Lokasi%20Pelapor)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;"><small style="line-height: 1.8;font-size: 8px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/fr/">Embedgooglemaps.com/fr/</a> & <a href="http://fbaddlikebutton.com/">fb addlikebutton</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />