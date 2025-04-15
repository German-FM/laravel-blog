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
    <a href="/posts">Regresar</a>
   
    <h1>{{$post->title}}</h1>

    <p>
        <b>Categoría:</b> {{$post->category}}
    </p>

    <p>
        <b>Contenido:</b> {{$post->content}}   
    </p>

    <a href="/posts/{{$post->id}}/edit">Editar</a>

</x-app-layout>