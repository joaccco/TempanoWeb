@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <h1>Hielos TEMPANO</h1>
@stop

@section('content')
    <div class="card">
      <h2 class="mt-4 ml-4 text-lg">Nuevo<strong class="text-blue-800w"> REMITO</strong> </h2>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tickets.store', 'autocomplete' => 'off']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            
            <div class="form-group">
                {!! Form::label('number', 'Numero:') !!}
                {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de Remito']) !!}

                @error('number')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
              {!! Form::label('date', 'Fecha:') !!}
              {!! Form::date('date', NULL, ['class' => 'form-control', 'placeholder' => 'Fecha']) !!}

              @error('date')
              <small class="text-danger">{{$message}}</small>
              @enderror
          </div>

            <div class="form-group">
              {!! Form::label('user_id', 'Usuario:') !!}
              {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}

              @error('user_id')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="form-group">
              <p class="font-weight-bold mb-1">Producto:</p>
              @foreach ($products as $product)

              <label class="mr-4">
                 {!! Form::checkbox('products[]', $product->id, null) !!}
                 {{ $product->name }}
              </label>
              <input type="text" id="cantidad">

              @endforeach

              @error('product_id')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="form-group">
              <p class="font-weight-bold mb-1">Estado:</p>

              <label class="mr-2">
                  {!! Form::radio('status', 1, true) !!}
                  Cuenta Corriente
              </label>
          
              <label>
                  {!! Form::radio('status', 2) !!}
                  Pagado
              </label>

              @error('status')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div id="editor" class="form-group">
              {!! Form::label('detail', 'Observaciones') !!}
              {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}

              @error('detail')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="form-group">
              {!! Form::label('mount', 'Precio:') !!}
              {!! Form::text('mount', null, ['class' => 'form-control']) !!}

              @error('mount')     
              <small class="text-danger">{{$message}}</small>
              @enderror
          </div>

             {!! Form::submit('Crear Post', ['class' => 'mt-4 text-white btn bg-blue-600'])!!}
             {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>

    {{-- Plugin para asignar automaticamente una Slug a cada categoria --}}
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });

         ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
        } );

        ClassicEditor
          .create( document.querySelector( '#body' ) )
          .catch( error => {
            console.error( error );
        } );
    </script>
@endsection