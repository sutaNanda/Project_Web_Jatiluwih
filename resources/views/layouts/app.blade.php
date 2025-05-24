<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav.navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        .sidebar {
            position: fixed;
            top: 56px; 
            left: 0;
            bottom: 0;
            width: 16.6667%; 
            background-color: #f8f9fa; 
            overflow-y: auto;
            padding-top: 1rem;
        }

        .content {
            margin-top: 56px; 
            margin-left: 16.6667%;
            padding: 1.5rem;
        }

        .sidebar ul.nav {
            max-height: calc(100vh - 56px - 2rem);
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3498db;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/img/logo.png" alt="Logo" style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover; margin-right: 8px;">
                Admin Dashboard
            </a>
            
            <div class="d-flex ms-3">
                <button class="btn btn-outline-light me-2 rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">📩</button>
                <button class="btn btn-outline-light me-2 rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">🔔</button>
                <button class="btn btn-light rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">👤</button>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <h4 class="px-3">Dashboard</h4>
        <ul class="nav flex-column px-3">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}">
                    <img src="{{ asset('images/circular-ring.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/data-wisata') ? 'active' : '' }}" href="{{ url('admin/data-wisata') }}">
                    <img src="{{ asset('images/maps-and-flags.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Data Wisata
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/galeri-wisata') ? 'active' : '' }}" href="{{ url('admin/galeri-wisata') }}">
                    <img src="{{ asset('images/image-galery.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Galeri Wisata
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/data-booking') ? 'active' : '' }}" href="{{ url('admin/data-booking') }}">
                    <img src="{{ asset('images/register (1).png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Data Booking
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/laporan') ? 'active' : '' }}" href="{{ url('admin/laporan') }}">
                    <img src="{{ asset('images/bar-chart.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Laporan
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/profil-desa') ? 'active' : '' }}" href="{{ url('admin/profil-desa') }}">
                    <img src="{{ asset('images/user.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Profil Desa
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/kelola-admin') ? 'active' : '' }}" href="{{ url('admin/kelola-admin') }}">
                    <img src="{{ asset('images/management.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Kelola Admin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{ url('logout') }}">
                    <img src="{{ asset('images/logout.png') }}" alt="logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
