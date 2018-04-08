@if(\Request::segment(1)=='')
<div class="header" id="header">
  <div class="wrap-text">
    <p class="center title"><strong>HUMAM HIDROLIK</strong></p>
    <p class="center sub-title">Produsen Mesin Hidrolik</p>
    <p class="center title-address">Alamat</p>
    <p class="center address"><i>Contact Person</i></p>
    <p class="center fb"><strong>Facebook</strong></p>
    <p class="center ig"><strong>Instagram</strong></p>
  </div>
  <img src="{{asset('images/header.jpg')}}">
</div>
@endif

<div class="wrap-nav">
    <nav class="pushpin">
        <div class="container">
            <div class="nav-wrapper">
                <ul class=" hide-on-med-and-down">
                    <li><a href="{{url('/')}}">HDR</a></li>
                    <li><a href="{{url('about')}}">Tentang Kami</a></li>
                    <li><a href="{{url('catalogue')}}">Katalog</a></li>
                </ul>
                <form class="right" method="get" action="{{url('search')}}">
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
                
            </div>
        </div>
    </nav>
</div>

@if(\Request::segment(1)=='about')
<div class="sub-header" id="sub-header">
  <div class="wrap-text">
    <h1 class="center"><strong>HDR</strong></h1>
    <h2 class="center">HUMAM HIDROLIK</h2>
  </div>
  <img src="{{asset('images/header.jpg')}}">
</div>
@endif