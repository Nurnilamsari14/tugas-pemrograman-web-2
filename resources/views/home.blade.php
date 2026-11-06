<x-layouts.app title="Beranda Perpustakaan">

    <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 30px;">

        @if (session('success'))
            <div style="background: #16a34a; color: white; padding: 12px 20px; border-radius: 6px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;">
            <h2 style="color: #1e40af; margin: 0;">Daftar Buku Perpustakaan</h2>
            <a href="/books/create"
                style="background: #16a34a; color: white; padding: 10px 20px; text-decoration: none; border-radius: 7px; font-weight: bold;">
                + Tambah Buku
            </a>
        </div>

        <table style="width: 100%; border-collapse: collapse; background: white;">

            <thead>
                <tr style="background: #2563eb; color: white;">
                    <th style="padding: 12px; border: 1px solid #ddd;">No</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Judul Buku</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Penulis</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Penerbit</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Tahun Terbit</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Stok</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                            {{ $loop->iteration }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd;">
                            {{ $book->judul_buku }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd;">
                            {{ $book->penulis }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd;">
                            {{ $book->penerbit }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                            {{ $book->tahun_terbit }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                            {{ $book->stok }}
                        </td>

                        <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">

                            <a href="/books/{{ $book->id }}/edit"
                                style="background: #f59e0b; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 10px;">
                                Edit
                            </a>

                            <form action="/books/{{ $book->id }}" method="POST"
                                style="display: block; margin-top: 10px;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    onclick="return confirm('Apakah kamu yakin ingin menghapus buku ini?')"
                                    style="background: #dc2626; color: white; padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer;">
                                    Hapus
                                </button>

                            </form>

                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="7" style="padding: 15px; text-align: center;">
                            Belum ada data buku.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</x-layouts.app>
