<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing-page/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('landing-page/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">
    <title>CV. Sumber Waras Sukses</title>

</head>

<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">

    <div class="ts-page-wrapper" id="page-top">
        @yield('content')
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div class="mt-4" id="caption"></div>
    </div>

    <script>
        function openModalImage(imgId) {
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById(imgId);
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        }
        if (document.getElementsByClassName("ts-full-screen").length) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
    <script src="{{ asset('landing-page/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing-page/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('landing-page/js/imagesloaded.pkgd.min.js') }}"></script> -->
    <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script> -->
    <script src="{{ asset('landing-page/js/isInViewport.jquery.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/scrolla.jquery.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/custom.js') }}"></script>

    <!--Google map-->
    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "{{ asset('assets/img/map-marker.png') }}";
        var mapElement = "map";
        var mapStyle = [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#444444"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "color": "#f2f2f2"
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 45
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "color": "#dbdbdb"
            }, {
                "visibility": "on"
            }]
        }];
        // google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>

</body>

</html>
