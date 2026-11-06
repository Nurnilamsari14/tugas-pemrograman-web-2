<x-layouts.app title="Beranda Perpustakaan">

    <div style="background: white; padding: 50px 30px; border-radius: 12px; text-align: center; margin-top: 30px;">

        <h1 style="color: #1e40af; margin-bottom: 20px;">
            Selamat Datang di Perpustakaan Digital
        </h1>

        <p style="color: #64748b; font-size: 16px; line-height: 1.8; margin-bottom: 30px;">
            Aplikasi ini digunakan untuk mengelola data buku perpustakaan
            dengan mudah, cepat, dan praktis.
            Silakan pilih menu di bawah ini untuk memulai.
        </p>

        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">

            <a href="/books"
                style="background: #2563eb; color: white; padding: 13px 24px; text-decoration: none; border-radius: 7px; font-weight: bold;">
                Lihat Daftar Buku
            </a>

            <a href="/books/create"
                style="background: #16a34a; color: white; padding: 13px 24px; text-decoration: none; border-radius: 7px; font-weight: bold;">
                + Tambah Buku
            </a>

        </div>

    </div>

</x-layouts.app>
