@foreach ($books as $book)
    <div class="card book-card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('books.show', $book) }}" class="book-link">
                    {{ $book->titulo }}
                </a>
            </h5>
            <p class="card-text"><strong>Autor:</strong> {{ $book->autor }}</p>
            <p class="card-text"><strong>Año:</strong> {{ $book->fecha }}</p>
        </div>
    </div>
@endforeach

<style>
    body {
        background-color: #CAD5E2;
    }
    .book-card {
        margin: 15px 0;
        border: none;
        border-left: 6px solid #1F49E0;
        border-radius: 10px;
        transition: transform 0.2s ease-in-out;
    }
    .book-card:hover {
        transform: scale(1.02);
        box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
    }
    .book-link {
        color: #0E2167;
        text-decoration: none;
        font-weight: bold;
    }
    .book-link:hover {
        color: #1F49E0;
        text-decoration: underline;
    }
</style>