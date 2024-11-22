<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <!-- custom css link -->
    <link href="{{ asset('css/video.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/searchbar2.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- searchbar section starts -->
    @include('detail_course.searchbar')
    <!-- searchbar section ends -->

    <div class="container">
        <div class="sidebar">
            <div class="back-button">
                <a href="{{ route('kursus-saya') }}" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="#">
                        <strong class="bold-blue-text">Statistik</strong>
                    </a>
                    <div class="progress-bar">
                        <div class="progress" style="width: 20%;"></div>
                        <span class="progress-text">20%</span>
                    </div>
                    <p class="progress-desc">4 dari 20 video telah selesai</p>
                </li>
                <li><a class="active" href="#"><span class="bold-blue-text">Intro</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Perkenalan UI/UX</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Instalasi</span></a></li>

                <li><a class="active" href="#"><span class="bold-blue-text">Sejarah UI/UX Design</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Instalasi Tools</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Basic Pengunaan Tools</span></a></li>

                <li><a class="active" href="#"><span class="bold-blue-text">Dasar UI/UX</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Tentang UI/UX</span></a></li>
                <li><a href="#"><i class="fas fa-play-circle"></i><span>Menjalankan Tools UI/UX</span></a></li>
            </ul>
        </div>
    </div>

    <div class="video-section-container">
        <div class="video-section-content">
            <img alt="Video thumbnail with a person standing in front of a green board" height="550" src="https://storage.googleapis.com/a1aa/image/M2HReXH1eFmeXo3X5Dt8pIVlzISc82FVbUl99yeJMjtjamfdC.jpg" width="800" />
            <h2>Sejarah UI/UX Design</h2>
            <p>Sejarah UI-UX Design Dimulai Dengan Perkembangan Teknologi Dan Kebutuhan Akan Interface Yang Lebih Ramah Pengguna.</p>
        </div>
    </div>

    <!-- footer section starts -->
    <!-- <div class="footer-container">
        @include('dashboard.footer')
        footer section ends -->

</body>

</html>