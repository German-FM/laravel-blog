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

    <a href="/posts/create">Crear Publicación</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <footer></footer>
    
</x-app-layout>