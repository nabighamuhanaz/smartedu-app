<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMARTEDU</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- custom css link -->
  <link href="{{ asset('css/sertif.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbars.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50">
  <div class="container">
    <!-- navbar section starts -->
    @include('dashboard.navbar')
    <!-- navbar section ends -->

    <div class="certificate-section-container">
      <div class="certificate-section-content">
        <img alt="Certificate with gold and black design, text: SERTIFIKAT PENGHARGAAN, Diberikan kepada: Olivia Wilson, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Samira Hadid Ketua Panitia, Benjamin Shah Pemateri" height="500" src="https://id.techinasia.com/edu/wp-content/uploads/2019/04/certificate.png" width="500" />
      </div>
      <div class="download-button">
        <button>Unduh</button>
      </div>
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