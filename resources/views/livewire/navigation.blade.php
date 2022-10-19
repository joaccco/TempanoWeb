<nav class="bg-white " x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
          {{-- Boton Hamburguesa --}}
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16 5 5.25h16.5" />
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
          {{-- Menu y Logotipo --}}
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              {{-- Logotipo --}}
              <a href="/" class="flex flex-shrink-0 items-center">
                <img class="hidden h-12 w-auto lg:block" src="img/Tempanoice.png" alt="Tempano Hielos">
              </a>
              {{-- Menu LG --}}
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                   <a href="/origen"
                       class="text-black hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md font-black">Origen</a>
                   <a href="/mapa"
                       class="fas fa-map text-black  hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md  font-black">Puntos de Venta</a>
                   {{-- <a href="/productos"
                       class="text-black  hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md font-black">Productos</a> --}}
                   <a href="/posts"
                       class="text-black  hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md font-black">Posts</a>
                 </div>
              </div>
        </div>
          {{-- Perfil y Notificaciones --}}
        @auth
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              {{-- Boton de notificacion --}}
            <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-whifocus:ring-offset-2    focus:ring-offset-gray-800">
                  {{-- <span class="sr-only">View notifications</span> --}}
                  <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.96701-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
            <button href="{{ route('admin.home') }}" type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-nofocus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M160 144c-35.3 0-64-28.7-64-64s28.7-64 64-64c15.7 0 30 5.6 41.2 15C21212.4 232.7 0 256 0s43.6 12.4 54.8 31C322 21.6 336.3 16 352 16c35.3 0 64 2864 64s-28.7 64-64 64c-14.7 0-28.3-5-39.1-13.3l-32 48C275.3 187 266 192 2192s-19.3-5-24.9-13.3l-32-48C188.3 139 174.7 144 160 144zM144 352l48.4-2c10.2-5.1 21.6-7.8 33-7.8c19.6 0 38.4 7.8 52.2 21.6l32.5 32.5c6.3 6.3 14.99 23.8 9.9c11.3 0 21.8-5.6 28-15l9.7-14.6-59-66.3c-9.1-10.2-22.2-16.1-35.9-1H235.1c-13.7 0-26.8 5.9-35.9 16.1l-59.9 67.4L144 352zm19.4-95.8c18.2-20.5 3-32.2 71.8-32.2h41.8c27.4 0 53.5 11.7 71.8 32.2l150.2 169c8.5 9.5 13.2 2113.2 34.7c0 28.8-23.4 52.2-52.2 52.2H52.2C23.4 512 0 488.6 0 459.8c0-12.87-25.1 13.2-34.7l150.2-169z"/>
              </svg>
            </button>
                <!-- Perfil -->
            <div class="relative ml-3" x-data="{ open: false }">
              <div>
                <button x-on:click="open = true" type="button" class="flex rounded-full bg-gray-800 text-sm  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                </button>
              </div>
              <div x-show="open" x-on:click.away="open = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Botones de Logueo -->
                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"id="user-menu-item-0">Tu Perfil</a>
                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"id="user-menu-item-1">Sistema</a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf            
                  <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"id="user-menu-item-2" @click.prevent="$root.submit();">Cerrar Sesion</a>
                </form>
              </div>
            </div>
          </div>
           @else
            <div>
              <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SoyUsuario</a>
              <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md text-sm font-medium">Registrarme</a>
            </div>
        @endauth
      </div>
    </div>

    </div>
    </div>

    <!-- Menu movil -->
    <div class="sm:hidden" x-show="open" x-on:click.away="open = false" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Origen</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Donde
                Comprar</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Quiero
                Ser Cliente</a>

            <a href=""
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Chat</a>
        </div>
    </div>
</nav>
