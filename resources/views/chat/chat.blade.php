<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Tutor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/navbars.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50">
    <div class="container">
        <!-- navbar section starts -->
        @include('dashboard.navbar')
        <!-- navbar section ends -->

        <!-- main content starts -->
        <div class="row clearfix" style="width: 100%; margin: 0; height: 100vh;">
            <div class="col-lg-12" style="width: 105%; padding: 0;">
                <div class="card chat-app" style="display: flex; flex-direction: column; min-height: 109vh;">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <li class="clearfix active">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Arief Santosa</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Maya Pratiwi</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat" style="display: flex; flex-direction: column; flex-grow: 1;">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">Arief Santosa</h6>
                                        <small>Terakhir dilihat: 2 jam yang lalu</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history" style="flex-grow: 1; overflow-y: auto;">
                            <ul class="m-b-0">
                                <li class="clearfix">
                                    <div class="message-data text-right">
                                        <span class="message-data-time">10:10 AM, Hari ini</span>
                                    </div>
                                    <div class="message other-message float-right">Jadi, UI lebih fokus pada aspek tampilan, sementara UX lebih ke pengalaman pengguna, ya?</div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:12 AM, Hari ini</span>
                                    </div>
                                    <div class="message my-message">Benar sekali.</div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:15 AM, Hari ini</span>
                                    </div>
                                    <div class="message my-message">Keduanya saling terkait, namun memiliki fokus yang berbeda dalam menciptakan produk yang efektif dan efisien.</div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-message clearfix" style="flex-shrink: 0;">
                            <div class="input-group mb-0">
                                <div class="input-group-prepend">
                                    <!-- Ganti fa-send dengan fa-paper-plane untuk ikon kertas pesawat -->
                                    <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter text here...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content ends -->
    </div>

    <!-- footer section starts -->
    @include('dashboard.footer')
    <!-- footer section ends -->
</body>
<!-- javascript -->
<script>
    $(document).ready(function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>

</html>