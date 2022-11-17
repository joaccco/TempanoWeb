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
                    <th>Nombre</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Horarios</th>
                    <th>Lema</th>
                    <th>Detalle</th>
                    <th>Heladera</th>
                    <th>Usuario</th>
                    <th colspan="6"></th>

                </thead>

                <tbody>

                 @foreach ($pointsales as $pointsale)
                     <tr>
                        <td>{{$pointsale->id}}</td>
                        <td>{{$pointsale->name}}</td>
                        <td>{{$pointsale->lat}}</td>
                        <td>{{$pointsale->lng}}</td>
                        <td>{{$pointsale->schedule}}</td>
                        <td>{{$pointsale->motto}}</td>
                        <td>{{$pointsale->detail}}</td>
                        <td>{{$pointsale->fridge_id}}</td>
                        <td>{{$pointsale->user_id}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.pointsales.edit', $pointsale)}}">Editar</a></td>
                       
                            <td width="10px">
                            <form action="{{route('admin.pointsales.destroy', $pointsale)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar el Punto de venta?')" class="text-white rounded-lg btn bg-red-600">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                 @endforeach

                </tbody>

            </table>
        </div>
    </div>
@stop