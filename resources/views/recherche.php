<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function initialize(longlat) {

                var myOptions = {
                    center: new google.maps.LatLng(45.750000,4.850000),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                tab=longlat.split('|');

                for (i = 0; i < tab.length; i++) { 

                    longitude=tab[i].split(",")[0];
                    latitude=tab[i].split(",")[1];
                 
                    var myLatlng=new google.maps.LatLng(longitude,latitude);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        //title:"IUT Fontainebleau",
                        draggable:true,
                        animation: google.maps.Animation.DROP
                    });
                    
                    /*
                    marker.info = new google.maps.InfoWindow({
                        content: 'Licence Bdise <br/><img src="http://upload.wikimedia.org/wikipedia/fr/thumb/b/ba/UPEC-logo.svg/443px-UPEC-logo.svg.png" height="30px">'
                    });*/
                    /*
                    google.maps.event.addListener(marker, 'click', function(){
                        marker.info.open(map, marker);
                    });*/
                }
            }
        </script>



        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

    </head>
    
    
    <body>
        <div class="container">
            <div class="content">

                <div class="title">Rechercher un marché</div>

            </div>

            <form action="action_page.php" method="post">

            <?php

                    $jours=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

                    echo("<select name='select'>");
                    
                    foreach($jours as $j)
                    {
                        echo("<option value='".$j."'>".$j."</option>");
                    }

                    echo("</select><br/><br/>");

                
                   

                    $json = file_get_contents("https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171");
                    $parsed_json = json_decode($json);




                    /*foreach($parsed_json->{'features'} as $f)
                    {
                        echo($f->{'geometry'}->{'coordinates'}[0][0][1].",".$f->{'geometry'}->{'coordinates'}[0][0][0]."<br/>");
                    } */
            ?>

            </form>

            <div id="map_canvas" style="width:100%; height:1000px"></div>

        </div>
    </body>
</html>
