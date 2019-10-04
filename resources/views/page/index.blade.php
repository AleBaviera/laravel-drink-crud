@extends('layout.drinks')

@section('content')
<a href="{{route('drinkCreate')}}">ADD</a>
<?php foreach ($drinks as $drink): ?>
  <div class="drinks-box">
    <p>name: {{$drink -> name}}</p>
    <p>mark: {{$drink -> mark}}</p>
    <p>price: {{$drink -> price}}</p>
    <p>exp: {{$drink -> exp}}</p>
  </div>

<?php endforeach; ?>

<div class="drinks-box">
  <p>min price: {{$min}}</p>
</div>
<div class="drinks-box">
  <p>max price: {{$max}}</p>
</div>
<div class="drinks-box">
  <p>avg price: {{$avg}}</p>
</div>
@endsection
