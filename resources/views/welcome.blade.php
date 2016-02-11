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
   <body class="body">
        <section class="map-container">
            <div id="map"></div>
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
                <li class="days__item" data-value="lundi" data-checked="true">Lun</li>
                <li class="days__item" data-value="mardi" data-checked="false">Mar</li>
                <li class="days__item" data-value="mercredi" data-checked="true">Mer</li>
                <li class="days__item" data-value="jeudi" data-checked="false">Jeu</li>
                <li class="days__item" data-value="vendredi" ata-checked="false">Ven</li>
                <li class="days__item" data-value="samedi" data-checked="false">Sam</li>
                <li class="days__item" data-value="dimanche" data-checked="true">Dim</li>
            </ul>
        </section>
        <section class="popup" style="display:table;">
            <div class="popup__wrapper">
                <div class="popup__container">
                    <i class="popup__icon fa fa-shopping-basket"></i>
                    <h1 class="popup__title">Place de l'Europe</h1>
                    <h2 class="popup__location">Francheville</h2>
                    <ul class="popup__list">
                        <li class="popup__list__item" data-checked="true">lun</li>
                        <li class="popup__list__item" data-checked="false">mar</li>
                        <li class="popup__list__item" data-checked="true">mer</li>
                        <li class="popup__list__item" data-checked="false">jeu</li>
                        <li class="popup__list__item" data-checked="false">ven</li>
                        <li class="popup__list__item" data-checked="false">sam</li>
                        <li class="popup__list__item" data-checked="true">dim</li>
                    </ul>
                    <button class="popup__close"><i class="fa fa-times"></i>
                </div>
           </div>
        </section>
        <script src="js/frontend.js"></script>
    </body>
</html>
