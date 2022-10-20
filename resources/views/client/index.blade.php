@extends('layouts.app')
@section('content')
  <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<section class="mt-10 relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="mt-10 w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mt-10 mx-auto max-w-lg text-center">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline">Se parte de la familia</span>
        <span class="block text-blue-600 xl:inline">Tempano</span>
      </h1>

      <p class="mt-4 text-gray-500">
       Forma parte de nuestra familia y empeza a vender nuestros productos.
      </p>
    </div>

    <form action="" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
      <div>
        <label for="email" class="sr-only">Email</label>

        <div class="relative">
          <input
            type="email"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Enter email"
          />

          <span class="absolute inset-y-0 right-4 inline-flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
              />
            </svg>
          </span>
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Password</label>
        <div class="relative">
          <input
            type="password"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
            placeholder="Enter password"
          />

          <span class="absolute inset-y-0 right-4 inline-flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
              />
            </svg>
          </span>
        </div>
      </div>

      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500">
          No account?
          <a href="#" class="underline">Sign up</a>
        </p>

        <button type="submit" class="bg-blue-600 hover:bg-blue-900 text-white text-sm leading-6 font-medium py-2 px-3 my-1 rounded-lg">
         Enviar
        </button>
      </div>
    </form>
  </div>

  <div class="relative h-1/5 w-full sm:h-96 lg:h-1/5 lg:w-1/2">
    <img
      alt="Welcome"
      src="/img/ice.webp"
      class="  h-full w-full object-cover"
    />
  </div>
</section>

@endsection