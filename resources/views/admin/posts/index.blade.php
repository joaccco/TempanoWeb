@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <a class="btn btn-primary btn-sm float-lg-right" href="{{route('admin.posts.create')}}">Nuevo Post</a>
    <h1>Estado del post</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop