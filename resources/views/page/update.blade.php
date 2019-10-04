@extends('layout.drinks')

@section('content')
<a href="{{route('drinkIndex')}}">BACK</a>
<form class="" action="{{route('drinkUpdate', $drink -> id)}}" method="post">
  @csrf
  @method('POST')
  <div class="drinks-box">


    <label for="name">name</label>
    <input type="text" name="name" value="{{$drink -> name}}">
  </div>

  <div class="drinks-box">
    <label for="mark">mark</label>
    <input type="text" name="mark" value="{{$drink -> mark}}">
  </div>

  <div class="drinks-box">
    <label for="price">price</label>
    <input type="text" name="price" value="{{$drink -> price}}">
  </div>

  <div class="drinks-box">
    <label for="exp">exp</label>
    <input type="text" name="exp" value="{{$drink -> exp}}">
  </div>
  <button type="submit" name="button">Save</button>
</form>
@endsection
