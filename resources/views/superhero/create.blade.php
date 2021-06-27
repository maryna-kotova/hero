@extends('layouts.app')

@section('content')
   <h1>Add Superhero</h1>

   @include('messages.errors')
   @if(session('success'))
      <div class="alert alert-success">
         {{session('success')}}
      </div>        
   @endif

   {!! Form::open(['url' => '/superheros', 'files' => true]) !!}
      
      @include('superhero._form')

   {!! Form::close() !!}

@endsection

@section('js')     
   
   <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
   <script>    
      $('#lfm').filemanager('image');
   </script> 
@endsection