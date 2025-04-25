@section('title') Laravel 12 | Posts @endsection
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

    <header></header>

    <h1>Aqui se visualizan todas las publicaciones</h1>

    <a href="{{route('posts.create')}}">Crear Publicación</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}

    <footer> <a href="/">Regresar</a> </footer>
    
</x-app-layout>