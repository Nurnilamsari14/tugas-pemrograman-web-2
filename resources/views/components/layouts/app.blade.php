<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Sistem Pendataan Buku Perpustakaan' }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #2563eb;
            color: white;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        main {
            padding-top: 35px;
            padding-bottom: 35px;
            min-height: 75vh;
        }

        footer {
            background: #1e40af;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <h2>Perpustakaan Digital</h2>
            <p>Sistem Pendataan Buku Perpustakaan</p>
        </div>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; 2026 Sistem Pendataan Buku Perpustakaan</p>
    </footer>

</body>
</html>