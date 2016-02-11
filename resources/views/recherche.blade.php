<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">


        


        function RecupChangementJour(jour){
                
                document.getElementById("ville").innerHTML="";
                if(document.getElementById('jour_'+jour).getAttribute("data-checked") == "true")
                {
                    document.getElementById('jour_'+jour).setAttribute("data-checked",false);
                }
                else
                {
                    document.getElementById('jour_'+jour).setAttribute("data-checked",true);
                }
                
                var jours;
                jours = new Array();

                for(i=1;i<=7;i++)
                {
                    if(document.getElementById('jour_'+i).getAttribute("data-checked") == "true")
                    {
                        if(i==1)
                            jours.push("lundi");
                        if(i==2)
                            jours.push("mardi");
                        if(i==3)
                            jours.push("mercredi");
                        if(i==4)
                            jours.push("jeudi");
                        if(i==5)
                            jours.push("vendredi");
                        if(i==6)
                            jours.push("samedi");
                        if(i==7)
                            jours.push("dimanche");

                    }
                }


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


                        for(i=0;i<doc.length;i++)
                        {

                            latitude = doc[i].latitude;
                            longitude = doc[i].longitude;

                            var myLatlng=new google.maps.LatLng(latitude,longitude);
                            var chaine = "<b>" + doc[i].name + "</b><br/><br/>Superficie : " + doc[i].size +"<br/><br/>Lundi : " + doc[i].monday  
                            chaine = chaine + "<br/>Mardi : " + doc[i].tuesday + "<br/>Mercredi : " + doc[i].wednesday 
                            chaine = chaine + "<br/>Jeudi : "+ doc[i].thursday + "<br/>Vendredi : " + doc[i].friday 
                            chaine = chaine + "<br/>Samedi : " + doc[i].saturday + "<br/>Dimanche : " + doc[i].sunday
                
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
                req.open("GET", "/days/"+jours); 
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


            function RecupChangementVille(ville){

                var jours;
                jours = new Array();

                for(i=1;i<=7;i++)
                {
                    if(document.getElementById('jour_'+i).getAttribute("data-checked") == "true")
                    {
                        if(i==1)
                            jours.push("lundi");
                        if(i==2)
                            jours.push("mardi");
                        if(i==3)
                            jours.push("mercredi");
                        if(i==4)
                            jours.push("jeudi");
                        if(i==5)
                            jours.push("vendredi");
                        if(i==6)
                            jours.push("samedi");
                        if(i==7)
                            jours.push("dimanche");

                    }
                }


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

                        for(i=0;i<doc.length;i++)
                        {

                            longitude = doc[i].longitude;
                            latitude = doc[i].latitude;

                                
                            var chaine = "<b>" + doc[i].name + "</b><br/><br/>Superficie : " + doc[i].size +"<br/><br/>Lundi : " + doc[i].monday  
                                chaine = chaine + "<br/>Mardi : " + doc[i].tuesday + "<br/>Mercredi : " + doc[i].wednesday 
                                chaine = chaine + "<br/>Jeudi : "+ doc[i].thursday + "<br/>Vendredi : " + doc[i].friday 
                                chaine = chaine + "<br/>Samedi : " + doc[i].saturday + "<br/>Dimanche : " + doc[i].sunday
                            

                            var myLatlng=new google.maps.LatLng(latitude,longitude);

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
                req.open("GET", "/towns/"+ville, true); 
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

                            for(i=0;i<doc.length;i++)
                            {
                                longitude = doc[i].longitude;
                                latitude = doc[i].latitude;


                                var chaine = "<b>" + doc[i].name + "</b><br/><br/>Superficie : " + doc[i].size +"<br/><br/>Lundi : " + doc[i].monday  
                                chaine = chaine + "<br/>Mardi : " + doc[i].tuesday + "<br/>Mercredi : " + doc[i].wednesday 
                                chaine = chaine + "<br/>Jeudi : "+ doc[i].thursday + "<br/>Vendredi : " + doc[i].friday 
                                chaine = chaine + "<br/>Samedi : " + doc[i].saturday + "<br/>Dimanche : " + doc[i].sunday

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
                    req.open("GET", "/init", true); 
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
       
 
        echo '<body onload="initialize()">';

        ?>

    
        <div class="container">
            <div class="content">

                <div class="title">Rechercher un marché</div>

            </div>

            <p>


                <li className="days__item" data-value="lundi" id="jour_1" value="1" data-checked="false" onclick="RecupChangementJour(this.value)">Lun</li>
                <li className="days__item" data-value="mardi" id="jour_2" value="2" data-checked="false" onclick="RecupChangementJour(this.value)">Mar</li>
                <li className="days__item" data-value="mercredi" id="jour_3" value="3" data-checked="false" onclick="RecupChangementJour(this.value)">Mer</li>
                <li className="days__item" data-value="jeudi" id="jour_4" value="4" data-checked="false" onclick="RecupChangementJour(this.value)">Jeu</li>
                <li className="days__item" data-value="vendredi" id="jour_5" value="5" data-checked="false" onclick="RecupChangementJour(this.value)">Ven</li>
                <li className="days__item" data-value="samedi" id="jour_6" value="6" data-checked="false" onclick="RecupChangementJour(this.value)">Sam</li>
                <li className="days__item" data-value="dimanche" id="jour_7" value="7" data-checked="false" onclick="RecupChangementJour(this.value)">Dim</li>


                <label for="ville">Ville : </label>  
                <input id="ville" name="ville" type="text" placeholder="ville" id="ville" onkeyup="RecupChangementVille(this.value)"><br/><br/>

            </p>


            <div id="malongitude"></div>
            <div id="malatitude"></div>
            <div id="map_canvas" style="width:100%; height:1000px"></div>

        </div>
    </body>
</html>
