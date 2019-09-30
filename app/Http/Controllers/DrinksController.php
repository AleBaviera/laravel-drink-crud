<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DrinksModel;

class DrinksController extends Controller
{
  public function getDrinks(){
    $drinks = DrinksModel::all();

    return view('drinks-cubes', compact('drinks'));
  }
}
