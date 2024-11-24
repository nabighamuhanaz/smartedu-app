<html>
 <head>
  <title>
   SMARTEDU - Tugas Akhir
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  
  <!-- custom css link -->
  <link href="{{ asset('css/uploadfinpro.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbar2.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/searchbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
 </head>

 <body>
  {{-- <div class="header">
   <div class="logo">
    <i class="fas fa-arrow-left">
    </i>
    <span>
     SMARTEDU
    </span>
   </div>
   <div class="search-bar">
    <input placeholder="Cari..." type="text"/>
   </div>
   <div class="user-info">
    <img alt="User profile picture" height="40" src="https://storage.googleapis.com/a1aa/image/WeZCUmNIrjX1fEFIlFWcAHD7gheUnEinYeFza7rlXDPOpvPPB.jpg" width="40"/>
    <span>
     Halo, Nabigha
    </span>
   </div>
  </div>
  <div class="sidebar">
   <a href="#">
    <i class="fas fa-home">
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
  </div> --}}
  <div class="container">
   <div class="content">
    <div class="form-container">
     <h2>
      Tugas Akhir
     </h2>
     <label for="attachment">
      Attachment
     </label>
     <input id="attachment" name="attachment" type="file"/>
     <label for="nama-tugas">
      Nama Tugas
     </label>
     <input id="nama-tugas" name="nama-tugas" placeholder="Upload file" type="text"/>
     <label for="deskripsi-tugas">
      Deskripsi Tugas
     </label>
     <textarea id="deskripsi-tugas" name="deskripsi-tugas" placeholder="Deskripsi Tugas"></textarea>
     <div class="button-container">
      <button type="submit">
       Submit
      </button>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>