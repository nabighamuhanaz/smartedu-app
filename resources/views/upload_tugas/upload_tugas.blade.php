<html>
 <head>
  <title>
   SmartEdu
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('css/navbar2.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/uploadtugas.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
    <!-- footer section starts -->
  @include('upload_tugas.navbar')
   <div class="main-content">
    <div class="header">
     <div class="logo">
      SMARTEDU
     </div>
     <div class="search-bar">
      <input placeholder="Cari.." type="text"/>
      <i class="fas fa-search">
      </i>
     </div>
     <div class="user-info">
      <img alt="User profile picture" height="40" src="https://storage.googleapis.com/a1aa/image/EnA7OcZFzapAExGX7ZzQfCNJ0lcj9U2yf3VLDTCosR0GI5zTA.jpg" width="40"/>
      <div class="name">
       Halo, Nabigha
       <span>
        @NabighaMz
       </span>
      </div>
     </div>
    </div>
    <div class="content">
     <div class="table-container">
      <table>
       <thead>
        <tr>
         <th>
          Nama Tugas
         </th>
         <th>
          Link Tugas
         </th>
         <th>
          Deadline
         </th>
         <th>
          Nilai
         </th>
         <th>
          Catatan
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>
          Tugas 1
         </td>
         <td>
          <button class="submit-btn">
           Submit
          </button>
         </td>
         <td>
          1 Januari 2024, 23:59
         </td>
         <td>
          100
         </td>
         <td>
          Excellent!
         </td>
        </tr>
        <tr>
         <td>
          Tugas 1
         </td>
         <td>
          <button class="submit-btn">
           Submit
          </button>
         </td>
         <td>
          1 Januari 2024, 23:59
         </td>
         <td>
          100
         </td>
         <td>
          Excellent!
         </td>
        </tr>
        <tr>
         <td>
          Tugas 1
         </td>
         <td>
          <button class="submit-btn">
           Submit
          </button>
         </td>
         <td>
          1 Januari 2024, 23:59
         </td>
         <td>
          100
         </td>
         <td>
          Excellent!
         </td>
        </tr>
        <tr>
         <td>
          Tugas 1
         </td>
         <td>
          <button class="submit-btn">
           Submit
          </button>
         </td>
         <td>
          1 Januari 2024, 23:59
         </td>
         <td>
          100
         </td>
         <td>
          Excellent!
         </td>
        </tr>
        <tr>
         <td>
          Tugas 1
         </td>
         <td>
          <button class="submit-btn">
           Submit
          </button>
         </td>
         <td>
          1 Januari 2024, 23:59
         </td>
         <td>
          100
         </td>
         <td>
          Excellent!
         </td>
        </tr>
       </tbody>
      </table>
     </div>
     <div class="progress-container">
      <div class="progress-title">
       Tugas Harian
      </div>
      <div class="progress-circle">
       <svg height="100" width="100">
  <circle class="background" cx="50" cy="50" r="40" />
  <circle class="circle" cx="50" cy="50" r="40" />
</svg>
       <div class="percentage">
        80%
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- footer section starts -->
  @include('upload_tugas.footer')
 </body>
</html>
