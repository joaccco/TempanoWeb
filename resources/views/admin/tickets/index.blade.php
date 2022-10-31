@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <h1>Remitos</h1>
@stop

@section('content')
<div class="card">
    <p>Bienvenido a Administracion.</p>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.tickets.create')}}">Agregar Remito</a>
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
                <th>Producto</th>
                <th>USER</th>

                <th colspan="7"></th>

            </thead>

            <tbody>

             @foreach ($tickets as $ticket)
                 <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->date}}</td>
                    <td>{{$ticket->mount}}</td>
                    <td>{{$ticket->status}}</td>
                    <td>{{$ticket->detail}}</td>
                    <td>{{$ticket->product}}</td>
                    <td>{{$ticket->user}}</td>



                    <td width="10px">
                        <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.tickets.edit', $ticket)}}">Editar</a>
                    </td>
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