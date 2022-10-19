@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Editar datos</h1>
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
            {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' => 'put']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Almacenar el Producto']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('code', 'Codigo') !!}
                {!! Form::text('code', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Codigo']) !!}

                @error('code')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            

            <div class="form-group">
                {!! Form::label('price', 'Precio') !!}
                {!! Form::text('price', NULL, ['class' => 'form-control', 'placeholder' => 'Asignar Precio']) !!}

                @error('price')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('detail', 'Detalle') !!}
                {!! Form::text('detail', NULL, ['class' => 'form-control', 'placeholder' => 'Detalle del producto']) !!}

                @error('detail')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar datos del Producto', ['class' => 'btn btn-primary']) !!}
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