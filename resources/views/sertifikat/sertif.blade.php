<html>
 <head>
  <title>
   Sertifikat Penghargaan
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;family=Great+Vibes&amp;display=swap" rel="stylesheet"/>
  
  <!-- custom css link -->
  <link href="{{ asset('css/sertif.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbar2.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/searchbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
 </head>

 <body>
    <!-- navbar section starts -->
    @include('detail_course.navbar')
    <!-- navbar section ends -->

    <!-- searchbar section starts -->
    @include('detail_course.searchbar')
    <!-- searchbar section ends -->
  {{-- <div class="header">
   <div class="logo">
    <i class="fas fa-plus-circle">
    </i>
    <span>
     SMARTEDU
    </span>
   </div>
   <div class="search">
    <input placeholder="Cari.." type="text"/>
   </div>
   <div class="user">
    <img alt="User profile picture" height="40" src="https://storage.googleapis.com/a1aa/image/ksiPU5fGMsQdGiQgqWUeYvhManyN68HK5ihROdRZeq0nh3nnA.jpg" width="40"/>
    <span>
     Halo, Nabigha
    </span>
   </div>
  </div> --}}
  <div class="container">
   <div class="certificate">
    <img alt="Certificate with gold and black design, text: SERTIFIKAT PENGHARGAAN, Diberikan kepada: Olivia Wilson, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Samira Hadid Ketua Panitia, Benjamin Shah Pemateri" height="400" src="https://storage.googleapis.com/a1aa/image/hS7hQThHUV4JLNm7EGxnKjnFn5lMaP2CdXDYJrPmVoXM8e5JA.jpg" width="800"/>
   </div>
   <div class="download-button">
    <button>
     Unduh
    </button>
   </div>
  </div>
  {{-- <div class="footer">
   <div class="left">
    <strong>
     SMARTEDU
    </strong>
    <br/>
    Platform terdepan untuk membantu siswa mengembangkan keterampilan mereka di bawah instruktur terbaik dan membangun karier dari mana saja di seluruh dunia
   </div>
   <div class="right">
    <div>
     <a href="#">
      Dashboard
     </a>
     <a href="#">
      Kursus Saya
     </a>
     <a href="#">
      Pesan
     </a>
    </div>
    <div>
     <a href="#">
      Nilai Saya
     </a>
     <a href="#">
      Kalender
     </a>
    </div>
   </div>
  </div> --}}

  <!-- footer section starts -->
  @include('dashboard.footer')
  <!-- footer section ends -->
 </body>
</html>
