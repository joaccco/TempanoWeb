@extends('adminlte::page')

@section('title', 'Hielos Tempano')

@section('content_header')
    <h1>Heladeras</h1>
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
            <p>Bienvenido a Administracion.</p>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Numero</th>
                    <th>Marca</th>
                    <th>Capacidad</th>
                    <th colspan="4"></th>

                </thead>

                <tbody>

                 @foreach ($fridges as $fridge)
                     <tr>
                        <td>{{$fridge->id}}</td>
                        <td>{{$fridge->number}}</td>
                        <td>{{$fridge->brand}}</td>
                        <td>{{$fridge->capability}}</td>
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