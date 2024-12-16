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

    <!-- main section ends -->
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
      <div class="content">
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Nama Tugas</th>
                <th>Link Tugas</th>
                <th>Deadline</th>
                <th>Nilai</th>
                <th>Catatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tugas 1</td>
                <td>
                  <form action="{{ route('upload_finpro') }}" method="GET">
                    <button type="submit" class="submit-btn">Submit</button>
                  </form>
                </td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
              <tr>
                <td>Tugas 2</td>
                <td>
                  <form action="{{ route('upload_finpro') }}" method="GET">
                    <button type="submit" class="submit-btn">Submit</button>
                  </form>
                </td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
              <tr>
                <td>Tugas 3</td>
                <td>
                  <form action="{{ route('upload_finpro') }}" method="GET">
                    <button type="submit" class="submit-btn">Submit</button>
                  </form>
                </td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
              <tr>
                <td>Tugas 4</td>
                <td><button class="submit-btn">Submit</button></td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
              <tr>
                <td>Tugas 5</td>
                <td><button class="submit-btn">Submit</button></td>
                <td>1 Januari 2024, 23:59</td>
                <td>100</td>
                <td>Excellent!</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Assignment Table Section Ends -->
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
        <!-- Progress Section Ends -->
      </div>
      <!-- Content Section Ends -->
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
  </script>
</body>

</html>