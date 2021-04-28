@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Creat a new pizza</h1>
    <form method="post" action="/pizzas">
        @csrf

        <label for="name">Your name</label>
        <input class="form-control" type="text" name="name"  id="name">
        <label for="type">Type of pizza</label>
        <div class="form-group">
            <select id="type" class="form-control" name="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="vegSupreme">Veg Supreme</option>
            </select>
        </div>

        <label for="base">Choose base</label>
        <div class="form-group">
            <select id="base" class="form-control" name="base">
                <option value="cheesy-crust">Cheesy-crust</option>
                <option value="garlic-crust">Garlic-crust</option>
                <option value="thick">Thick</option>
            </select>
        </div>

        <fieldset>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
        </fieldset>

        <input class="form-control" type="submit" name="send" value="Order pizza">
    </form>
</div>
@endsection