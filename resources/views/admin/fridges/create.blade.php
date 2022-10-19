@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Almacenar nueva heladera</h1>
@stop

@section('content')
    <p>Bienvenido la concha de tu hermana.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.fridges.store']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('number', 'Numero') !!}
                {!! Form::text('number', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar numero de equipo']) !!}

                @error('number')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('brand', 'Marca') !!}
                {!! Form::text('brand', NULL, ['class' => 'form-control', 'placeholder' => 'Marca del equipo']) !!}

                @error('brand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('capability', 'Capacidad') !!}
                {!! Form::text('capability', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar capacidad de heladera']) !!}

                @error('capability')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Almacenar Heladera', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

{{-- @section('js')
    
    //Plugin para asignar automaticamente una Slug a cada categoria
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });
    </script>
@endsection --}}