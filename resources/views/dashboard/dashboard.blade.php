<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartEdu Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
</head>

<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar Kiri -->
        <div class="sidebar">
            <div class="logo">
                <div class="logo-icon">+</div>
                <div class="logo-text">SMARTEDU</div>
            </div>
            <nav class="nav">
                <a href="#" class="nav-link active">
                    <i class="fas fa-tachometer-alt nav-icon"></i> Dashboard
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope nav-icon"></i> Pesan
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-book nav-icon"></i> Kursus Saya
                </a>
                <a href="#" class="nav-link">
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

        <!-- Konten Utama -->
        <div class="main-content">
            <div class="header">
                <input type="text" class="search-input" placeholder="Search your course here..." />
                <div class="profile">
                    <div class="profile-info">
                        <h2 class="profile-name">Nabigha Muhana Zayyan</h2>
                        <p class="profile-username">@NabighaMZ</p>
                    </div>
                    <img src="https://storage.googleapis.com/a1aa/image/ljzrMZaZmnInM1hfnuWSaUfLdZeeykKcTaefmfEexfgz2cLbnA.jpg" alt="Profile picture" class="profile-picture" />
                </div>
            </div>

            <!-- Content goes here -->
            <div class="grid">
                <div class="welcome-card">
                    <h2 class="welcome-title">Halo, Nabigha!</h2>
                    <p class="welcome-message">Kami merindukanmu! Lihat apa yang baru dan lebih baik di dashboard kamu</p>
                    <button class="explore-button">Jelajahi Lebih Banyak Kursus</button>
                </div>
                <div class="progress-card">
                    <h2 class="progress-title">KEMAJUAN</h2>
                    <div class="progress-circle">
                        <span class="progress-percentage">80%</span>
                    </div>
                    <p class="progress-message">Progressmu luar biasa, terus semangat! Sisa 20% lagi, dan kamu sampai!</p>
                </div>
            </div>

            <div class="stats">
                <div class="stat-item">
                    <i class="fas fa-book"></i>
                    <div>
                        <h2 class="stat-title">Kursus yang Terdaftar</h2>
                        <p class="stat-value">4 Kursus</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-tasks"></i>
                    <div>
                        <h2 class="stat-title">Tugas yang sedang berjalan</h2>
                        <p class="stat-value">15 Tugas</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-check"></i>
                    <div>
                        <h2 class="stat-title">Tugas yang telah selesai</h2>
                        <p class="stat-value">55 Tugas</p>
                    </div>
                </div>
            </div>

            <div class="activity-card">
                <h2 class="activity-title">Aktivitas Belajar</h2>
                <div class="activity-list">
                    <div class="activity-item">
                        <img alt="Image for Dasar Pemrograman Web" class="activity-image" src="https://storage.googleapis.com/a1aa/image/mnv0Go8ucqLJCJ084ceeOrHLrczaDSG2keH0UdUBXirtcLbnA.jpg" />
                        <div>
                            <h3 class="activity-name">Dasar Pemrograman Web</h3>
                            <p class="activity-description">Materi pembelajaran mengenai pembuatan website ...</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 20%;"></div>
                            </div>
                            <a class="continue-link" href="#">Lanjutkan</a>
                        </div>
                    </div>

                    <div class="activity-item">
                        <img alt="Image for Dasar Pemrograman Web" class="activity-image" src="https://storage.googleapis.com/a1aa/image/mnv0Go8ucqLJCJ084ceeOrHLrczaDSG2keH0UdUBXirtcLbnA.jpg" />
                        <div>
                            <h3 class="activity-name">Dasar Pemrograman Web</h3>
                            <p class="activity-description">Materi pembelajaran mengenai pembuatan website ...</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 20%;"></div>
                            </div>
                            <a class="continue-link" href="#">Lanjutkan</a>
                        </div>
                    </div>

                    <div class="activity-item">
                        <img alt="Image for Dasar Pemrograman Web" class="activity-image" src="https://storage.googleapis.com/a1aa/image/mnv0Go8ucqLJCJ084ceeOrHLrczaDSG2keH0UdUBXirtcLbnA.jpg" />
                        <div>
                            <h3 class="activity-name">Dasar Pemrograman Web</h3>
                            <p class="activity-description">Materi pembelajaran mengenai pembuatan website ...</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 20%;"></div>
                            </div>
                            <a class="continue-link" href="#">Lanjutkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Kanan -->
        <div class="right-sidebar">
            <div class="profile-card">
                <div class="profile">
                    <img alt="Profile picture of Nabigha Muhana Zayyan" class="profile-pic" src="https://storage.googleapis.com/a1aa/image/ljzrMZaZmnInM1hfnuWSaUfLdZeeykKcTaefmfEexfgz2cLbnA.jpg" />
                    <div>
                        <h2 class="profile-name">Nabigha Muhana Zayyan</h2>
                        <p class="profile-username">@NabighaMZ</p>
                    </div>
                </div>
                <div class="notifications">
                    <i class="fas fa-envelope"></i>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-cog"></i>
                </div>
            </div>

            <div class="calendar-card">
                <h2 class="calendar-title">Oktober 2024</h2>
                <div class="calendar-grid">
                    <div>M</div>
                    <div>S</div>
                    <div>S</div>
                    <div>R</div>
                    <div>K</div>
                    <div>J</div>
                    <div>S</div>
                    @for ($day = 1; $day <= 31; $day++)
                        <div>{{ $day }}
                </div>
                @endfor
            </div>
        </div>

        <div class="stats-card">
            <h2 class="stats-title">STATISTIK STUDI</h2>
            <div class="stats-bar">
                <div class="bar" style="height: 4rem;"></div>
                <div class="bar" style="height: 5rem;"></div>
                <div class="bar" style="height: 6rem;"></div>
                <div class="bar" style="height: 3rem;"></div>
                <div class="bar" style="height: 2rem;"></div>
            </div>
            <div class="days">
                <div>SENIN</div>
                <div>SELASA</div>
                <div>RABU</div>
                <div>KAMIS</div>
                <div>JUMAT</div>
            </div>
        </div>
    </div>
</body>

</html>