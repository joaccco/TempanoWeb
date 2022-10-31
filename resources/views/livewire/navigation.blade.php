<nav class="py-2 bg-gradient-to-r from-blue-900 to-blue-300" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16">
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
        <div class="md:flex md:items-center md:gap-12 flex flex-1 ">
              {{-- Logotipo --}}
              <a href="/" class="flex flex-shrink-0">
                <img class="hidden h-28 lg:block" src="/img/logowh.png" alt="Tempano Hielos">
              </a>
              {{-- Menu LG --}}
              <div class="flex h-16 items-center justify-between text-white hidden sm:ml-20 sm:block">
                <div class=" flex space-x-4">
                   <a href="/origen"
                       class=" hover:bg-blue-600 hover:text-blue-200 px-6 py-5 rounded-md hover:border font-black">Origen</a>
                   <a href="/mapa"
                       class="  hover:bg-blue-600 hover:text-white px-3 py-5 rounded-md hover:border font-black">Puntos de Venta</a>
                   {{-- <a href="/productos"
                       class="text-black  hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md font-black">Productos</a> --}}
                   <a href="/posts"
                       class="  hover:bg-blue-600 hover:text-white px-3 py-5 rounded-md hover:border font-black">Posts</a>
                 </div>
              </div>
        </div>
          {{-- Perfil --}}
        @auth
          <div id="z" class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="relative ml-3" x-data="{ open: false }">
              <div>
                <button x-on:click="open = true" type="button" class="flex rounded-full bg-gray-800 text-sm  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                </button>
              </div>
              <div x-show="open" x-on:click.away="open = false" class="absolute right-0 zIndex-[1000] mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Botones de Logueo -->
                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"id="user-menu-item-0">Tu Perfil</a>
                <a href="{{ route('admin.index') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"id="user-menu-item-1">Sistema</a>
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

            <a href="/origen"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Origen</a>

            <a href="/mapa"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Puntos de Venta</a>

            <a href="/posts"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Posts</a>
        </div>
    </div>
</nav>
