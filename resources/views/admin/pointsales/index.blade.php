@extends('adminlte::page')

@section('title', 'Hielos Tempano')

@section('content_header')
    <h1>Punto de Venta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.pointsales.create')}}">Nuevo Punto</a>
        </div>
        <div class="card-body">
            <p>Bienvenido.</p>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Heladera</th>
                    <th>Usuario</th>
                    <th colspan="4"></th>

                </thead>

                <tbody>

                 @foreach ($pointsales as $pointsale)
                     <tr>
                        <td>{{$pointsale->id}}</td>
                        <td>{{$pointsale->name}}</td>
                        <td>{{$pointsale->location}}</td>
                        <td>{{$pointsale->fridge_id}}</td>
                        <td>{{$pointsale->user_id}}</td>
                        <td width="10px">
                            <a  class="btn btn-primary btn-sm" href="{{route('admin.pointsales.edit', $pointsale)}}">Editar</a></td>
                       
                            <td width="10px">
                            <form action="{{route('admin.pointsales.destroy', $pointsale)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                 @endforeach

                </tbody>

            </table>
        </div>
    </div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
@stop