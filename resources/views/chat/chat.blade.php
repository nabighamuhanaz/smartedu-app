<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  
  <!-- custom css link -->
  <link href="{{ asset('css/chat.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/profile.css') }}" rel="stylesheet" />
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="icon"></div>
      <div class="icon"></div>
      <div class="icon"></div>
      <div class="icon"></div>
      <div class="icon bg-yellow-400"></div>
      <div class="icon"></div>
    </div>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col p-6">
        <!-- Header -->
        <div class="header">
            <div class="flex items-center space-x-4">
            <div class="avatar"></div>
            <div>
                <div class="font-bold">Mrs. A</div>
                <div class="text-sm text-gray-500">Tutor Course UI/UX Pemula</div>
            </div>
            </div>
            <div class="text-yellow-400 font-bold">SMARTEDU</div>
        </div>
        <!-- Chat Section -->
        <div class="chat chat-right">
            <p>
            Assalamualaikum bu, lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="chat chat-left">
            <p>
            Waalaikumsalam nak, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="flex">
            <img alt="Image of handwritten notes" class="rounded-lg" src="https://storage.googleapis.com/a1aa/image/JqU1tCNNxX7KOx4ffjFhfTeT5HvZ8oZjWyFSlLckAOZNf2sdC.jpg" width="200" height="300"/>
        </div>
        <div class="audio">
            <div class="bg-yellow-400 p-2 rounded-full"><i class="fas fa-play text-black"></i></div>
            <div class="progress-bar"></div>
            <div class="text-black">3:08</div>
        </div>
        <!-- Input Section -->
        <div class="input-section">
            <input class="input-field" placeholder="Type a message..." type="text"/>
            <button class="send-button">
            <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
      
    </div>
  </div>
</body>
</html>
