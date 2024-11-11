<html>
 <head>
  <title>
   SMARTEDU - UI/UX Pemula
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Arial', sans-serif;
            background-color: #F5F7FA;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            background-color: #fff; /* White background */
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo img {
            width: 30px; /* Smaller logo size */
            height: 30px; /* Smaller logo size */
            background-color: #FFD700; /* Yellow background */
            border-radius: 50%; /* Make it circular */
        }
        .header .logo span {
            font-size: 18px; /* Smaller text size */
            font-weight: bold;
            margin-left: 10px;
            background: linear-gradient(to right, #FFD700, #808080);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header .search-bar {
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }
        .header .search-bar input {
            width: 80%; /* Reduce width */
            padding: 10px 10px 10px 30px; /* Add padding for icon */
            border-radius: 20px;
            border: 1px solid #ccc;
            background-color: #F0F0F0; /* Lighter grey background */
            color: #333; /* Dark text */
        }
        .header .search-bar .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #333; /* Dark color for the icon */
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .user-info span {
            font-size: 16px;
        }
        .sidebar {
            width: 60px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .sidebar a {
            margin: 20px 0;
            color: #333;
            font-size: 24px;
            text-decoration: none;
        }
        .sidebar a .fa-calendar {
            color: #FFD700; /* Yellow color for the calendar icon */
        }
        .content {
            margin-left: 80px;
            padding: 20px;
        }
        .content h1 {
            font-size: 32px;
            font-weight: bold;
        }
        .content p {
            color: #666;
        }
        .chapter {
            margin: 20px 0;
        }
        .chapter h2 {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .chapter h2 i {
            margin-right: 10px;
        }
        .chapter .card-container {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Reduce gap between cards */
        }
        .chapter .card {
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 10px 0;
            padding: 10px;
            width: 250px; /* Increase width */
            height: 200px; /* Reduce height */
            border-left: 5px solid #FFD700; /* Gold border */
        }
        .chapter .card img {
            width: 100%; /* Full width */
            height: 100px; /* Maintain height */
            border-radius: 10px;
            margin-bottom: 10px; /* Add margin below image */
        }
        .chapter .card .info {
            text-align: left; /* Left align text */
            width: 100%; /* Full width */
        }
        .chapter .card .info h3 {
            font-size: 16px; /* Reduce font size */
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        .chapter .card .info p {
            color: #666;
            margin: 5px 0;
        }
        .chapter .card .info .author {
            display: flex;
            align-items: center;
        }
        .chapter .card .info .author img {
            width: 25px; /* Reduce author image size */
            height: 25px; /* Reduce author image size */
            border-radius: 50%;
            margin-right: 10px;
        }
        .chapter .card .info .author span {
            font-size: 12px; /* Reduce font size */
            color: #333;
        }
        .badge {
            background-color: #0056b3; /* Dark blue background */
            color: white; /* White text */
            padding: 2px 5px; /* Smaller padding */
            border-radius: 5px;
            margin-left: 10px;
            font-size: 12px; /* Smaller font size */
        }
        .locked-message {
            background-color: #fff; /* White background */
            color: #333; /* Dark text */
            padding: 2px 5px; /* Smaller padding */
            border-radius: 15px; /* More rounded corners */
            display: flex;
            align-items: center;
            margin-top: 10px;
            width: fit-content; /* Adjust width to fit content */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Add a subtle shadow */
            border: 1px solid #000; /* Black outline */
            font-size: 12px; /* Smaller font size */
        }
        .locked-message i {
            margin-right: 5px; /* Smaller margin */
            color: #0056b3; /* Dark blue color for the lock icon */
        }
        .footer {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }
        .footer .left {
            width: 50%;
        }
        .footer .left h3 {
            font-size: 18px;
            font-weight: bold;
        }
        .footer .left p {
            color: #666;
        }
        .footer .right {
            width: 50%;
            display: flex;
            justify-content: space-between;
            margin-left: 20px; /* Add margin to the left */
        }
        .footer .right .column {
            display: flex;
            flex-direction: column;
        }
        .footer .right a {
            color: #333;
            text-decoration: none;
            margin: 5px 0;
        }
        .footer .right h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
  </style>
 </head>
 <body>
  <div class="sidebar">
   <a href="#">
    <i class="fas fa-home">
    </i>
   </a>
   <a href="#">
    <i class="fas fa-envelope">
    </i>
   </a>
   <a href="#">
    <i class="fas fa-calendar">
    </i>
   </a>
   <a href="#">
    <i class="fas fa-folder">
    </i>
   </a>
   <a href="#">
    <i class="fas fa-cog">
    </i>
   </a>
   <a href="#">
    <i class="fas fa-sign-out-alt">
    </i>
   </a>
  </div>
  <div class="container">
   <div class="header">
    <div class="logo">
     <img alt="SMARTEDU Logo" height="30" src="https://storage.googleapis.com/a1aa/image/2sliqDnPbj56BZJq8JLf7StfH11TtNeihBW0eoia1scd0afdC.jpg" width="30"/>
     <span>
      SMARTEDU
     </span>
    </div>
    <div class="search-bar">
     <i class="fas fa-search">
     </i>
     <input placeholder="Cari.." style="background-color: #F0F0F0; color: #333;" type="text"/>
    </div>
    <div class="user-info">
     <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/inJj4iREDf0vCKs59WiCBn99yU1rfHHhLB04s6cvwAtGt2vTA.jpg" width="40"/>
     <span>
      Halo, Nabigha
     </span>
    </div>
   </div>
   <div class="content">
    <h1>
     UI/UX Pemula
    </h1>
    <p>
     Kursus Saya / UI/UX Pemula
    </p>
    <div class="chapter">
     <h2>
      <i class="fas fa-chevron-down">
      </i>
      Chapter 0: Course Introduction
     </h2>
     <div class="card" style="border-left: 5px solid #FFD700; width: 250px; height: 200px;">
      <img alt="Video Thumbnail" height="100" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" width="100%"/>
      <div class="info">
       <h3>
        First Time In This Course
       </h3>
       <p>
        Video Pengenalan
       </p>
       <div class="author">
        <img alt="Author Picture" height="25" src="https://storage.googleapis.com/a1aa/image/5mceGFt5Nd3ZFi9GvDTiRqjA7R3O3k2CUOGNyfRjQ5gEt2vTA.jpg" width="25"/>
        <span>
         William Saputra
        </span>
       </div>
      </div>
     </div>
    </div>
    <div class="chapter">
     <h2>
      <i class="fas fa-chevron-down">
      </i>
      Chapter 1: UI/UX Introduction
     </h2>
     <div class="card-container">
      <div class="card" style="border-left: 5px solid #FFD700; width: 250px; height: 200px;">
       <img alt="Video Thumbnail" height="100" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" width="100%"/>
       <div class="info">
        <h3>
         Mulai Chapter 1: UI/UX Introduction
        </h3>
        <p>
         Video Pengenalan
        </p>
        <div class="author">
         <img alt="Author Picture" height="25" src="https://storage.googleapis.com/a1aa/image/5mceGFt5Nd3ZFi9GvDTiRqjA7R3O3k2CUOGNyfRjQ5gEt2vTA.jpg" width="25"/>
         <span>
          William Saputra
         </span>
        </div>
       </div>
      </div>
      <div class="card" style="border-left: 5px solid #FFD700; width: 250px; height: 200px;">
       <img alt="Material Thumbnail" height="100" src="https://storage.googleapis.com/a1aa/image/handout.jpg" width="100%"/>
       <div class="info">
        <h3>
         Materi Chapter 1
        </h3>
        <p>
         Chapter 1: UI/UX Introduction
        </p>
        <div class="author">
         <img alt="Author Picture" height="25" src="https://storage.googleapis.com/a1aa/image/5mceGFt5Nd3ZFi9GvDTiRqjA7R3O3k2CUOGNyfRjQ5gEt2vTA.jpg" width="25"/>
         <span>
          William Saputra
         </span>
        </div>
       </div>
      </div>
      <div class="card" style="border-left: 5px solid #FFD700; width: 250px; height: 200px;">
       <img alt="Quiz Thumbnail" height="100" src="https://storage.googleapis.com/a1aa/image/MnUTPozrXuIyF5hyWwm0g8lwhFLbwy8orjk2iM9M4L9Qr97E.jpg" width="100%"/>
       <div class="info">
        <h3>
         Kuis Chapter 1
        </h3>
        <p>
         Quiz
        </p>
        <div class="author">
         <img alt="Author Picture" height="25" src="https://storage.googleapis.com/a1aa/image/5mceGFt5Nd3ZFi9GvDTiRqjA7R3O3k2CUOGNyfRjQ5gEt2vTA.jpg" width="25"/>
         <span>
          William Saputra
         </span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="chapter">
     <h2>
      <i class="fas fa-chevron-right">
      </i>
      Chapter 2: UI/UX - Alat yang Digunakan
     </h2>
    </div>
    <div class="chapter">
     <h2>
      <i class="fas fa-chevron-right">
      </i>
      Penyelesaian Kursus: Final Project
      <span class="badge">
       TIDAK TERSEDIA
      </span>
     </h2>
    </div>
    <div class="chapter">
     <h2>
      <i class="fas fa-chevron-right">
      </i>
      Sertifikat Kelulusan
     </h2>
     <div class="locked-message">
      <i class="fas fa-lock">
      </i>
      <p>
       Tidak tersedia dengan syarat: Aktivitas End of Course Feedback dinyatakan selesai
      </p>
     </div>
    </div>
   </div>
   <div class="footer">
    <div class="left">
     <h3>
      SMARTEDU
     </h3>
     <p>
      Platform terdepan untuk membantu siswa mengembangkan keterampilan mereka di bawah instruktur terbaik dan membangun karier dari mana saja di seluruh dunia
     </p>
    </div>
    <div class="right" style="margin-left: 20px;">
     <div>
      <h3>
       Layanan
      </h3>
      <div style="display: flex;">
       <div class="column">
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
       <div class="column">
        <a href="#">
         Nilai Saya
        </a>
        <a href="#">
         Kalendar
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>