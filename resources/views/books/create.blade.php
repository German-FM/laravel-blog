@section('title') Laravel 12 | Crear @endsection

@push('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #007bff;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #218838;
        }

        .form-container a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .alert {
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }

        .alert h2 {
            margin: 0 0 10px;
        }

        .alert ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
@endpush

<x-app-layout>
    <header>
        <h1>Añadir un libro</h1>
    </header>

    @if ($errors->any()) 
        <div class="alert">
            <h2><strong>¡Error!</strong> Por favor corrige los siguientes errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título del libro" value="{{old('titulo')}}" required>

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Slug" value="{{old('slug')}}" required>

            <label for="editorial">Editorial</label>
            <input type="text" name="editorial" id="editorial" placeholder="Editorial" value="{{old('editorial')}}" required>

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" placeholder="Autor" value="{{old('autor')}}" required>

            <label for="fecha_ingreso">Fecha de ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" placeholder="Fecha de ingreso" value="{{old('fecha_ingreso')}}" required>

            <label for="lugar">Lugar</label>
            <input type="text" name="lugar" id="lugar" placeholder="Lugar" value="{{old('lugar')}}" required>

            <label for="fecha">Año</label>
            <input type="number" name="fecha" id="fecha" placeholder="Año" value="{{old('fecha')}}" required>

            <label for="n_ejemplar">N° Ejemplar</label>
            <input type="number" name="n_ejemplar" id="n_ejemplar" placeholder="N° Ejemplar" value="{{old('n_ejemplar')}}" required>

            <label for="observaciones">Observaciones</label>    
            <textarea name="observaciones" id="observaciones" cols="30" rows="10" placeholder="Observaciones del libro" required>{{old('observaciones')}}</textarea>

            <label for="cou">COU</label>
            <input type="text" name="cou" id="cou" placeholder="Cou" value="{{old('cou')}}" required>

            <button type="submit">Crear Libro</button>
        </form>
        <a href="{{route('books.index')}}">Regresar</a>
    </div>
</x-app-layout>