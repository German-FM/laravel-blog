@section('title') Laravel 12 | Home @endsection
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
    <div class="max-w-4xl mx-auto px-4">
    <h1>Bienvenido a la página principal</h1>
        <x-alert type="info">
            <x-slot name="title">
                ¡Alerta!
            </x-slot>
            Contenido de la alerta aaa
        </x-alert>

        <p>Hola mundo</p>
    </div>
</x-app-layout>
