@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>

    <form method="post" action="/pizzas/{{$pizza->id}}">
        @csrf
        @method("DELETE")
        <button class="btn btn-primary" type="submit">Complete order</button>
    </form>

</div>
<a href="/pizzas" class="back">Go back to pizzas page</a>
@endsection