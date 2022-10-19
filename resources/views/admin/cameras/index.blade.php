@extends('adminlte::page')

@section('title', 'Hielos Tempano')

@section('content_header')
    <h1>Heladeras</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.cameras.create')}}">Agregar Camara</a>
        </div>
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
                            <a  class="btn btn-primary btn-sm" href="{{route('admin.cameras.edit', $camera)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.cameras.destroy', $camera)}}" method="POST">
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