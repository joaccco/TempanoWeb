@extends('layouts.app')
@section('content')
  <div>
    <section>
      <div class="bg-black text-white py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
          <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
            <h1 class="text-3xl md:text-5xl p-2 text-blue-600 tracking-loose">Tempano</h1>
            <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Puntos de Venta
            </h2>
            <p class="text-sm md:text-base text-gray-50 mb-4">Explora los diferentes puntos de venta y contacta al que te quede mas cerca. Luego queda disfrutar de una experiencia refrescante, que esperas?.</p>
            <a href="#"
              class="mt-20 bg-transparent hover:bg-yellow-300 text-blue-700 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">
              Explorar</a>
          </div>
          <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
            <div class="h-48 flex flex-wrap content-center">
              <div>
                <img class="inline-block mt-28 hidden xl:block" src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"></div>
                <div>
                  <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"></div>
                  <div>
                    <img class="inline-block mt-28 hidden lg:block" src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
                  </div>
                </div>
              </div>
            </div>
    </section>

    <div id="map" style=" height: 730px ">
      Puntos de venta
    </div>
    <script src="main.js"> </script>
  </div>
@endsection