<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0 0%, #fff5f8 100%);
            font-family: 'Poppins', sans-serif;
            color: #3d0a1a;
        }

        .navbar {
            background: linear-gradient(90deg, #ff80ab, #ffb6c1);
            box-shadow: 0 3px 10px rgba(255, 105, 180, 0.3);
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }

        .navbar .btn {
            background-color: white;
            color: #d63384;
            border: none;
            transition: 0.3s;
        }

        .navbar .btn:hover {
            background-color: #ffc1d9;
            color: #9d174d;
        }

        h1, h3 {
            font-weight: 700;
            color: #d63384;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 8px 25px rgba(255, 105, 180, 0.15);
        }

        table {
            border-radius: 0.75rem;
            overflow: hidden;
        }

        thead {
            background-color: #d63384;
            color: white;
        }

        .btn-primary {
            background: linear-gradient(90deg, #ff5c8d, #ff85a1);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #ff3366, #ff5c8d);
        }

        .btn-success {
            background: linear-gradient(90deg, #ff85a1, #ffb6c1);
            border: none;
            color: white;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #ff5c8d, #ff85a1);
        }

        footer {
            background: linear-gradient(90deg, #ff80ab, #ffb6c1);
            color: white;
            box-shadow: 0 -2px 10px rgba(255, 105, 180, 0.25);
        }

        footer p {
            margin: 0;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="py-5">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>