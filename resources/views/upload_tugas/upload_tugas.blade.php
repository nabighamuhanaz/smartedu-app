<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMARTEDU</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Custom CSS links -->
  <link href="{{ asset('css/uploadtugas.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbars.css') }}" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50">
  <div class="container">
    <!-- navbar section starts -->
    @include('dashboard.navbar')
    <!-- navbar section ends -->

    <!-- main content starts -->
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

      <div class="content">
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Nama Tugas</th>
                <th>Nama Course</th>
                <th>Link Pengumpulan</th>
                <th>Deadline</th>
                <th>Nilai</th>
                <th>Catatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pengenalan UI/UX</td>
                <td>UI/UX Pemula</td>
                <td>
                  <!-- Tombol untuk membuka modal -->
                  <button id="openModal" class="submit-btn">Submit</button>
                </td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
              <tr>
                <td>Pengenalan HTML dan CSS</td>
                <td>Dasar Pemrograman Web</td>
                <td>
                  <!-- Tombol untuk membuka modal -->
                  <button id="openModal" class="submit-btn">Submit</button>
                </td>
                <td>2 Januari 2024, 23:59</td>
                <td>80</td>
                <td>Very Good!</td>
              </tr>
              <tr>
                <td>Pengenalan Digital Marketing</td>
                <td>Digital Marketing 101</td>
                <td>
                  <!-- Tombol untuk membuka modal -->
                  <button id="openModal" class="submit-btn">Submit</button>
                </td>
                <td>5 Januari 2024, 23:59</td>
                <td>70</td>
                <td>Good!</td>
              </tr>
              <tr>
                <td>Membuat Website Sederhana: HTML & CSS</td>
                <td>Dasar Pemrograman Web</td>
                <td>
                  <!-- Tombol untuk membuka modal -->
                  <button id="openModal" class="submit-btn">Submit</button>
                </td>
                <td>7 Januari 2024, 23:59</td>
                <td>60</td>
                <td>Fair</td>
              </tr>
              <tr>
                <td>Penerapan Desain UI untuk Pemula</td>
                <td>UI/UX Pemula</td>
                <td>
                  <!-- Tombol untuk membuka modal -->
                  <button id="openModal" class="submit-btn">Submit</button>
                </td>
                <td>9 Januari 2024, 23:59</td>
                <td>30</td>
                <td>Poor</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Progress Section -->
        <div class="progress-container">
          <div class="progress-title">Tugas Harian</div>
          <div class="progress-circle">
            <svg height="100" width="100">
              <circle class="background" cx="50" cy="50" r="40" />
              <circle class="circle" cx="50" cy="50" r="40" />
            </svg>
            <div class="percentage">80%</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal di luar tabel -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 class="modal-header">Upload Tugas</h2>
      <form action="{{ route('upload_finpro') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="attachment">Attachment</label>
          <input id="attachment" name="attachment" type="file" />
        </div>

        <div class="form-group">
          <label for="nama-tugas">Nama Tugas</label>
          <input id="nama-tugas" name="nama-tugas" placeholder="Upload file" type="text" />
        </div>

        <div class="form-group">
          <label for="deskripsi-tugas">Deskripsi Tugas</label>
          <textarea id="deskripsi-tugas" name="deskripsi-tugas" placeholder="Deskripsi Tugas"></textarea>
        </div>

        <div class="button-container">
          <button type="submit" class="modal-button">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer Section -->
  @include('dashboard.footer')
  <!-- Footer Section Ends -->

  <script>
    $(document).ready(function() {
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    });
    // Ambil elemen modal dan tombol
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal");
    var span = document.getElementsByClassName("close")[0];

    // Ketika tombol diklik, tampilkan modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // Ketika pengguna klik tombol 'X', sembunyikan modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // Ketika pengguna klik di luar modal, sembunyikan modal
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>