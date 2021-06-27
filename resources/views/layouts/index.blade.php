@extends('layouts.app')


@section('content') 
   <h1 class="text-center mt-5">{{ $title }}</h1>

   <div class="gallery">
      @foreach ($superheros as $superhero)
         <a href="/superheros/{{ $superhero->id }}" class="gallery__item">                       
            <p class="item__img"><img src="{{$superhero->img}}" alt="{{ $superhero->nickname }}"></p>
            <p class="item__text text-center">{{ $superhero->nickname }}</p>            
         </a>
      @endforeach
   </div>

   {{$superheros->links()}}

@endsection


@section('title', 'Superheros')
