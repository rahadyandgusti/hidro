@extends('layouts.master')

@section('header')
<style type="text/css">
    body { padding-top: 0px !important; }
</style>
@stop

@section('content')
<h3 class="center-align title-home"><span>Produk Unggulan</span></h3>
<div class="row">
    @for($i=1;$i<=8;$i++)
    <div class="col s12 m3">
      <div class="card  hoverable">
        <div class="card-image">
          <img src="{{asset('images/item.jpg')}}">
        </div>
        <div class="card-content center text-green">
          <span class="card-title">Winch</span>
          <p>beban maksimal 60 ton</p>
        </div>
        <div class="card-action center">
          <a href="{{url('catalogue/winch')}}" class="waves-effect waves-light btn btn-small green">button</a>
        </div>
      </div>
    </div>
    @endfor
</div>
<h3 class="center-align title-home"><span>Videos</span></h3>
<div class="row">
    <div class="col s12">
    @for($i=1;$i<=3;$i++)
    <div class="col s12 m4 center-align">
      <div class="card  hoverable">
        <div class="card-image">
          <div class="video-container">
            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <h5>Penerapan Winch</h5>
    </div>
    @endfor
    </div>
</div>
@endsection
