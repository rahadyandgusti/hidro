<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">


<style type="text/css">
   /* body { 
        padding-top: 70px;
    }
    .jumbotron {
        margin-bottom: 0px;
    }
    .footer {
      background-color: #044348;
      padding-top: 10px;
      padding-bottom: 10px;
      color: white;
    }
    .footer .copy {*/
        html, body {
    height: 100%;
  }
  .header, .sub-header{
    background-color: #044348;
  }
  .header img, .sub-header img{
    width: 100%;
    opacity: 0.13;
    filter: alpha(opacity=13);
  }
  .header .wrap-text, .sub-header .wrap-text{
    position: absolute;
    color: white;
    width: 100%;
  }
  
  .sub-header .wrap-text h1{
    margin-bottom: 0;
    font-size: 235px;
    margin-top: -2px;
  }

  .sub-header .wrap-text h2{
    margin:0;
  }

  .header .wrap-text .title{
    margin: 91px 0 0;
    font-weight: bolder;
    width: 100%;
    font-size: 26px;
  }
  
  .header .wrap-text .sub-title{
    margin: 0;
    font-weight: lighter;
    font-size: 32px;
  }

  .header .wrap-text .title-address, .header .wrap-text .address{
        margin: 0;
  }

  .header .wrap-text .ig, .header .wrap-text .fb{
        margin: 5px 0 0px;
  }
  /*.header .wrap-text h3,.header .wrap-text h2,.header .wrap-text p{
    width: 100%;
  }*/
  nav, footer {
    background-color: #044348 !important;
  }
  nav{
    z-index: 9999;
  }

  .green{
    background-color: #22B593;
  }

  .text-green{
    color: #22B593;
  }

  .text-green-dark{
    color: #044348;
  }

  .nav-wrapper .input-field input[type=search]{
    height: 60px;
  }

  .card-title-horizontal{
        font-weight: bolder;
    font-size: 20px;
  }

  .input-search{
        width: 100%;
    padding: 8px;
    border-radius: 5px;
  }

  .title-case{
        font-weight: bold;
    border-bottom: 3px #EEBC2B solid;
  }

  .title-home{
    color: #EEBC2B;
    font-weight: bold;
    font-size: 25px;
        margin: 55px 0;
  }

  .title-home span{
        padding: 8px 25px;
    border: 3px solid #EEBC2B;
    border-radius: 40px;
  }

  footer{
        margin-top: 40px;
  }
</style>

@yield('header') 

</head>
<body>
    <div class="wrapper">
        @include('layouts.components.navigation')
        <div class="container">
            @yield('content') 
        </div>
            
        <footer class="footer page-footer">
            <div class="container">
                <div class="row">
                    <div class="col m4">
                        <h5>Contact Person</h5>
                        <div class="divider"></div>
                         <div class="alamat">
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col m4">
                        <h5>Location</h5>
                        <div class="divider"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col m4">
                        <h5>Map</h5>
                        <div class="divider"></div>
                        <br/>
                        <div class="maps" id="map-canvas" style="width: 100%;height: 230px">

                        </div>
                    </div>

                </div>
            </div>
                    <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            </div>
          </div>
        </footer>

    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script type="text/javascript">
  //       var elem = document.querySelector('.pushpin');
  // var instance = M.Pushpin.init(elem, options);

        $(document).ready(function(){
            var $target = $('.wrap-nav');
            var $top = ($target.offset().top<0?0:$target.offset().top);
            var $bottom = $(document).outerHeight() ;
            $('.pushpin').pushpin({
                top: $top,
                bottom: $bottom
            });
            if(document.getElementById('header')){
                $('.wrap-nav').removeClass('navbar-fixed');
            } else {
                $('.wrap-nav').addClass('navbar-fixed');
            }
            $(".dropdown-trigger").dropdown();
            // $('.parallax').parallax();
        });
    </script>

    <script type="text/javascript">
    var coordinate = '-7.8208499,110.3845018';
    var arrayCoordinate = coordinate.split(',');
    // console.log(arrayCoordinate);

    function initMap(){
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center : {
                lat : parseFloat(arrayCoordinate[0]),
                lng : parseFloat(arrayCoordinate[1])
            },
            zoom : 15,
        });

        var marker = new google.maps.Marker({
            position : {
                lat : parseFloat(arrayCoordinate[0]),
                lng : parseFloat(arrayCoordinate[1])
            },
            map : map,
        });
    }   
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjru8tVg-fcj4xOIpZJLjSp1f-IIOIVvQ&libraries=places&callback=initMap" async defer></script>

@yield('foot')
</html>
