@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <a class="btn btn-primary btn-sm float-lg-right" href="{{route('admin.posts.create')}}">Nuevo Remito</a>
    <h1>Remitos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.fridges.create')}}">Agregar Heladeras</a>
    </div>
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
    <div class="card-body">
        <p>Bienvenido.</p>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Numero</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>USER</th>

                <th colspan="7"></th>

            </thead>

            <tbody>

             @foreach ($tickets as $ticket)
                 <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->number}}</td>
                    <td>{{$ticket->brand}}</td>
                    <td>{{$ticket->capability}}</td>
                    <td width="10px">
                        <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.fridges.edit', $fridge)}}">Editar</a></td>
                    <td width="10px">
                        <form action="{{route('admin.fridges.destroy', $fridge)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar el Producto?')" class="text-white rounded-lg btn bg-red-600">Eliminar</button>
                        </form>

                    </td>
                 </tr>
             @endforeach

            </tbody>

        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop