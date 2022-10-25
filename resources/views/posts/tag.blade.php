@extends('layouts.app')
@section('content')

<div class="max-w-5l mx-auto px-2 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase text-center text-3xl font-bold">Etiqueta: {{$tag->name}} </h1>
</div>

@foreach ($posts as $post)
    <x-card-post :post="$post" />
@endforeach
<div class="mt-4">
    {{$posts->links()}}
</div>
@endsection