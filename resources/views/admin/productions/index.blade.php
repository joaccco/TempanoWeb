@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Produccion</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="text-white rounded-lg btn bg-blue3-600" href="{{route('admin.productions.create')}}">Almacenar Produccion</a>
    </div>
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
    @endif
    <div class="card-body">
        <p>Bienvenido a Administracion.</p>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Detalle</th>
                <th>Producto</th>
                <th>Camara</th>
                <th colspan="6"></th>

            </thead>

            <tbody>

             @foreach ($productions as $production)
                 <tr>
                    <td>{{$productions->id}}</td>
                    <td>{{$productions->date}}</td> 
                    <td>{{$productions->quantity}}</td>
                    <td>{{$productions->detail}}</td>
                    <td>{{$productions->product}}</td>
                    <td>{{$productions->camera}}</td>
                    <td width="10px">
                        <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.productions.edit', $productions)}}">Editar</a></td>
                    <td width="10px">
                        <form action="{{route('admin.productions.destroy', $production)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" onclick="return confirm('¿Quiere Eliminar el registro?')" class="text-white rounded-lg btn bg-red-600">Eliminar</button>
                        </form>
                    </td>
                 </tr>
             @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop