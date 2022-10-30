@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <h1>Hielos TEMPANO</h1>
@stop

@section('content')
    <div class="card">
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
                {!! Form::label('mount', 'Precio:') !!}
                {!! Form::select('mount', $categories, null, ['class' => 'form-control']) !!}

                @error('mount')     
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

            <p class="font-weight-bold mb-1">Obsevaciones:</p>
            <div id="editor" class="form-group">
              {!! Form::label('detail') !!}
              {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
            </div>

            @error('detail')
              <small class="text-danger">{{$message}}</small>
            @enderror

            <div class="form-group">
              {!! Form::label('pointsale_id', 'Punto de Venta:') !!}
              {!! Form::select('pointsale_id', $categories, null, ['class' => 'form-control']) !!}

              @error('pointsale_id')
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