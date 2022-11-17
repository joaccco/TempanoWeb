@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Nuevo Punto de Venta</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.pointsales.store']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Nombre de Punto']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('lat', 'Latitud') !!}
                {!! Form::text('lat', NULL, ['class' => 'form-control', 'placeholder' => 'Latitud']) !!}

                @error('lat')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('lng', 'Longitud') !!}
                {!! Form::text('lng', NULL, ['class' => 'form-control', 'placeholder' => 'Longitud']) !!}

                @error('lng')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('schedule', 'Horarios') !!}
                {!! Form::text('schedule', NULL, ['class' => 'form-control', 'placeholder' => 'Horarios']) !!}

                @error('schedule')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('motto', 'Lema') !!}
                {!! Form::text('motto', NULL, ['class' => 'form-control', 'placeholder' => 'Lema']) !!}

                @error('motto')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('detail', 'Descripcion del Punto') !!}
                {!! Form::text('detail', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar una descripcion']) !!}

                @error('detail')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('fridge_id', 'Heladera') !!}
                {!! Form::select('fridge_id',$fridge, NULL, ['class' => 'form-control', 'placeholder' => 'Heladera']) !!}

                @error('fridge_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Usuario') !!}
                {!! Form::select('user_id',$user, NULL, ['class' => 'form-control', 'placeholder' => 'User']) !!}

                @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Almacenar Punto de venta', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

@section('js')
    {{-- CKEditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script> --}}

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

        /*  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
        } ); */
    </script>
@endsection