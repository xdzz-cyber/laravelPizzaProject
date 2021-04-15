<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{

    public function index()
    {
        $name = request("name");
        $pizzas = [
            ["type" => "fType"]
        ];
        $data = ["pizzas" => $pizzas, "name" => $name];
        return view("pizzas", $data);
    }

    public function show($id){
        return view("details", ["id"=>$id]);
    }
}
