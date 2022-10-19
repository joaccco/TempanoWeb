@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Nuevo Punto de Venta</h1>
@stop

@section('content')
    <p>Bienvenido la concha de tu hermana.</p>
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
                {!! Form::label('location', 'Ubicacion') !!}
                {!! Form::text('location', NULL, ['class' => 'form-control', 'placeholder' => 'Ubicacion']) !!}

                @error('location')
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