<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cocktail;
class CocktailController extends Controller
{
    public function show($cocktailNaam){
      return Cocktail::where('naam','=',$cocktailNaam)->get();
    }
}
