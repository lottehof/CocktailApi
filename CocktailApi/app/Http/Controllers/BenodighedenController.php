<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benodigheden;

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
}
