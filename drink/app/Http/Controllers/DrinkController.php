<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        return view('pages.drinks-index', compact('drinks'));
        // dd($drinks);
    }

    public function show($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink-show', compact('drink'));
        // dd($drinks);
    }

    public function create() {
        return view('pages.drink-create');
    }

    public function store(Request $request) {
        Drink::create($request -> all());
        return redirect() -> route('drinks-index'); //non devo scrivere pages.drinks-index perché non è un return view
    }
}
