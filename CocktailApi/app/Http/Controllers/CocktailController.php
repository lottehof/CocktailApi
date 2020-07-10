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
    // return view('cocktail.index')->with('cocktails', Cocktail::all());
    return Cocktail::all();
  }
  public function show(){
    return Cocktail::with("ingredienten")->with("benodigheden")->with('instructies')->get();
  }


  public function CocktailById($cocktailId){
    return Cocktail::where('id', '=', $cocktailId)->first();
  }

  public function getCocktailsById($cocktailId){
    $cocktail = Cocktail::with("ingredienten")->with("benodigheden")->with('instructies')->find($cocktailId);
    if ($cocktail) {
      return response()->json($cocktail, 200);
    } else {
      return response()->json(["message" => "No company found with company id: " . $cocktailyId . "."], 404);
    }
  }


  public function getStrength($strength){
    if($strength == 'non-alcoholic'){
      return Cocktail::where('sterkte', '=', 0)->with("ingredienten")->with("benodigheden")->with('instructies')->get();
    }

    else if($strength == 'light'){
      return Cocktail::where('sterkte', '>', 1)->where('sterkte', '<', 10)->with("ingredienten")->with("benodigheden")->with('instructies')->get();
    }

    else if($strength == 'medium'){
      return Cocktail::where('sterkte', '>', 11)->where('sterkte', '<', 19)->with("ingredienten")->with("benodigheden")->with('instructies')->get();
    }

    else if($strength == 'strong'){
      return Cocktail::where('sterkte', '>', 20)->with("ingredienten")->with("benodigheden")->with('instructies')->get();
    }
  }

  public function storeCocktail(Request $request){
    $cocktail = new Cocktail();
    $cocktail->naam = $request->input('naam');
    $cocktail->sterkte = $request->input('sterkte');
    $cocktail->image_location = $request->input('image_location');
    $cocktail->created_at = $request->input('created_at');
    $cocktail->updated_at = $request->input('updated_at');

    try{
      $cocktail->save();
    }
    catch (Exception $e){
      return $e;
    }
  }

  public function getLastCocktail(){
    return Cocktail::all()->last()->id;
  }


}
