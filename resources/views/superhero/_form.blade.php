<div class="form-group">
   {!! Form::label('nickname', 'Nickname: ') !!}
   {!! Form::text('nickname', null, ['class' => 'form-control' . ($errors->has('nickname') ? ' is-invalid' : '') ]) !!}
   @error('nickname') 
      <div class="invalid-feedback">{{$message}}</div>
   @enderror 
</div>

<div class="form-group">
   {!! Form::label('real_name', 'Real name: ') !!}
   {!! Form::text('real_name', null, ['class' => 'form-control' . ($errors->has('real_name') ? ' is-invalid' : '') ]) !!}
   @error('real_name') 
      <div class="invalid-feedback">{{$message}}</div>
   @enderror 
</div>

<div class="form-group">
   {!! Form::label('origin_description', 'Origin description: ') !!}
   {!! Form::textarea('origin_description', null, ['class' => 'form-control' . ($errors->has('origin_description') ? ' is-invalid' : '') ]) !!}
   @error('origin_description') 
      <div class="invalid-feedback">{{$message}}</div>
   @enderror 
</div>

<div class="form-group">
   {!! Form::label('superpowers', 'Superpowers: ') !!}
   {!! Form::textarea('superpowers', null, ['class' => 'form-control' . ($errors->has('superpowers') ? ' is-invalid' : '') ]) !!}
   @error('superpowers') 
      <div class="invalid-feedback">{{$message}}</div>
   @enderror 
</div>

<div class="form-group">
   {!! Form::label('catch_phrase', 'Catch phrase: ') !!}
   {!! Form::textarea('catch_phrase', null, ['class' => 'form-control' . ($errors->has('catch_phrase') ? ' is-invalid' : '') ]) !!}
   @error('catch_phrase') 
      <div class="invalid-feedback">{{$message}}</div>
   @enderror 
</div>

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   {{-- name="img"   используем в контроллере категории  $request->img --}}
   <input id="thumbnail" 
          class="form-control" 
          type="text" 
          name="img" 
          value="@isset($superhero) {{$superhero->img}} @endisset">
 </div>
 <div id="holder" style="margin-top:15px;max-height:100px;">
   @isset($superhero)
       <img src="{{$superhero->img}}" alt="image"  style="max-height:100px;">
   @endisset
</div>

<button class="btn btn-primary">Save</button>