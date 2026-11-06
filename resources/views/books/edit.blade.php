
<x-layouts.app title="Edit Buku">

    <h2 style="margin-bottom: 20px;">Form Edit Buku</h2>

    <form action="/books/{{ $book->id }}" method="POST"
        style="background: white; padding: 25px; border-radius: 8px;">

        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku"
                value="{{ old('judul_buku', $book->judul_buku) }}"
                style="width: 100%; padding: 10px; margin-top: 5px;">
            @error('judul_buku')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Penulis</label>
            <input type="text" name="penulis"
                value="{{ old('penulis', $book->penulis) }}"
                style="width: 100%; padding: 10px; margin-top: 5px;">
            @error('penulis')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Penerbit</label>
            <input type="text" name="penerbit"
                value="{{ old('penerbit', $book->penerbit) }}"
                style="width: 100%; padding: 10px; margin-top: 5px;">
            @error('penerbit')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit"
                value="{{ old('tahun_terbit', $book->tahun_terbit) }}"
                style="width: 100%; padding: 10px; margin-top: 5px;">
            @error('tahun_terbit')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label>Stok</label>
            <input type="number" name="stok"
                value="{{ old('stok', $book->stok) }}"
                style="width: 100%; padding: 10px; margin-top: 5px;">
            @error('stok')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            style="background: #2563eb; color: white; padding: 10px 20px; border: none; cursor: pointer;">
            Simpan Perubahan
        </button>

        <a href="/books"
            style="margin-left: 10px; text-decoration: none;">
            Kembali
        </a>

    </form>

</x-layouts.app>
