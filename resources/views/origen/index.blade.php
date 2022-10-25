@extends('layouts.app')
@section('content')
<div class="bg-white">
    <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-y-16 gap-x-8 py-24 px-4 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
      <div>
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Origen</h2>
        <p class="mt-4 text-gray-500">Somos una fabrica de hielo <b>ecologica</b>, nos dedicamos a fabricar hielo rolito. La fabrica se abrio <b>hace 4 Años</b> y la idea partio por el clima subtropical que se posee en <b>Argentina Corrientes</b> (Ciudad en la que se encuentra nuestra fabrica) y las altas temperaturas que alcanza en verano. Nuestro enfoque esta en refrescar tus eventos y acompañarte</p>
  
        <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Productos</dt>
            <dd class="mt-2 mb-2 text-sm text-gray-500">Vendemos el <b>Hielo Rolito</b> en bolsa nuestro inventario de productos alberga 3 tamaños de bolsas <b>2kg - 5kg - 10kg</b>. Siendo la de 5kg la ultima en lanzarse. </dd>
            <a class="bg-blue-800 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg" href="/productos">
              Nuestros Productos
            </a>
          </div>
  
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Produccion</dt>
            <dd class="mt-2 mb-2 text-sm text-gray-500">Utilizamos agua potable de red para la elaboracion del Hielo Rolito. Nuestra planta es Ecologica,  utiliza un motor semihermetico respetuoso con el medio ambiente con la tecnologia ECONOLINE, el cual proporciona capacidad frigorifica con un bajo consumo de energia</dd>
              <a href="/galery" class="bg-blue-800 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">
                Galeria de Imagenes
              </a>
          </div>

          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Puntos de Venta</dt>
            <dd class="mt-2 mb-2 text-sm text-gray-500">Para ver ubicaciones de nuestro punto de venta debes acceder a la pestaña ubiccada en el NavBar, en la cual esta nuestro mapa con informacion de cada uno de los puntos de venta, horarios de atenciom, promociones, y beneficios no te lo pierdas. </dd>
            <a href="/mapa" class="bg-blue-800 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">
              Ver Puntos de Venta
            </a>
          </div>
  
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Tus Eventos</dt>
            <dd class="mt-2 mb-2 text-sm text-gray-500">Estas planeando realizar un evento en Corrientes?, nosotros te podemos ayudar a <b>refrescar</b> las bebidas, solamente nos tenes que contactar. Si necesitas una gran cantidad de Bolsas tenemos una <b>camara movil</b> con equipo de frio y capacidad excelentes</dd>
            <a href="/event" class="bg-blue-800 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 my-1 rounded-lg">
              Rellenar Formulario
            </a>
          </div>
  
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Queres ser Vendedor?</dt>
            <dd class="mt-2 mb-2 text-sm text-gray-500">Si estas interesado en vender nuestros productos, tenemos heladeras de distintas capacidades, solo debemos analizar cual combina mejor con tu local. Rellena el siguiente formulario y estaremos en contacto</dd>
            <a href="/client" class="bg-blue-800 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">
              Rellenar Formulario
            </a>
          </div>
        </dl>
      </div>
      <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
        <img src="/img/camara.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
        <img src="/img/fabrica.jpg" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
        <img src="/img/maquina.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
        <img src="/img/motor.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
      </div>
    </div>
  </div>
  


@endsection