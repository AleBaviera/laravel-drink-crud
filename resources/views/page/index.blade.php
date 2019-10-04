@extends('layout.drinks')

@section('content')
<?php foreach ($drinks as $drink): ?>
  <div class="drinks-box">
    <p>{{$drink -> type}}</p>
    <p>{{$drink -> mark}}</p>
    <p>{{$drink -> price}}</p>
    <p>{{$drink -> exp}}</p>
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
