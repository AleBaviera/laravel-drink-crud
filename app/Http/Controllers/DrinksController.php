<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DrinksModel;

class DrinksController extends Controller
{
  public function getDrinks(){
    $title = 'bevande';
    $drinks = DrinksModel::all();
    $min= DrinksModel::min('prezzo');
    $max= DrinksModel::max('prezzo');
    $avg= DrinksModel::avg('prezzo');

    return view('drinks-cubes', compact('drinks','title','min','max','avg'));
  }
}
