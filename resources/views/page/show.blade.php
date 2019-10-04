@extends('layout.drinks')

@section('content')
<a href="{{route('drinkIndex')}}">BACK</a>

  <div class="drinks-box">
    <p>name: {{$drink -> name}}</p>
    <p>mark: {{$drink -> mark}}</p>
    <p>price: {{$drink -> price}}</p>
    <p>exp: {{$drink -> exp}}</p>
  </div>




@endsection
