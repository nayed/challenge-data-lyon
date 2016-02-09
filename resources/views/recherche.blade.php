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

                        /*google.maps.event.addListener(window['marker'+i], 'click', function(){
                            infowindow.open(map,window['marker'+i]);
                        });*/


                        infowindow.open(map,window['marker'+i]);
                        
                        
                    }
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

            $longlat='45.766522590766,4.8992504150412 | 45.744016572944332,4.918889800755741';
            $description='<b>VILLEURBANNE \/ Place Victor Balland</b><br/><p>lundi: X<br/> mardi : X<br/> mercredi : Matin - Alimentaire<br/> jeudi : X<br/> vendredi : X<br/> samedi : Matin - Alimentaire<br/> dimanche : X <br/> Longitude, Latitude : (45.766522590766, 4.8992504150412)';
            $description .=  ' | Ceci est un test 2 |';
       }
       else
        {
            $longlat='';
            $description='';
        }


        $chaine="initialize('".$longlat."','".$description."')";
        echo '<body onload="'.$chaine.'">';
  
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
