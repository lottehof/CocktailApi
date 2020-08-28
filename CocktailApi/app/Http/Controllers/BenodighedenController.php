<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benodigheden;
use App\Cocktail;

class BenodighedenController extends Controller
{
  public function getBenodighedenByCocktail($cocktailId) {
    if (Benodigheden::where('cocktail_id', $cocktailId)->exists()) {
      $benodigheden = Benodigheden::where('cocktail_id', $cocktailId)->get()->toJson(JSON_PRETTY_PRINT);
      return response($benodigheden, 200);
    } else {
      return response()->json([
            "message" => "No products found for the cocktail with cocktail id: " . $cocktailId
          ], 404);
    }
  }

  public function createBenodigheid(Request $request){
    $tobenodigheden = new Benodigheden();
    $tobenodigheden->id = Benodigheden::all()->last()->id+1;
    $tobenodigheden->benodigheid = $request->input('benodigheid');
    $tobenodigheden->cocktail_id = Cocktail::all()->last()->id;
    $tobenodigheden->created_at = $request->input('created_at');
    $tobenodigheden->updated_at = $request->input('updated_at');

    try{
      $tobenodigheden->save();
    }
    catch (Exception $e){
      return $e;
    }
  }
}
