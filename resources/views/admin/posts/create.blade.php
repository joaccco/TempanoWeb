@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <h1>Hielos TEMPANO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('title', 'Nombre:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Slug del post', 'readonly']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categria') !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
    //Plugin para asignar automaticamente una Slug a cada categoria
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });
    </script>
@endsection