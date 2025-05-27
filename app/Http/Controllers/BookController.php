<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $books = Book::query()
            ->when($query, function ($q) use ($query) {
                $q->where('titulo', 'like', "%{$query}%")
                  ->orWhere('autor', 'like', "%{$query}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(12);

        if ($request->ajax()) {
            return view('books.partials.book-cards', compact('books'))->render();
        }

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'titulo' => ['required', 'min:1', 'max:255'],
            'slug' => "required|unique:books,slug",
            'autor' => 'required',
            'editorial' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'n_ejemplar' => 'required',
            'fecha_ingreso' => 'required',
            'observaciones' => 'required',
            'cou' => 'required',
        ]);
        $book = Book::create($request->all());

        session()->flash('success', '¡Adición exitosa!');
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titulo' => ['required', 'min:1', 'max:255'],
            'slug' => "required|unique:books,slug,{$book->id}",
            'autor' => 'required',
            'editorial' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'n_ejemplar' => 'required',
            'fecha_ingreso' => 'required',
            'observaciones' => 'required',
            'cou' => 'required',
        ]);
        $book->update($request->all());

        return redirect()->route('books.edit', $book)->with('success', '¡Actualización exitosa!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        session()->flash('success', 'El libro fue eliminado exitosamente');
        return redirect()->route('books.index');
    }
}

