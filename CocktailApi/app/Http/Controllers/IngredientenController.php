<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredienten;
use App\Cocktail;

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

    public function createIngredient(Request $request){
      $ingredienten = new Ingredienten();
      $ingredienten->id = Ingredienten::all()->last()->id+1;
      $ingredienten->ingredient = $request->input('ingredient');
      $ingredienten->cocktail_id = Cocktail::all()->last()->id;
      $ingredienten->created_at = $request->input('created_at');
      $ingredienten->updated_at = $request->input('updated_at');

      try{
        $ingredienten->save();
      }
      catch (Exception $e){
        return $e;
      }
    }
}
