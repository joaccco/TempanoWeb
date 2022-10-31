@extends('adminlte::page')

@section('title', 'Hielos Tempano')

@section('content_header')
    <h1>Productos Tempano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.products.create')}}">Nuevo Producto</a>
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
                    <th>Codigo</th>
                    <th>Precio</th>
                    <th>Detalle</th>
                    <th colspan="4"></th>

                </thead>

                <tbody>

                 @foreach ($products as $product)
                     <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->code}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->detail}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.products.edit', $product)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.products.destroy', $product)}}" method="POST">
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