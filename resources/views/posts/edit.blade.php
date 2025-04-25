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

    <h1>Editar una publicación</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{old('title', $post->title)}}" required> <br> <br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug', $post->slug)}}" required> <br> <br>

        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{old('category', $post->category)}}" required> <br> <br>
        
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" required>{{old('content', $post->content)}}</textarea> <br> <br>

        <button type="submit" class='cursor-pointer'>Actualizar datos</button>
    </form>
    <a href="{{route('posts.show', $post)}}">Regresar</a>
</x-app-layout>