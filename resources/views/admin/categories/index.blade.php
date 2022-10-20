@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Agregar Categorias</a>
        </div>
        @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
        <div class="card-body">
            <p>Bienvenido la concha de tu hermana.</p>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Descripcion</th>
                    <th colspan="2"></th>

                </thead>

                <tbody>

                 @foreach ($categories as $category)
                     <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn bg-sky-600" href="{{route('admin.categories.edit', $category)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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


{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}