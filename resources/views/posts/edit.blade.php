@section('title') Laravel 12 | Editar @endsection
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
    <h1>Editar una publicación</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" required> <br> <br>

        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{$post->category}}" required> <br> <br>
        
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" value="{{$post->content}}" required></textarea> <br> <br>

        <button type="submit">Crear Publicación</button>
    </form>
    <a href="/posts">Regresar</a>
</x-app-layout>