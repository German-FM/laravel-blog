@section('title') Laravel 12 | Books Store @endsection

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
            position: relative;
        }

        h1 {
            margin: 0;
            color: white;
        }

        .search-bar {
            margin-top: 10px;
        }

        .search-bar input {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-icon {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        .login-icon:hover {
            color: #ccc;
        }

        .store-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .book-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 200px;
            padding: 15px;
            text-align: center;
        }

        .book-card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .book-card a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
        }

        .add-book-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #28a745;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-book-btn:hover {
            background-color: #218838;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('search-input');
            const booksContainer = document.getElementById('books-container');

            let timeout = null;

            searchInput.addEventListener('input', () => {
                clearTimeout(timeout);

                timeout = setTimeout(() => {
                    const query = searchInput.value;

                    fetch(`{{ route('books.index') }}?search=${query}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        booksContainer.innerHTML = html;
                    })
                    .catch(error => console.error('Error fetching books:', error));
                }, 300); // Debounce for 300ms
            });
        });
    </script>
@endpush

<x-app-layout>

    <header>
        <h1>Biblioteca</h1>
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Buscar libros por título o autor...">
        </div>
        <a href="" class="login-icon">
            <i class="fas fa-user-circle"></i>
        </a>
    </header>

    <a href="{{route('books.create')}}" class="add-book-btn">Añadir un libro</a>

    <div class="store-container" id="books-container">
        @foreach ($books as $book)
            <div class="book-card">
                <a href="{{route('books.show', $book)}}">
                    {{ $book->titulo }}
                </a>
                <p><strong>Autor:</strong> {{ $book->autor }}</p>
                <p><strong>Año:</strong> {{ $book->fecha }}</p>
            </div>
        @endforeach
    </div>

    {{ $books->links() }}

    <footer>
        <a href="/" style="color: white;">Regresar</a>
    </footer>

</x-app-layout>
