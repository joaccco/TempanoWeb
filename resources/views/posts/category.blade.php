@extends('layouts.app')
@section('content')

<div class="max-w-xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{$category->name}}</h1>

    @foreach ($posts as $post)
        <x-card-post :post="$posts" /x>
    @endforeach

    {{-- Paginacion --}}
    <div class="mt-4">
        {{$posts->links()}}
    </div>

   </div>

@endsection