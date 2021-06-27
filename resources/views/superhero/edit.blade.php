@extends('layouts.app')

@section('content')
   <h1>Edit Superhero</h1>

   @include('messages.errors')
   @if(session('success'))
       <div class="alert alert-success">
           {{session('success')}}
       </div>        
   @endif

   {!! Form::model($superhero,[                     
                              'url' => '/superheros/'.$superhero->id, 
                              'files' => true, 
                              'method' => 'put'
                              ]) !!}
      
      @include('superhero._form')

   {!! Form::close() !!}


@endsection

@section('js')      
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>      
        $('#lfm').filemanager('image');
    </script> 
@endsection