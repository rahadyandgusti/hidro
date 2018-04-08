@extends('layouts.master')

@section('content')
    <h3 class="text-green-dark">Winch Selfloader 20 Ton</h3>
    <div class="row">
    	<div class="col s12 m9">
    		<div class="row">
    			<div class="col s12 m5 text-green-dark">
    				<span class="title-case">Photo</span>
    				<div class="carousel">
					    <a class="carousel-item" href="#one!"><img src="{{asset('images/item.jpg')}}"></a>
					    <a class="carousel-item" href="#two!"><img src="{{asset('images/item.jpg')}}"></a>
					    <a class="carousel-item" href="#three!"><img src="{{asset('images/item.jpg')}}"></a>
					    <a class="carousel-item" href="#four!"><img src="{{asset('images/item.jpg')}}"></a>
					    <a class="carousel-item" href="#five!"><img src="{{asset('images/item.jpg')}}"></a>
					</div>
					<div class="center-align">
				      <div class="card  hoverable">
				        <div class="card-image">
				          <div class="video-container">
				            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
				          </div>
				        </div>
				      </div>
				      <h5>Penerapan Winch</h5>
				    </div>
    			</div>
    			<div class="col s12 m7">
    				<span class="title-case text-green-dark">Description</span>
    				<div class="grey-text">
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
    			</div>
    			<div class="col s12 text-green-dark">
    				<span class="title-case">Spesifikasi</span>
    				<p>Pembuantan fabrifikasi hidrolik lokal tanah air macam-macam Offshare dan <i>marine hydraulic Winch</i> kapasitas 1-20 ton</p>
    				<ul class="browser-default">
    					<li>Towing Winch</li>
    					<li>Mooring Winch</li>
    					<li>Windlass</li>
    					<li>Capstain</li>
    				</ul>
    				<p>Aplikasi: perkapalan, offshore, industri, vehicle alat berat</p>
    				<p>Harga Winch Hidraulic: CALL</p>
    			</div>
    		</div>
    	</div>
    	<div class="col s12 m3 text-green-dark">
    		<span class="title-case">Produk lain</span>
    		<div class="row">
			    @for($i=1;$i<=4;$i++)
			    <div class="col s12">
			    	<a href="{{url('catalogue/winch')}}">
					<div class="card  hoverable">
						<div class="card-image">
						  <img src="{{asset('images/item.jpg')}}">
						  <span class="card-title">Winch</span>
						</div>
						<div class="card-content center text-green-dark">
						  <p>beban maksimal 60 ton</p>
						</div>
					</div>
					</a>
			    </div>
			    @endfor
			</div>
    	</div>
    </div>
@endsection

@section('foot')
<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
			numVisible:3,
			// fullWidth:true
		});
		$('.materialboxed').materialbox();
	});
</script>
@stop
