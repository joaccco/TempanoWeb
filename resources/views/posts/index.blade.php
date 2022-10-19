@extends('layouts.app')
@section('content')
<div class="container py-8">
       
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">

      @foreach ($posts as $post)
          <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif " {{-- style="background-image: url({{Storage::url ($post->image->url)}})" --}}>
             <div class="w-full h-full px-8 flex floex-col justify-center">
              
              <div>
                  @foreach ($post->tags as $tag)
                      <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-black rounded-full">{{$tag->name}}</a>
                  @endforeach
              </div>
              
              <h1 class="text 4x1 text-black font-italic">
                  <a href="{{route('posts.show', $post)}}">
                      {{$post->title}}
                  </a>
              </h1>

             </div>
          </article>
      @endforeach
  </div>

  <div class="m-4">
      {{$posts->links()}}

  </div>

</div>
@endsection