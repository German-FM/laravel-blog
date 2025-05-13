@foreach ($books as $book)
    <div class="book-card">
        <a href="{{route('books.show', $book)}}">
            {{ $book->titulo }}
        </a>
        <p><strong>Autor:</strong> {{ $book->autor }}</p>
        <p><strong>Año:</strong> {{ $book->fecha }}</p>
    </div>
@endforeach