<!DOCTYPE html>
<?php
include_once 'common.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="keywords" content="Zaika Tokyo Indian Resturant Curry" />
        <meta name="description" content="Zaika Tokyo - Indian Resturant in Tokyo Japan" />
        <meta name="author" content="Zaika Tokyo - Developer - DeekshaBajaj" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Title -->
        <title><?php echo $lang['title_contact']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        <!-- herder -->
        <?php $page = 'five'; include('header.php'); ?>

        <!-- Contact Us -->
        <section class="padT70 padB70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="theme-form marB30">
                            <h3 class="marB30 text-center"><?php echo $lang['contact_form_title']; ?></h3>
                            <div class="row">
                                <div class="col-xs-12 marB30 positionR">
                                    <input type="text" placeholder="<?php echo $lang['contact_form_name']; ?>">
                                    <i class="fa fa-user input" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-12 marB30 positionR">
                                    <input type="text" placeholder="<?php echo $lang['contact_form_email']; ?>">
                                    <i class="fa fa-envelope input" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-12 marB30 positionR">
                                    <input type="text" placeholder="<?php echo $lang['contact_form_number']; ?>" >
                                    <i class="fa fa-phone input" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-12 marB20 positionR">
                                    <textarea placeholder="<?php echo $lang['contact_form_comment']; ?>" rows="6"></textarea>
                                    <i class="fa fa-comment input" aria-hidden="true"></i>
                                </div>
                                <div class="col-sm-12 col-xs-12 text-center">
                                    <button type="submit" class="itg-button"><?php echo $lang['contact_form_button']; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 contact-detail text-center marB40">
                        <div class="col-xs-12 marB40">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3><?php echo $lang['contact_location_title'];?></h3>
                            <p><?php echo $lang['contact_location_content'];?> </p>
                        </div>
                        <div class="col-xs-12 marB40">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h3><?php echo $lang['contact_email_title'];?></h3>
                            <p><?php echo $lang['contact_email_content'];?> </p>
                        </div>
                        <div class="col-xs-12 marB40">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3><?php echo $lang['contact_phone_title'];?></h3>
                            <p><?php echo $lang['contact_phone_content'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us Map -->
        <div id="map"></div>
        
        <div class="clear"></div>
        
        <!-- Footer -->
        <?php include('footer.php'); ?>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO0qGyWPhL6tQ4pkLlpUh2A-wF7mLNc5Q" type="text/javascript"></script>

        <script>
            function initialize(){
                var myLatLng = {lat: 35.6049716, lng: 139.6503822};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: myLatLng, 
                    styles: [
                                {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
                                {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
                                {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
                                {
                                    featureType: 'administrative',
                                    elementType: 'geometry.stroke',
                                    stylers: [{color: '#c9b2a6'}]
                                },
                                {
                                    featureType: 'administrative.land_parcel',
                                    elementType: 'geometry.stroke',
                                    stylers: [{color: '#dcd2be'}]
                                },
                                {
                                    featureType: 'administrative.land_parcel',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#ae9e90'}]
                                },
                                {
                                    featureType: 'landscape.natural',
                                    elementType: 'geometry',
                                    stylers: [{color: '#dfd2ae'}]
                                },
                                {
                                    featureType: 'poi',
                                    elementType: 'geometry',
                                    stylers: [{color: '#dfd2ae'}]
                                },
                                {
                                    featureType: 'poi',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#93817c'}]
                                },
                                {
                                    featureType: 'poi.park',
                                    elementType: 'geometry.fill',
                                    stylers: [{color: '#a5b076'}]
                                },
                                {
                                    featureType: 'poi.park',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#447530'}]
                                },
                                {
                                    featureType: 'road',
                                    elementType: 'geometry',
                                    stylers: [{color: '#f5f1e6'}]
                                },
                                {
                                    featureType: 'road.arterial',
                                    elementType: 'geometry',
                                    stylers: [{color: '#fdfcf8'}]
                                },
                                {
                                    featureType: 'road.highway',
                                    elementType: 'geometry',
                                    stylers: [{color: '#f8c967'}]
                                },
                                {
                                    featureType: 'road.highway',
                                    elementType: 'geometry.stroke',
                                    stylers: [{color: '#e9bc62'}]
                                },
                                {
                                    featureType: 'road.highway.controlled_access',
                                    elementType: 'geometry',
                                    stylers: [{color: '#e98d58'}]
                                },
                                {
                                    featureType: 'road.highway.controlled_access',
                                    elementType: 'geometry.stroke',
                                    stylers: [{color: '#db8555'}]
                                },
                                {
                                    featureType: 'road.local',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#806b63'}]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'geometry',
                                    stylers: [{color: '#dfd2ae'}]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#8f7d77'}]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'labels.text.stroke',
                                    stylers: [{color: '#ebe3cd'}]
                                },
                                {
                                    featureType: 'transit.station',
                                    elementType: 'geometry',
                                    stylers: [{color: '#dfd2ae'}]
                                },
                                {
                                    featureType: 'water',
                                    elementType: 'geometry.fill',
                                    stylers: [{color: '#b9d3c2'}]
                                },
                                {
                                    featureType: 'water',
                                    elementType: 'labels.text.fill',
                                    stylers: [{color: '#92998d'}]
                                }
                            ]
                });
                var marker = new google.maps.Marker({
                    animation: google.maps.Animation.DROP,
                    position: myLatLng,
                    map: map,
                    title: 'Zaika Tokyo'
                });
                google.maps.event.addListener(marker , 'click', function(){
                    var infowindow = new google.maps.InfoWindow({
                        content:'Zaika Tokyo',
                        position: myLatLng,
                    });
                    infowindow.open(map);
                });
            };
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>