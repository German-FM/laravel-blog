@section('title') Laravel 12 | Crear @endsection
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

    <h1>Crear una publicación</h1>

    {{ __('Client Closed Request')}}

    @if ($errors->any()) 

    <div class="alert alert-danger">

        <h2><strong>¡Error!</strong> Por favor corrige los siguientes errores:<h2> <br> <br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Título de la publicación" value="{{old('title')}}"required> <br> <br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" placeholder="Slug" value="{{old('slug')}}" required> <br> <br>

        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" placeholder="Categoría de la publicación" value="{{old('category')}}"required> <br> <br>
        
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenido de la publicación" required>{{old('content')}}</textarea> <br> <br>

        <button type="submit" class='cursor-pointer'>Crear Publicación</button>
    </form>
    <a href="{{route('posts.index')}}">Regresar</a>
    </x-app-layout>