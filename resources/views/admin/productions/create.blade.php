@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Almacenar produccion</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.products.store']) !!}

        {{-- Formulario de Categoria --}}
        {{-- Permite almacenar datos de una nueva categoria --}}
        <div class="form-group">
            {!! Form::label('date', 'Fecha') !!}
            {!! Form::text('date', NULL, ['class' => 'form-control', 'placeholder']) !!}

            @error('date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('quantity', 'Cantidad') !!}
            {!! Form::text('quantity', NULL, ['class' => 'form-control', 'placeholder]) !!}

            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Precio') !!}
            {!! Form::text('price', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar el precio']) !!}

            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('detail', 'Detalle') !!}
            {!! Form::text('detail', NULL, ['class' => 'form-control', 'placeholder' => 'Detalle del Producto']) !!}

            @error('detail')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Almacenar Producto', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop