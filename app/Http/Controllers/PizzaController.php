<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
    //

    public function index() {

        // $pizzas = Pizza::all();  
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();      
    
        // return view('pizzas', [
        //   'pizzas' => $pizzas,
        // ]);
        return $pizzas;
      }
    
      public function show($id) {
        // use the $id variable to query the db for a record
        $pizza = Pizza::findOrFail($id);
        return $pizza;
      }

      public function store() {

        $pizza = new Pizza();
    
        // how to access data
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        // json array goes through casts
        $pizza->toppings = request('toppings');


        // error_log(request('price'));
    
        $pizza->save();
    
        return $pizza;
      }

      public function destroy($id) {

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
    
        return [];
    
      }

}
