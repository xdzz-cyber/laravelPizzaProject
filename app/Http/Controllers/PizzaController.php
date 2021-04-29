<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    public function index(){
        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy("name", "desc")->get();
        //$pizzas = Pizza::where("type", "hawaiian")->get();
        //$pizzas = Pizza::latest()->get();
        $data = ["pizzas" => $pizzas];
        return view("pizzas.index", $data);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view("pizzas.show", ["pizza"=>$pizza]);
    }

    public function create(){
        return view("pizzas.create");
    }

    public function store(){

        $newPizza = new Pizza();

        $name = htmlspecialchars(request("name"));
        $type = htmlspecialchars(request("type"));
        $base = htmlspecialchars(request("base"));
        $toppings = request("toppings");

        for($i = 0; $i < count($toppings);$i++){
            $toppings[$i] = htmlspecialchars($toppings[$i]);
        }

        
        $newPizza->name = $name;
        $newPizza->type = $type;
        $newPizza->base = $base;
        $newPizza->toppings = $toppings;

        $newPizza->save();

        return redirect("/")->with("msg","Thanks for your order");
    }

    public function destroy($id){
        $foundPizza = Pizza::findOrFail($id);
        $foundPizza->delete();
        return redirect("/pizzas");
    }
}
