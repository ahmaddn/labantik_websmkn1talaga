<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMKN 1 Talaga')</title>
    <link rel="icon" href="https://pkl.techiraidn.com/storage/files/superadmin-1709033122-631428938.png" type="image/x-icon">

    <link href="delivr.net/nhttps://cdn.jspm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Hover Effect */
        .navbar-nav .nav-link {
            position: relative;
            font-weight: 500;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #fff;
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .navbar-nav .nav-link:hover {
            color: #e3f2fd;
        }

        .navbar-brand {
            font-size: 1.25rem;
        }
    </style>
    @stack('styles')

    <style>
        body {
            background: linear-gradient(to right, #0d47a1, #1976d2);
            color: #fff;
        }

        .auth-card {
            background-color: #fff;
            color: #000;
        }


        .custom-carousel-icon {
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            padding: 10px;
            border-radius: 50%;
            /* Membuat ikon bulat */
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Transisi halus */
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* Efek hover dengan sedikit perbesaran dan perubahan warna latar */
        .custom-carousel-icon:hover {
            background-color: rgba(255, 255, 255, 0.3);
            /* Efek hover dengan latar putih transparan */
            transform: scale(1.1);
            /* Sedikit membesar saat hover */
        }

        /* Untuk button kontrol carousel yang lebih besar */
        .carousel-control-prev,
        .carousel-control-next {
            border: none;
            outline: none;
        }

        /* Menambahkan background gambar untuk carousel items */
        .carousel-item {
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        /* Overlay hitam transparan agar teks lebih mudah dibaca */
        .carousel-item>.d-flex {
            background-color: rgba(0, 0, 0, 0.5);
            /* Latar belakang hitam transparan */
            height: 100%;
            /* Agar overlay memenuhi seluruh slide */
        }

        .carousel-control-prev,
        .carousel-control-next {
            border: none;
            outline: none;
        }

        .custom-carousel-icon {
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Transisi halus */
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .custom-carousel-icon:hover {
            background-color: rgba(255, 255, 255, 0.3);
            /* Efek hover dengan latar putih transparan */
            transform: scale(1.1);
            /* Sedikit membesar saat hover */
        }

        /* Custom carousel indicators (bullets) */
        .carousel-indicators button {
            background-color: #ffffff;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .carousel-indicators button.active {
            background-color: #1976d2;
            opacity: 1;
        }

        .carousel-indicators button:hover {
            opacity: 1;
        }
    </style>

</head>

<body>

    @include('partials.navbar')

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>