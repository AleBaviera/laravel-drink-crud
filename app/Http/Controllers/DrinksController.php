<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DrinksModel;

class DrinksController extends Controller
{
  public function getDrinks(){
    $title = 'bevande';
    $drinks = DrinksModel::all();

    return view('drinks-cubes', compact('drinks','title'));
  }
}
