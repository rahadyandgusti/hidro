@extends('layouts.master')

@section('content')
	<br/>
	<div class="row">
		<div class="col s12 m8 offset-m2">
			<input type="text" class="browser-default input-search" value="winch">
		</div>
	</div>
	<h5 class="text-green-dark"><strong>Hasil Pencarian "winch"</strong></h5>
	<div class="row">
		<div class="col s12 m9">
			<div class="row">
				@for($i=1;$i<=12;$i++)
			    <div class="col s12">
			    	<a href="{{url('catalogue/winch')}}">
			      <div class="card horizontal hoverable">
			        <div class="card-image">
			          <img src="{{asset('images/item.jpg')}}" style="width:135px">
			        </div>

			        <div class="card-stacked">
				        <div class="card-content text-green">
				          <span class="card-title-horizontal text-green-dark">Winch Selfloader 20 ton</span>
				          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				        </div>
			    	</div>
			      </div>
			      	</a>
			    </div>
			    @endfor
			</div>
		</div>
		<div class="col s12 m3">
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
