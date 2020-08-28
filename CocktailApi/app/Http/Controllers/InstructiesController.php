<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructies;
use App\Cocktail;

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

  public function createInstructie(Request $request){
    $toinstructies = new Instructies();
    $toinstructies->id = Instructies::all()->last()->id+1;
    $toinstructies->instructie = $request->input('instructie');
    $toinstructies->cocktail_id = Cocktail::all()->last()->id;
    $toinstructies->created_at = $request->input('created_at');
    $toinstructies->updated_at = $request->input('updated_at');

    try{
      $toinstructies->save();
    }
    catch (Exception $e){
      return $e;
    }
  }
}
