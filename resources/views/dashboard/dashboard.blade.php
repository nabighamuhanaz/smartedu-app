<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/navbars.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Profile picture" class="profile-picture" />
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
                <div class="stat-item-card">
                    <div class="stat-item">
                        <i class="fas fa-book"></i>
                        <div>
                            <h2 class="stat-title">Kursus yang Terdaftar</h2>
                            <p class="stat-value">4 Kursus</p>
                        </div>
                    </div>
                </div>
                <div class="stat-item-card">
                    <div class="stat-item">
                        <i class="fas fa-tasks"></i>
                        <div>
                            <h2 class="stat-title">Tugas sedang berjalan</h2>
                            <p class="stat-value">15 Tugas</p>
                        </div>
                    </div>
                </div>
                <div class="stat-item-card">
                    <div class="stat-item">
                        <i class="fas fa-check"></i>
                        <div>
                            <h2 class="stat-title">Tugas selesai</h2>
                            <p class="stat-value">55 Tugas</p>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="slider">
                <h2 class="activity-title">Program Menarik</h2>
                <div class="image-slider">
                    <div class="image-item">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/954/231/small_2x/green-background-and-wallpaper-free-download-free-vector.jpg" alt="Gambar 1">
                        <div class="image-text">Kelas Figma</div>
                    </div>
                    <div class="image-item">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/954/231/small_2x/green-background-and-wallpaper-free-download-free-vector.jpg" alt="Gambar 2">
                        <div class="image-text">Kelas Canva</div>
                    </div>
                    <div class="image-item">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/954/231/small_2x/green-background-and-wallpaper-free-download-free-vector.jpg" alt="Gambar 3">
                        <div class="image-text">Kelas Python</div>
                    </div>
                    <div class="image-item">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/954/231/small_2x/green-background-and-wallpaper-free-download-free-vector.jpg" alt="Gambar 4">
                        <div class="image-text">Kelas Cyber Security</div>
                    </div>
                    <div class="image-item">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/954/231/small_2x/green-background-and-wallpaper-free-download-free-vector.jpg" alt="Gambar 5">
                        <div class="image-text">Kelas Software Development</div>
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

    <script>
        $(document).ready(function() {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script>

</body>

</html>