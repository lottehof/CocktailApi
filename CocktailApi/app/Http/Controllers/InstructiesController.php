<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructies;

class InstructiesController extends Controller
{
  public function getInstructiesByCocktail($cocktailId) {
    if (Instructies::where('cocktail_id', $cocktailId)->exists()) {
      $instructies = Instructies::where('cocktail_id', $cocktailId)->get()->toJson(JSON_PRETTY_PRINT);
      return response($instructies, 200);
    } else {
      return response()->json([
            "message" => "No products found for the cocktail with cocktail id: " . $cocktailId
          ], 404);
    }
  }
}
