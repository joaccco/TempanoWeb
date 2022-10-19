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

            <div>
                <label for="image">
                    <span>Upload a file</span>
                    <input id="image" name="image" accept="image/*" type="file">
                </label>

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