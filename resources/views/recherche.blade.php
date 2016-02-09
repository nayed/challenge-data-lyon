<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
        console.log(age)
            function initialize(longlat, description) {
              
                var myOptions = {
                    center: new google.maps.LatLng(45.750000,4.850000),
                    zoom: 11,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                if(longlat!='')
                {

                    tab=longlat.split('|');

                    if(description != '')
                        tab2=description.split('|');


                    for (i = 0; i < tab.length; i++) { 

                        longitude=tab[i].split(",")[0];
                        latitude=tab[i].split(",")[1];  
                     
                        var myLatlng=new google.maps.LatLng(longitude,latitude);
                        
                        window['marker'+i] = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            animation: google.maps.Animation.DROP
                          });


                        
                        var infowindow = new google.maps.InfoWindow({
                            content: tab2[i]
                        });

                        //google.maps.event.addListener(window['marker'+i], 'click', function(){
                        //    infowindow.open(map,window['marker'+i]);
                        //});

                        infowindow.open(map,window['marker'+i]);
                        
                        
                    }
                }
            }*/

            //var map;
            //var infoWindow;

            function initMap(longlat) {
               // alert(longlat);
            

              map = new google.maps.Map(document.getElementById("map_canvas"), {
                zoom: 5,
                center: {lat: 45.766522590766385, lng: 4.899250415041215},
                mapTypeId: google.maps.MapTypeId.TERRAIN
              });

              

             // alert(chaine[0]);

            if(longlat != '')
            {
                var triangleCoords ="";
                chaine = longlat.split('|');

                for(i=0;i<chaine.length;i++)
                {
                    longitudelatitude=chaine[i].split('/');


                    for(j=0;j<longitudelatitude.length;j++)
                    {
                        longitude=longitudelatitude[j].split(',')[0];
                        latitude=longitudelatitude[j].split(',')[0];

                        retour =retour+ "{lat: "+ longitude +", lng: " + latitude + "} ,";
                    }
                }            
                alert(retour);

                //triangleCoords = [retour];

                //alert(triangleCoords[0]);
            }
             
              // Define the LatLng coordinates for the polygon.
              //var triangleCoords = [
                //[45.766522590766385, 4.899250415041215], [45.766579984739217, 4.900068131928752]

                 /*"{lat: 45.766522590766385, lng: 4.899250415041215},
                  {lat: 45.766579984739217, lng: 4.900068131928752},
                  {lat: 45.766123455317214, lng: 4.900047499771168},
                  {lat: 45.766133264177434, lng: 4.899326038209789},
                  {lat: 45.766522590766385, lng: 4.899250415041215}"
                  {lat: 45.766522590766385, lng: 4.899250415041215},
                  {lat: 45.766579984739217, lng: 4.900068131928752},
                  {lat: 45.766123455317214, lng: 4.900047499771168},
                  {lat: 45.766133264177434, lng: 4.899326038209789},
                  {lat: 45.766522590766385, lng: 4.899250415041215},*/
              //];



              // Construct the polygon.
              /*var bermudaTriangle = new google.maps.Polygon({
                paths: triangleCoords,
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 3,
                fillColor: '#FF0000',
                fillOpacity: 0.35
              });
              bermudaTriangle.setMap(map);

              // Add a listener for the click event.
              bermudaTriangle.addListener('click', showArrays);

              infoWindow = new google.maps.InfoWindow;*/
            }

            /** @this {google.maps.Polygon} */
            /*function showArrays(event) {
              // Since this polygon has only one path, we can call getPath() to return the
              // MVCArray of LatLngs.
              var vertices = this.getPath();

              var contentString = '<b>Bermuda Triangle polygon</b><br>' +
                  'Clicked location: <br>' + event.latLng.lat() + ',' + event.latLng.lng() +
                  '<br>';

              // Iterate over the vertices.
              for (var i =0; i < vertices.getLength(); i++) {
                var xy = vertices.getAt(i);
                contentString += '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' +
                    xy.lng();
              }

              // Replace the info window's content and position.
              infoWindow.setContent(contentString);
              infoWindow.setPosition(event.latLng);

              infoWindow.open(map);
            }*/
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
                text-align: center;
                font-size: 96px;
            }
        </style>

    </head>


    <?php   
       

       if(isset($return))
       {
            //$json = file_get_contents("https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171");
            //$parsed_json = json_decode($json);

            $longlat='45.766522590766,4.8992504150412 / 45.766579984739217, 4.900068131928752 / 45.766123455317214 , 4.900047499771168 / 45.766133264177434, 4.899326038209789 / 45.766522590766385, 4.899250415041215 | 45.744016572944332,4.918889800755741';
            $longlat='45.766522590766,4.8992504150412 | 45.744016572944332,4.918889800755741';
            $description='<b>VILLEURBANNE \/ Place Victor Balland</b><br/><p>lundi: X<br/> mardi : X<br/> mercredi : Matin - Alimentaire<br/> jeudi : X<br/> vendredi : X<br/> samedi : Matin - Alimentaire<br/> dimanche : X <br/> Longitude, Latitude : (45.766522590766, 4.8992504150412)';
            $description .=  ' | Ceci est un test 2 |';
       }
       else
        {
            $longlat='';
            $description='';
        }

        $longlat='45.766522590766,4.8992504150412 / 45.766579984739217, 4.900068131928752 / 45.766123455317214 , 4.900047499771168 / 45.766133264177434, 4.899326038209789 / 45.766522590766385, 4.899250415041215 | 45.744016572944332,4.918889800755741';
        $longlat.='45.766522590766,4.8992504150412 | 45.744016572944332,4.918889800755741';

        //$chaine="initialize('".$longlat."','".$description."')";
        $chaine="initMap('45.766522590766,4.8992504150412 / 45.766579984739217, 4.900068131928752 / 45.766123455317214 , 4.900047499771168 / 45.766133264177434, 4.899326038209789 / 45.766522590766385, 4.899250415041215 | 45.744016572944332,4.918889800755741 45.766522590766,4.8992504150412 | 45.744016572944332,4.918889800755741');";
        //echo '<body onload="'.$chaine.'">';

        ?>

        <body onload="<?php echo $chaine; ?>">
  
    ?>
    
        <div class="container">
            <div class="content">

                <div class="title">Rechercher un marché</div>

            </div>

            <form action="/recherche/rechercher" method="post">
                <label for="jours">Jours : </label> 

                <?php

                    $jours=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

                    echo("<select name='jours'>");
                    
                    foreach($jours as $j)
                    {
                        if(isset($return))
                       {
                            if($j==$return[0])
                                echo("<option value='".$j."' selected>".$j."</option>");
                            else
                                echo("<option value='".$j."'>".$j."</option>");  
                        }
                        else
                            echo("<option value='".$j."'>".$j."</option>");
                    }

                    echo("</select><br/><br/>");

                ?>

                <label for="ville">Ville : </label>  
                <input id="ville" name="ville" type="text" placeholder="ville" class="form-control input-md"><br/><br/>

                <label for="valider"></label>
                <button id="rechercher" name="rechercher">Rechercher</button><br/><br/>

            </form>

            <div id="map_canvas" style="width:100%; height:1000px"></div>

        </div>
    </body>
</html>
