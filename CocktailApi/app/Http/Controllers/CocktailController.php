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
  //  return view('bier.index')->with('bieren', Bier::all());
    return Cocktail::all();
  }
}
