@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Almacenar un Producto</h1>
@stop

@section('content')
    <p>Bienvenido la concha de tu hermana.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Producto']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('code', 'Codigo') !!}
                {!! Form::text('code', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Codigo']) !!}

                @error('code')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Precio') !!}
                {!! Form::text('price', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar el precio']) !!}

                @error('price')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('detail', 'Detalle') !!}
                {!! Form::text('detail', NULL, ['class' => 'form-control', 'placeholder' => 'Detalle del Producto']) !!}

                @error('detail')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-center items-center w-full">
                <label  for="image" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                       <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                     <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span    class="font-semibold">Click to upload</span> or drag and drop</p>
                     <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="image" name="image" accept="image/*" type="file">
                </label>
            </div> 

            <div>
                @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Almacenar Producto', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

{{-- @section('js')
    
    //Plugin para asignar automaticamente una Slug a cada categoria
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });
    </script>
@endsection --}}