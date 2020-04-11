@extends('layouts.master')

@section('content')

    <section class="first-fold signature-moritz quarterheight contact-bg parallax" data-stellar-background-ratio="0.5">
        <div class="quarterheight trans-dark-overlay">
            <div class="valign">

                <section class="main-heading text-center">
                    <h1 class="white font3bold">Merhaba De</h1>
                    <h6 class="white font1">Yaratıcı tasarım sayfama hoş geldiniz</h6>
                    <div class="liner color-bg"></div>
                </section>

            </div>
        </div>
    </section>


    <div class="inner-wrap container add-top add-bottom">

        <section class="hero-text signature-moritz">
            <div class="row">
                <article class="col-md-12 silver-bg text-center pad-top pad-bottom">
                    <h3 class="black font1">Fatoş Doğan<br/></h3>
                    <div class="liner-small color-bg"></div>
                    <a href="#"><h6 class="grey font3bold">info@fatosdogan.com</h6></a>

                    ""
                </article>
            </div>

            <div class="row add-top-half">
                <article class="col-md-12">

                    <div class="contact-item">
                        <div class="alert alert-error error color-bg" id="fname">
                            <p class="black">İsim boş olmamalıdır</p>
                        </div>
                        <div class="alert alert-error  error color-bg" id="fmail">
                            <p class="black">Lütfen geçerli bir e-posta adresi verin</p>
                        </div>
                        <div class="alert alert-error  error color-bg" id="fmsg">
                            <p class="black">Mesaj boş olmamalıdır</p>
                        </div>
                        <form name="myform" id="contactForm" action="http://designova.net/collections/signature/moritz/sendcontact.php" enctype="multipart/form-data" method="post">
                            <article>
                                <input type="text" placeholder="Adınız" id="name" name="name" size="100" class="border-form white font4light">
                            </article>
                            <article>
                                <input type="text" placeholder="E-Mail" name="email" id="email" size="30" class="border-form white font4light">
                            </article>
                            <article>
                                <textarea placeholder="Mesajınız" name="message" cols="40" rows="5" id="msg" class="border-form white font4light"></textarea>
                                <div class="btn-wrap  text-left">
                                    <button class="btn btn-signature btn-signature-moritz btn-signature-color" id="submit" name="submit" type="submit">Send Message</button>
                                </div>
                            </article>
                        </form>
                    </div>




                </article>
            </div>
        </section>



    </div>
    <!-- end : inner-wrap -->




    <div class="container-fluid">
        <div class="row">
            <article class="col-md-12 map-wrap no-pad">
                <div id="map" class="signature-moritz fullheight"></div>
            </article>
        </div>
    </div>
@stop


@section('scripts')

    <script type="text/javascript" src="{{ URL::asset('js/custom/form-validation.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZeficP5-GPMF6AXcGC6wbf3jqwePSvEk&sensor=false"></script>


    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(39.902730, 32.816290), // Ankara

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(39.902730, 32.816290),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
@stop