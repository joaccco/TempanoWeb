@extends('adminlte::page')

@section('title', 'Hielos Tempano')

@section('content_header')
    <h1>Camaras</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="text-white rounded-lg btn bg-blue3-600" href="{{route('admin.cameras.create')}}">Agregar Camara</a>
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
                    <th>Marca</th>
                    <th>Detalle</th>
                    <th colspan="4"></th>

                </thead>

                <tbody>

                 @foreach ($cameras as $camera)
                     <tr>
                        <td>{{$camera->id}}</td>
                        <td>{{$camera->number}}</td> 
                        <td>{{$camera->brand}}</td>
                        <td>{{$camera->detail}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.cameras.edit', $camera)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.cameras.destroy', $camera)}}" method="POST">
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