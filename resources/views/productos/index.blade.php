@extends('layouts.app')
@section('content')
  <div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">Productos</h2>
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
           @foreach ($products as $product)
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-whitegroup-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1lg:aspect-h-1">
                <img src="{{$product->image}}" alt="Desk with leather desk pad, walnutdesk organizer, wireless keyboard and mouse, and porcelain mug."class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                 <span class="absolute inset-0"></span>
                   Producto:
                </a>
              </h3>
              <a class="text-base font-semibold text-gray-900" href="{{route('productos.show', $product)}}">{{$product->name}}</a>
              <p class="text-gray-500">{{$product->detail}}</p>
              <strong class="rounded-full border bg-blue-600 border-current px-5 py-1.5 text-[10px text-white">
            {{$product->price}}
            </strong>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection