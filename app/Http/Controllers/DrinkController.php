<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = 'Drinks';
      $min= Drink::min('price');
      $max= Drink::max('price');
      $avg= Drink::avg('price');

      $drinks = Drink::all();
      return view('page.index', compact('drinks','title', 'min', 'max', 'avg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = 'Drinks';

      return view('page.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validateData = $request -> validate([
        'name'=> 'required',
        'mark'=> 'required',
        'price'=> 'required',
        'exp'=> 'required'
      ]);
      Drink::create($validateData);

      return redirect('/cube/drink');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $drink = Drink::findOrFail($id);
      $title = 'Drinks';
      return view('page.show', compact('drink', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $drink = Drink::findOrFail($id);
      $title = 'Drinks';
      return view('page.update', compact('drink', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validateData = $request -> validate([
        'name'=> 'required',
        'mark'=> 'required',
        'price'=> 'required',
        'exp'=> 'required'
      ]);
      Drink::whereId($id)-> update($validateData);
      return redirect('/cube/drink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $drink = Drink::findOrFail($id);
      $drink -> delete();
      return redirect('/cube/drink');
    }
}
