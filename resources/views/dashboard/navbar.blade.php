<div class="sidebar">
    <div class="logo">
        <div class="logo-icon">+</div>
        <div class="logo-text">SMARTEDU</div>
    </div>
    <nav class="nav">
        <a href="#" class="nav-link active">
            <i class="fas fa-home-alt nav-icon"></i> Dashboard
        </a>
        <a href="{{ route('chat') }}" class="nav-link">
            <i class="fas fa-envelope nav-icon"></i> Pesan
        </a>
        <a href="{{ route('kursus-saya') }}" class="nav-link">
            <i class="fas fa-book nav-icon"></i> Kursus Saya
        </a>
        <a href="{{ route('upload-tugas') }}" class="nav-link">
            <i class="fas fa-graduation-cap nav-icon"></i> Nilai Saya
        </a>
        <a href="#" class="nav-link">
            <i class="fas fa-calendar-alt nav-icon"></i> Kalender
        </a>
    </nav>
    <div class="settings">
        <h2 class="settings-title">SETTINGS</h2>
        <a href="#" class="settings-link">
            <i class="fas fa-cog settings-icon"></i> Pengaturan
        </a>
        <a href="#" class="settings-link logout">
            <i class="fas fa-sign-out-alt settings-icon"></i> Keluar
        </a>
    </div>
</div>
