<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'base' => 'required',
        ]);
    
        $pizza = new Pizza();
        $pizza->name = $request->input('name');
        $pizza->type = $request->input('type');
        $pizza->base = $request->input('base');
        $pizza->toppings = $request->input('toppings');
    
        // to mysql 
        $pizza->save();
    
        // save in  session
        $request->session()->put('pizza_details', [
            'type' => $request->input('type'),
            'base' => $request->input('base'),
            'toppings' => $request->input('toppings'),
    
        ]);
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    }
    

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
    public function complete($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->update(['status' => 'complete']);

        return redirect('/pizzas');
    }
}
