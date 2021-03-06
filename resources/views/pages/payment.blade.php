<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page || Handstand</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- All css here -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>


    <div class="d-flex align-items-center">

        <div class="container d-flex justify-content-center mt-5 mb-5">
            <div class="row g-3">
                <div class="col-md-6"> <span>Payment Method</span>
                    <div class="card">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header p-0" id="headingTwo">
                                    <h2 class="mb-0"> <button
                                            class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span>Paypal</span> <img src="{{ asset('img/payment/paypal.png') }}"
                                                    width="30"> </div>
                                        </button> </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body"> <input type="text" class="form-control"
                                            placeholder="Paypal email"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0">
                                    <h2 class="mb-0"> <button
                                            class="btn btn-light btn-block text-left p-3 rounded-0"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex align-items-center justify-content-between"> <span>Credit
                                                    card</span>
                                                <div class="icons"> <img
                                                        src="{{ asset('img/payment/2ISgYja.png') }}" width="30"> <img
                                                        src="{{ asset('img/payment/visa.png') }}" width="30"> <img
                                                        src="{{ asset('img/payment/stripe.png') }}" width="30"> <img
                                                        src="{{ asset('img/payment/master.png') }}"> </div>
                                            </div>
                                        </button> </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body payment-card-body"> <span
                                            class="font-weight-normal card-text">Card Number</span>
                                        <div class="input"> <i class="fa fa-credit-card"></i> <input
                                                type="text" class="form-control" placeholder="0000 0000 0000 0000">
                                        </div>
                                        <div class="row mt-3 mb-3">
                                            <div class="col-md-6"> <span
                                                    class="font-weight-normal card-text">Expiry Date</span>
                                                <div class="input"> <i class="fa fa-calendar"></i> <input
                                                        type="text" class="form-control" placeholder="MM/YY"> </div>
                                            </div>
                                            <div class="col-md-6"> <span
                                                    class="font-weight-normal card-text">CVC/CVV</span>
                                                <div class="input"> <i class="fa fa-lock"></i> <input
                                                        type="text" class="form-control" placeholder="000"> </div>
                                            </div>
                                        </div> <span class="text-muted certificate-text"><i class="fa fa-lock"></i>
                                            Your transaction is secured with ssl certificate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6"> <span>Summary</span>
                    <div class="card">
                        <div class="d-flex justify-content-between p-5">
                            <div class="d-flex flex-column"> <span>{{ $pricing->package }}<i
                                        class="fa fa-caret-down"></i></span></div>
                            <div class="mt-3"> <sup class="super-price">{{ $pricing->price }}</sup> <span
                                    class="super-month">/Month</span> </div>
                        </div>
                        <hr class="mt-0 line">
                        <div class="p-3 d-flex justify-content-between">
                            <div class="d-flex flex-column"> <span>Total price you pay (US Dollars)</span>
                                <small>{{ $pricing->price }}</small> </div> <span>{{ $pricing->price }}</span>
                        </div>
                        <div class="p-3"> <a href="/payed/{{ $pricing->id }}"
                                class="btn btn-primary btn-block free-button">Pay Here</a>
                            <div class="text-center"> <a href="#">Have a promo code?</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- All js here -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.763494, 90.432226)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300
        }

        .container {
            height: 100vh
        }

        .card {
            border: none
        }

        .card-header {
            padding: .6rem 2rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5)
        }

        .form-control {
            height: 50px;
            border: 2px solid #eee;
            border-radius: 6px;
            font-size: 14px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #039be5;
            outline: 0;
            box-shadow: none
        }

        .input {
            position: relative
        }

        .input i {
            position: absolute;
            top: 16px;
            left: 11px;
            color: #989898
        }

        .input input {
            text-indent: 25px
        }

        .card-text {
            font-size: 13px;
            margin-left: 8px
        }

        .certificate-text {
            font-size: 12px
        }

        .billing {
            font-size: 11px
        }

        .super-price {
            top: 0px;
            font-size: 22px
        }

        .super-month {
            font-size: 11px
        }

        .line {
            color: #bfbdbd
        }

        .free-button {
            background: #1565c0;
            height: 52px;
            font-size: 15px;
            border-radius: 8px
        }

        .payment-card-body {
            flex: 1 1 auto;
            padding: 24px 2rem !important
        }

    </style>
