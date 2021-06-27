@extends('layouts.app')


@section('content') 
   <h1 class="text-center">{{ $title }}</h1>
   <a href="{{ asset('superheros/create') }}" class="btn btn-success">New Superhero</a>
  

   <table class="table" id="dataTable">
      <thead>
         <tr>
            <th>#</th>
            <th>Image</th>
            <th>Nickname</th>        
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($superhero as $item)
            <tr>
               <td>{{$loop->iteration}}</td>
               <td><img style="width: 50px;" src="{{$item->img}}" alt="img"></td>
               <td>{{$item->nickname}}</td>
               <td>
                  <a href="/superheros/{{ $item->id }}" class="btn btn-primary text-white">View</a>
                  <a href="/superheros/{{ $item->id }}/edit" class="btn btn-warning text-white">Edit</a>
                  <a href="/delete/{{ $item->id }}" class="btn btn-danger text-white">Delete IMG</a> 
                  {!! Form::open(['url' => '/superheros/'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
                     <button class="btn btn-danger text-white">Delete HERO</button>
                  {!! Form::close() !!}                  
               </td>
            </tr>
         @endforeach

      </tbody>
   </table>

   {{$superhero->links()}}

@endsection


@section('title', 'Superheroes')
