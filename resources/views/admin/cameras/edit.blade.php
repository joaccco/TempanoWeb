@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Editar datos de Camara</h1>
@stop

@section('content')
    <p>Bienvenido.</p>


    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($camera, ['route' => ['admin.cameras.update', $camera], 'method' => 'put']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('number', 'Numero') !!}
                {!! Form::text('number', NULL, ['class' => 'form-control', 'placeholder' => 'Almacenar la Heladera']) !!}

                @error('number')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('brand', 'Marca') !!}
                {!! Form::text('brand', NULL, ['class' => 'form-control', 'placeholder' => 'Asignar Marca']) !!}

                @error('brand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('detail', 'Detalle') !!}
                {!! Form::text('detail', NULL, ['class' => 'form-control', 'placeholder' => 'Capacidad de la Heladera']) !!}

                @error('detail')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar datos de la Camara', ['class' => 'btn btn-primary']) !!}
            <div class="card-header">
                <a class="btn btn-primary" href="{{route('admin.cameras.create')}}">Agregar Nueva Camara</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
@endsection
 --}}