<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cocktail;
use App\Benodigheden;
use App\Ingredienten;
use App\Instructies;
use Exception;



class CocktailController extends Controller
{
  public function index(){
    return view('cocktail.index')->with('cocktails', Cocktail::all());
  //  return Cocktail::all();
  }

  public function store(Request $request){
      $cocktail = new Cocktail();
      $cocktail->naam = $request->input('naam');
      $cocktail->sterkte = $request->input('sterkte');
      $cocktail->image_location = $request->input("image_location");

      try{
      $cocktail->save();
        return redirect('/cocktail');
      }
      catch(Exception $e){
        return redirect('/cocktail/create');
      }
}
