@extends('layouts.app')

@section('content')
   @foreach ($superhero as $item)
      <h1 class="text-center mt-3">{{$item->nickname}}</h1>
      <div class="heropage">      
         <figure class="heropage__img"><img src="{{$item->img}}" alt="{{$item->nickname}}"></figure>
         <div class="heropage__about">
            <p><b>Nickname:</b> {{$item->nickname}}</p>
            <p><b>Real name:</b> {{$item->real_name}}</p>
            <p><b>Origin description:</b> {{$item->origin_description}}</p>
            <p><b>Superpowers:</b> {{$item->superpowers}}</p>
            <p><b>Catch phrase:</b> "{{$item->catch_phrase}}"</p>   
            <a href="/superheros/{{ $item->id }}/edit" class="btn btn-warning text-white">Edit</a>
            {!! Form::open(['url' => '/superheros/'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
               <button class="btn btn-danger text-white">Delete</button>
            {!! Form::close() !!}                     
         </div>   
      </div>  
      <a href="/delete/{{ $item->id }}" class="btn btn-danger text-white">Delete IMG</a>     
   @endforeach

@endsection

