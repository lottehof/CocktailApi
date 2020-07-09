@extends('cocktail.layout')

  <div class="cardcontainer">
    @foreach($cocktails as $cocktail)

    <div class="card">
      <div class="carddescription">{{$cocktail->naam}}</div>
      <div class="cardheader"><img class="cardheader__img" src={{$cocktail->image_location}}  alt=""/></div>

    </div>

    @endforeach

  </div>
