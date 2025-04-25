@section('title') Laravel 12 | {{$post->title}} @endsection
@push('css')
    <style>
        body {
            color: cyan;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            background-color: darkslategray;
        }
    </style>
@endpush
 

<x-app-layout>
    <a href="{{route('posts.index')}}">Regresar</a>
   
    <h1>{{$post->title}}</h1>

    <p>
        <b>Categoría:</b> {{$post->category}}
    </p>

    <p>
        <b>Contenido:</b> {{$post->content}}   
    </p>

    <a href="{{route('posts.edit', $post)}}">Editar</a>
    <form action="{{route('posts.destroy', $post)}}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="cursor-pointer">Eliminar</button>

</x-app-layout>