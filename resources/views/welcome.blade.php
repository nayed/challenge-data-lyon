<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
        <script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
    </head>
   <body class="body" onload="initialize();">
        <section class="map-container">
            <div id="map"></div>
            <div id="malongitude"></div>
            <div id="malatitude"></div>
        </section>
        <section class="header">
            <div class="header__logo">
                <i class="fa fa-shopping-basket"></i>
                <h1><b>my</b>Market</h1>
            </div>
        </section>
        <section class="search">
            <div class="search__wrapper">
                <div class="search__bar">
                    <input type="text" class="search__input" placeholder="Recherche à proximité de ...">
                    <button class="search__button search__button--close"><i class="fa fa-times"></i></button>
                </div>
                <ul class="search__list">
                    <li class="search__item search__item--prox"><i class="fa fa-dot-circle-o"></i>Ma position actuelle</li>
                    <li class="search__item">Lyon</li>
                    <li class="search__item">Chassieu</li>
                    <li class="search__item">Villeurbanne</li>
                    <li class="search__item">Mâcon</li>
                    <li class="search__item">vaux-en-velin</li>
                </ul>
            </div>
        </section>
        <section class="days">
            <ul class="days__list">
                <li class="days__item" data-value="lundi" id="jour_1" data-checked="false" onclick="RecupChangementJour(this.value)">Lun</li>
                <li class="days__item" data-value="mardi" id="jour_2" data-checked="false" onclick="RecupChangementJour(this.value)">Mar</li>
                <li class="days__item" data-value="mercredi" id="jour_3" data-checked="false" onclick="RecupChangementJour(this.value)">Mer</li>
                <li class="days__item" data-value="jeudi" id="jour_4" data-checked="false" onclick="RecupChangementJour(this.value)">Jeu</li>
                <li class="days__item" data-value="vendredi" id="jour_5" data-checked="false" onclick="RecupChangementJour(this.value)">Ven</li>
                <li class="days__item" data-value="samedi" id="jour_6" data-checked="false" onclick="RecupChangementJour(this.value)">Sam</li>
                <li class="days__item" data-value="dimanche" id="jour_7" data-checked="false" onclick="RecupChangementJour(this.value)">Dim</li>
            </ul>
        </section>
        <section class="popup">
            <div class="popup__wrapper">
                <div class="popup__container">
                    <i class="popup__icon fa fa-shopping-basket"></i>
                    <h1 class="popup__title">Place de l'Europe</h1>
                    <h2 class="popup__location">Francheville</h2>
                    <ul class="popup__list">
                        <li class="popup__list__item popup__list__item--lun" data-checked="false">lun</li>
                        <li class="popup__list__item popup__list__item--mar" data-checked="false">mar</li>
                        <li class="popup__list__item popup__list__item--mer" data-checked="false">mer</li>
                        <li class="popup__list__item popup__list__item--jeu" data-checked="false">jeu</li>
                        <li class="popup__list__item popup__list__item--ven" data-checked="false">ven</li>
                        <li class="popup__list__item popup__list__item--sam" data-checked="false">sam</li>
                        <li class="popup__list__item popup__list__item--dim" data-checked="false">dim</li>
                    </ul>
                    <button class="popup__close"><i class="fa fa-times"></i>
                </div>
           </div>
        </section>
        <script src="js/frontend.js"></script>
        <script src="js/markers.js"></script>
    </body>
</html>
