<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    $books = Book::all();
    return view('home', compact('books'));
});

Route::get('/books', function () {
    return redirect('/');
});

Route::get('/books/create', function () {
    return view('books.create');
});

Route::post('/books', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'judul_buku' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer|min:1900|max:2100',
        'stok' => 'required|integer|min:0',
    ]);

    Book::create($validated);

    return redirect('/')->with('success', 'Buku berhasil ditambahkan');
});

Route::get('/books/{book}/edit', function (Book $book) {
    return view('books.edit', compact('book'));
});

Route::put('/books/{book}', function (\Illuminate\Http\Request $request, Book $book) {
    $validated = $request->validate([
        'judul_buku' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer|min:1900|max:2100',
        'stok' => 'required|integer|min:0',
    ]);

    $book->update($validated);

    return redirect('/')->with('success', 'Buku berhasil diubah');
});

Route::delete('/books/{book}', function (Book $book) {
    $book->delete();

    return redirect('/')->with('success', 'Buku berhasil dihapus');
});
