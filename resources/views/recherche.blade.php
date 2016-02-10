<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry"></script>
        <script type="text/javascript">
        console.log(age)

            function RecupChangementJour(jour){

                if(jour != 0)
                {
                    var myOptions = {
                        center: new google.maps.LatLng(45.750000,4.850000),
                        zoom: 11,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
               
                
                    function RechercheJour() 
                    { 
                       if (req.readyState == 4) 
                       { 
                            var doc = eval('(' + req.responseText + ')'); 


                            for(i=0;i<doc.features.length;i++)
                            {

                                longitude = doc.features[i].geometry.coordinates[0][0][0];
                                latitude = doc.features[i].geometry.coordinates[0][0][1];

 
                                switch(jour) {
                                    case 'lundi':
                                        if(doc.features[i].properties.lundi != "Non")
                                        {

                                            var myLatlng=new google.maps.LatLng(latitude,longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'mardi':
                                        if(doc.features[i].properties.mardi != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'mercredi':
                                        if(doc.features[i].properties.mercredi != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'jeudi':
                                        if(doc.features[i].properties.jeudi != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'vendredi':
                                        if(doc.features[i].properties.vendredi != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'samedi':
                                        if(doc.features[i].properties.samedi != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;
                                    case 'dimanche':
                                        if(doc.features[i].properties.dimanche != "Non")
                                        {
                                            var myLatlng=new google.maps.LatLng(latitude, longitude);
                                            var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                                
                                            var infowindow = new google.maps.InfoWindow({
                                                content: chaine
                                            });

                                            marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                info: chaine,
                                                animation: google.maps.Animation.DROP
                                              });

                                            google.maps.event.addListener(marker, 'click', function(){
                                                infowindow.setContent(this.info);
                                                infowindow.open(map,this);
                                            });
                                        }
                                        break;

                                    default:
                                        break;
                                }
                                
                            }

                       }
                    }

                     

                    var req = new XMLHttpRequest();
                    req.open("GET", "https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171", true); 
                    req.onreadystatechange = RechercheJour;  
                    req.send(null); 

                    
                      var myLatlng=new google.maps.LatLng(document.getElementById("malatitude").innerHTML, document.getElementById("malongitude").innerHTML);
                        
                        var pinColor = "8FCF3C";
                        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
                            new google.maps.Size(21, 34),
                            new google.maps.Point(0,0),
                            new google.maps.Point(10, 34));

                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            icon: pinImage,
                            animation: google.maps.Animation.DROP
                          });


                        
                        var infowindow = new google.maps.InfoWindow({
                            content: "Vous êtes ici !"
                        });

                        infowindow.open(map,marker);
                }
            }


            function RecupChangementVille(ville){

                console.log(ville);
                if(ville.length > 3)
                {
                    var myOptions = {
                        center: new google.maps.LatLng(45.750000,4.850000),
                        zoom: 11,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
               
                
                    function RechercheJour() 
                    { 
                       if (req.readyState == 4) 
                       { 
                            var doc = eval('(' + req.responseText + ')'); 


                            for(i=0;i<doc.features.length;i++)
                            {

                                longitude = doc.features[i].geometry.coordinates[0][0][0];
                                latitude = doc.features[i].geometry.coordinates[0][0][1];

 
                                if(doc.features[i].properties.commune.toLowerCase() == ville.toLowerCase())
                                {

                                    var myLatlng=new google.maps.LatLng(latitude,longitude);
                                    var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche
                        
                                    var infowindow = new google.maps.InfoWindow({
                                        content: chaine
                                    });

                                    marker = new google.maps.Marker({
                                        position: myLatlng,
                                        map: map,
                                        info: chaine,
                                        animation: google.maps.Animation.DROP
                                      });

                                    google.maps.event.addListener(marker, 'click', function(){
                                        infowindow.setContent(this.info);
                                        infowindow.open(map,this);
                                    });
                                }
                                
                            }

                       }
                    }

                     

                    var req = new XMLHttpRequest();
                    req.open("GET", "https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171", true); 
                    req.onreadystatechange = RechercheJour;  
                    req.send(null); 

                    
                      var myLatlng=new google.maps.LatLng(document.getElementById("malatitude").innerHTML, document.getElementById("malongitude").innerHTML);

                      var pinColor = "8FCF3C";
                        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
                            new google.maps.Size(21, 34),
                            new google.maps.Point(0,0),
                            new google.maps.Point(10, 34));

                        
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            icon: pinImage,
                            animation: google.maps.Animation.DROP
                          });
                   
                        var infowindow = new google.maps.InfoWindow({
                            content: "Vous êtes ici !"
                        });

                        infowindow.open(map,marker);
                }
            }


            function initialize() {

                var myOptions = {
                    center: new google.maps.LatLng(45.750000,4.850000),
                    zoom: 11,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                
                function lectureFichier() 
                    { 
                       if (req.readyState == 4) 
                       { 
                            var doc = eval('(' + req.responseText + ')'); 

                            for(i=0;i<doc.features.length;i++)
                            {

                                longitude = doc.features[i].geometry.coordinates[0][0][0];
                                latitude = doc.features[i].geometry.coordinates[0][0][1];

                                var chaine = "<b>"+doc.features[i].properties.nom+"</b><br/><br/>Gestionnaire : " + doc.features[i].properties.gestionnaire + "<br/>Superficie : " + doc.features[i].properties.surface +"<br/><br/>Lundi : "+doc.features[i].properties.lundi + "<br/>Mardi : " + doc.features[i].properties.mardi + "<br/>Mercredi : "+doc.features[i].properties.mercredi + "<br/>Jeudi : "+ doc.features[i].properties.jeudi + "<br/>Vendredi : " + doc.features[i].properties.vendredi + "<br/>Samedi : " + doc.features[i].properties.samedi + "<br/>Dimanche : " + doc.features[i].properties.dimanche

                                var myLatlng=new google.maps.LatLng(latitude, longitude);
                                
                                var infowindow = new google.maps.InfoWindow({
                                    content: chaine
                                });

                                marker = new google.maps.Marker({
                                    position: myLatlng,
                                    map: map,
                                    info: chaine,
                                    animation: google.maps.Animation.DROP
                                  });

                                google.maps.event.addListener(marker, 'click', function(){
                                    infowindow.setContent(this.info);
                                    infowindow.open(map,this);
                                });
                                
                            }
                       }
                    }

                     

                    var req = new XMLHttpRequest();
                    req.open("GET", "https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171", true); 
                    req.onreadystatechange = lectureFichier;  
                    req.send(null); 

                    
                      var myLatlng=new google.maps.LatLng(document.getElementById("malatitude").innerHTML, document.getElementById("malongitude").innerHTML);

                      var pinColor = "8FCF3C";
                        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
                            new google.maps.Size(21, 34),
                            new google.maps.Point(0,0),
                            new google.maps.Point(10, 34));
                        
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            icon: pinImage,
                            animation: google.maps.Animation.DROP
                          });


                        
                        var infowindow = new google.maps.InfoWindow({
                            content: "Vous êtes ici !"
                        });

                        infowindow.open(map,marker);
            }

            

            function maPosition(position) {

              document.getElementById("malongitude").innerHTML = position.coords.longitude;
              document.getElementById("malongitude").style.visibility = "hidden";

              document.getElementById("malatitude").innerHTML =  position.coords.latitude;
              document.getElementById("malatitude").style.visibility = "hidden";

            }

            if(navigator.geolocation)
              navigator.geolocation.getCurrentPosition(maPosition);

            
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
       
        $longlat='';
        $description='';
  
        echo '<body onload="initialize()">';

        ?>

    
        <div class="container">
            <div class="content">

                <div class="title">Rechercher un marché</div>

            </div>

            <p>

                <label for="jours">Jours : </label> 

                                

                    <select name='jours' onchange='RecupChangementJour(this.value)'>
                    <option value='0'>-- Sélectionnez un jour --</option>

                <?php
                    $jours=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
                    
                    foreach($jours as $j)
                    {
                        echo("<option value='".$j."'>".$j."</option>");
                    }

                    echo("</select><br/><br/>");

                ?>

                <label for="ville">Ville : </label>  
                <input id="ville" name="ville" type="text" placeholder="ville" onkeyup="RecupChangementVille(this.value)"><br/><br/>

            </p>


            <div id="malongitude"></div>
            <div id="malatitude"></div>
            <div id="map_canvas" style="width:100%; height:1000px"></div>

        </div>
    </body>
</html>
