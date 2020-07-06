<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{

  protected $table = "cocktail";

  function instructies() {
  return $this->hasMany('App\Instructies','cocktail_id','id');
}

function benodigheden() {
  return $this->hasMany('App\Benodigheden', 'cocktail_id', 'id');
}

function ingredienten() {
  return $this->hasMany('App\Ingredienten', 'cocktail_id', 'id');
}

}
