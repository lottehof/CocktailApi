<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredienten;

class IngredientenController extends Controller
{
    public function getIngredientByCocktail($cocktailId) {
      if (Ingredienten::where('cocktail_id', $cocktailId)->exists()) {
        $ingredients = Ingredienten::where('cocktail_id', $cocktailId)->get()->toJson(JSON_PRETTY_PRINT);
        return response($ingredients, 200);
      } else {
        return response()->json([
              "message" => "No products found for the cocktail with cocktail id: " . $cocktailId
            ], 404);
      }
    }
}
