@extends('layouts.master')

@section('content')
    <h3 class="center-align">Katalog</h3>
    <div class="row">
    @for($i=1;$i<=12;$i++)
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
@endsection
