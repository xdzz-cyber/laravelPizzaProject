@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img class="img-fluid" src="/img/pizza.png" alt="each pizza's image">
      <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
    </div>
  @endforeach
</div>
@endsection