<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTEDU</title>
    <style>
        .sidebar-nav a.active i {
            color: orange; /* Warna biru untuk ikon aktif */
        }

        .sidebar-nav a.active span {
            color: orange; /* Warna biru untuk teks aktif */
        }

        .sidebar-nav a {
            text-decoration: none;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .sidebar-nav a i {
            margin-right: 10px;
        }

        .sidebar-nav a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- Menu Toggle (Hamburger Icon) -->
        <div id="menu-toggle">
            <i class="fas fa-bars"></i> <!-- Icon hamburger -->
        </div>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-nav">
                <div class="sidebar-brand">
                    <span>SmartEdu</span>
                </div>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home-alt nav-icon"></i>
                    <span>Beranda</span>
                </a>
                <a href="{{ route('chat') }}" class="{{ request()->routeIs('chat') ? 'active' : '' }}">
                    <i class="fas fa-envelope nav-icon"></i>
                    <span>Pesan</span>
                </a>
                <a href="{{ route('kursus-saya') }}" class="{{ request()->routeIs('kursus-saya') ? 'active' : '' }}">
                    <i class="fas fa-book nav-icon"></i>
                    <span>Kursus Saya</span>
                </a>
                <a href="{{ route('upload-tugas') }}" class="{{ request()->routeIs('upload-tugas') ? 'active' : '' }}">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                    <span>Nilai Saya</span>
                </a>
                <hr />
                <a href="#" class="{{ request()->routeIs('pengaturan') ? 'active' : '' }}">
                    <i class="fas fa-cog settings-icon"></i>
                    <span>Pengaturan</span>
                </a>
                <a href="#" id="logout" class="{{ request()->routeIs('logout') ? 'active' : '' }}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
                
            </div>
        </div>
    </div>
    <script>
        // JavaScript untuk toggle sidebar
        const menuToggle = document.getElementById('menu-toggle');
        const sidebarWrapper = document.getElementById('sidebar-wrapper');
        
        menuToggle.addEventListener('click', function() {
            sidebarWrapper.classList.toggle('toggled');
            menuToggle.classList.toggle('toggled');
        });
    </script>
</body>
</html>
