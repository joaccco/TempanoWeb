@extends('layouts.app')
@section('content')
  <div class="z-4">
    <section>
      <div class="bg-black text-white py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
          <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
            <h1 class="text-3xl md:text-5xl p-2 text-blue-600 tracking-loose">Tempano</h1>
            <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Puntos de Venta</h2>
            <p class="text-sm md:text-base text-gray-50 mb-4">Explora los diferentes puntos de venta y contacta al que te quede mas cerca. Luego queda disfrutar de una experiencia refrescante, que esperas?.</p>
            <a href="#map" class="mt-20 bg-transparent hover:bg-blue-800 text-blue-700 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Explorar</a>
          </div>
          <div class="p-8 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
            <div class="h-48 flex flex-wrap content-center">
              <div> 
                <img class="inline-block rounded-3xl hidden xl:block" src="/img/mountains.png">
              </div>
            </div>
          </div>
    </section>
  </div>
    @livewire('map')
@endsection