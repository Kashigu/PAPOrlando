<?php
include_once('includes/body.inc.php');
toposingle();
?>


    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <script src="jquery-2.1.4.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <br>
    <br>
    <div class="container">
        <div id="mapa"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="navbar"><span>Red Stapler - Geolocation API</span></div>
    <div id="wrapper">
        <button onclick="localizacao()" id="location-button">Get User Location</button>
        <div id="output"></div>
        <div id="output1"></div>
    </div>

    <script>
        function localizacao () {

            $('#location-button').click(function () {

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        console.log(position);
                        $.get("http://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&sensor=false", function (data) {
                            console.log(data);
                        })
                        var img = new Image();
                        img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + position.coords.latitude + "," + position.coords.longitude + "&zoom=13&size=800x400&sensor=false";
                        $('#output').html(img);
                        var imgs= new Image();
                        imgs.src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98134.94359898944!2d-9.024180455236154!3d39.76846225120994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd220e5ad762d557%3A0x3e2faced1b039ae2!2sM.nha%20Grande!5e0!3m2!1spt-PT!2spt!4v1614251067087!5m2!1spt-PT!2spt"
                        $('#output1').html(imgs);
                    });

                }

            });
        }
    </script>
    </body>
    </html>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8exikzjtbtqAkkf3jPbrac5ywe93U8qA&callback=CarregarMapa">


        function CarregarMapa(){
            var lisboa = {lat: -25.363, lng: 131.044};
            var mapa = new google.maps.Map(document.getElementById('mapa'),{
                zoom:4,
                center: lisboa
            });
            var ponto = new google.maps.Marker({
                position: lisboa
                mapa:mapa
            })
        }
    </script>



<?php
bot();
?>