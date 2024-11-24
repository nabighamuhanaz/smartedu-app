<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <!-- custom css link -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" />

</head>

<body class="bg-gray-50">
    <div class="container">
        <!-- navbar section starts -->
        @include('dashboard.navbar')
        <!-- navbar section ends -->

        <!-- main section starts -->
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
                            <p class="activity-description">Materi pembelajaran mengenai pembuatanya situs web</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 20%;"></div>
                                <!-- Teks progress  -->
                                <div class="progress-text">20%</div>
                            </div>
                            <a class="continue-link bg-blue-600" href="#">Lanjutkan</a>
                        </div>
                    </div>

                    <div class="activity-item">
                        <img alt="Image for Dasar Pemrograman Web" class="activity-image" src="https://storage.googleapis.com/a1aa/image/mnv0Go8ucqLJCJ084ceeOrHLrczaDSG2keH0UdUBXirtcLbnA.jpg" />
                        <div>
                            <h3 class="activity-name">Digital Marketing 101</h3>
                            <p class="activity-description">Materi mengenai strategi dan konsep marketing pemula</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 100%;"></div>
                                <!-- Teks progress  -->
                                <div class="progress-text" style="color: #FFFFFF;">100%</div>
                            </div>
                            <a class="continue-link bg-blue-600" href="{{ route('sertifikat') }}">Sertifikat</a>
                        </div>
                    </div>

                    <div class="activity-item">
                        <img alt="Image for Dasar Pemrograman Web" class="activity-image" src="https://storage.googleapis.com/a1aa/image/mnv0Go8ucqLJCJ084ceeOrHLrczaDSG2keH0UdUBXirtcLbnA.jpg" />
                        <div>
                            <h3 class="activity-name">UI/UX Pemula</h3>
                            <p class="activity-description">Dasar-dasar teori dan praktik tentang dunia ui/ux design</p>
                        </div>
                        <div class="activity-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 90%;"></div>
                                <!-- Teks progress  -->
                                <div class="progress-text" style="color: #FFFFFF;">90%</div>
                            </div>
                            <a class="continue-link bg-blue-600" href="#">Lanjutkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main section ends -->

        <!-- profile section starts  -->
        @include('dashboard.profile')
        <!-- profile section ends  -->
    </div>

    <!-- footer section starts -->
    @include('dashboard.footer')
    <!-- footer section ends -->

</body>

</html>