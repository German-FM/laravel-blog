@section('title') Laravel 12 | {{$book->title}} @endsection

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

        .book-details {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .book-details p {
            margin: 10px 0;
            font-size: 16px;
        }

        .book-details p b {
            color: #007bff;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }

        .actions a, .actions button {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .actions a:hover, .actions button:hover {
            background-color: #0056b3;
        }

        .actions button {
            background-color: #dc3545;
        }

        .actions button:hover {
            background-color: #c82333;
        }
    </style>
@endpush

<x-app-layout>
    <header>
        <h1>Detalles del libro</h1>
    </header>

    <div class="book-details">
        <p><b>Titulo:</b> {{$book->titulo}}</p>
        <p><b>Autor:</b> {{$book->autor}}</p>
        <p><b>Editorial:</b> {{$book->editorial}}</p>
        <p><b>Lugar:</b> {{$book->lugar}}</p>
        <p><b>Año:</b> {{$book->fecha}}</p>
        <p><b>Número de Ejemplar:</b> {{$book->n_ejemplar}}</p>
        <p><b>Fecha de Ingreso:</b> {{$book->fecha_ingreso}}</p>
        <p><b>Observaciones:</b> {{$book->observaciones}}</p>
        <p><b>COU:</b> {{$book->cou}}</p>
    </div>

    <div class="actions">
        <a href="{{route('books.index')}}">Regresar</a>
        <a href="{{route('books.edit', $book)}}">Editar</a>
        <form action="{{route('books.destroy', $book)}}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </div>
</x-app-layout>