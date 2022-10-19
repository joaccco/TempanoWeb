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
        <div class="card-body">
            <p>Bienvenido.</p>
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
                            <a  class="btn btn-primary btn-sm" href="{{route('admin.products.edit', $product)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.products.destroy', $product)}}" method="POST">
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