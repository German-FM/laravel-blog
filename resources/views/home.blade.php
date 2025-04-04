@section('title') Laravel 12 | Home @endsection

<x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
    <h1>Bienvenido a la página principal</h1>
        <x-alert type="info">
            <x-slot name="title">
                ¡Alerta!
            </x-slot>
            Contenido de la alerta
        </x-alert>

        <p>Hola mundo</p>
    </div>
</x-app-layout>
