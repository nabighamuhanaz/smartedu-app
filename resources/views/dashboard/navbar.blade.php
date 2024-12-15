<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="sidebar-nav">
            <a class="sidebar-brand" href="#">
                <span>
                    SMARTEDU
                </span>
            </a>
            <a href="{{ route('dashboard') }}">
                <i class="fas fa-home-alt nav-icon"></i>
                <span>Beranda</span>
            </a>
            <a href="{{ route('chat') }}">
                <i class="fas fa-envelope nav-icon"></i>
                <span>Pesan</span>
            </a>
            <a href="{{ route('kursus-saya') }}">
                <i class="fas fa-book nav-icon"></i>
                <span>Kursus Saya</span>
            </a>
            <a href="{{ route('upload-tugas') }}">
                <i class="fas fa-graduation-cap nav-icon"></i>
                <span>Nilai Saya</span>
            </a>
            <hr />
            <a href="#">
                <i class="fas fa-cog settings-icon"></i>
                <span>Pengaturan</span>
            </a>
            <a href="#">
                <i class="fas fa-sign-out-alt"> </i>
                <span>Keluar Akun</span>
            </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <span href="#menu-toggle" id="menu-toggle">
            &#9776;
        </span>


    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->