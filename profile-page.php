<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINOW</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/sinow.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <!-- Tambahkan link CSS untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-nFpaUoBQVQ3+2FveMzqL7JwBlFVWJvaClp9iFXERaT+aMzTnD3LkpGc0bO/Or1H7"
        crossorigin="anonymous">
    <!-- Ganti versi Font Awesome sesuai kebutuhan -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* CSS untuk menggeser isi profil ke kanan */
        .profile-content {
            padding-left: 15px; /* Tambahkan padding kiri */
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="assets/images/logos/sinow.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Buat_Izin.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-arrow-up"></i>
                                </span>
                                <span class="hide-menu">UNGGAH</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Notifikasi.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-bell"></i>
                                </span>
                                <span class="hide-menu">NOTIFIKASI</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- isi dari my profile  -->
    <div class="body-wrapper">
        <section id="content" class="container" algin="right">

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <!-- Foto Profil -->
        <img src="assets/images/profile/jokowi.jpg" class="img-fluid rounded-circle" alt="Foto Profil">
      </div>
      <div class="col-md-8">
        <!-- Nama -->
        <h2>NGAB OWI</h2>
        <!-- Tentang -->
        <p>Tentang saya: Saya adalah bapak bapak tua yang suka ngoding .</p>
        <!-- Rating -->
        <div class="mb-3">
          <span class="text-muted">Rating: 5</span>
          <span class="fa fa-star text-warning"></span>
          <span class="fa fa-star text-warning"></span>
          <span class="fa fa-star text-warning"></span>
          <span class="fa fa-star text-warning"></span>
          <span class="fa fa-star text-warning"></span>
        </div>
      </div>
    </div>
    <hr>
    <!-- Daftar Postingan -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h2 class="mb-4">Postingan</h2>
                        <!-- Tambahkan konten postingan di sini -->
                        <div class="postingan position-relative">
                            <!-- Tambahkan username dengan lingkaran -->
                            <div class="d-flex align-items-center mb-2">
                                <div style="width:10%"><img src="assets/images/profile/jokowi.jpg"
                                        alt="Profile Image" class="rounded-circle" width="50"></div>
                                <!-- Ganti ikon sesuai kebutuhan -->
                                <div>Jokowi</div>
                            </div>
                            <img src="assets/images/products/Jokowi-3.webp" alt="Preview"
                                style="max-width: 100%; height: auto;">

                            <h2>Komentar timnas</h2>
                            <p>Presiden Jokowi berkomentar terhadap pemain timnas Indonesia dengan
                                kata-kata "Mainnya hebat sekali".</p>
                            <form>
                                <a href="https://youtube.com" class="btn btn-primary" target="_blank">Buka
                                    File</a>
                            </form>
                            <style>
                                .bi-heart.clicked path {
                                    fill: red;
                                }
                            </style>
                            <script>
                                function toggleLike(button) {
                                    const heartIcon = button.querySelector('.bi-heart');
                                    heartIcon.classList.toggle('clicked');
                                }
                            </script>
                            <button
                               
                                class="btn position-absolute bottom-0 end-0 m-3">
                                <svg xmlns="http://www.w3.org/2000/svg" id="heart" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" onclick="toggleLike()">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                  </svg>
                                  <script>
                                    function toggleLike() {
                                      const heartIcon = document.getElementById('heart');
                                      heartIcon.classList.toggle('clicked');
                                    }
                                    </script>
                                </button>
                        </div>
                        <hr>
                        <!-- Sekat antara postingan -->
                        <div class="postingan position-relative">
                            <!-- Tambahkan username dengan lingkaran -->
                            <div class="d-flex align-items-center mb-2">
                                <div style="width:10%"><img src="assets/images/profile/jokowi.jpg"
                                        alt="Profile Image" class="rounded-circle" width="50"></div>
                                <!-- Ganti ikon sesuai kebutuhan -->
                                <div>Jokowi</div>
                            </div>
                            <img src="assets/images/products/Jokowi-3.webp" alt="Preview"
                                style="max-width: 100%; height: auto;">

                            <h2>Komentar timnas</h2>
                            <p>Presiden Jokowi berkomentar terhadap pemain timnas Indonesia dengan
                                kata-kata "Mainnya hebat sekali".</p>
                            <form>
                                <a href="https://youtube.com" class="btn btn-primary" target="_blank">Buka
                                    File</a>
                            </form>
                            <style>
                                .bi-heart.clicked path {
                                    fill: red;
                                }
                            </style>
                            <script>
                                function toggleLike(button) {
                                    const heartIcon = button.querySelector('.bi-heart');
                                    heartIcon.classList.toggle('clicked');
                                }
                            </script>
                            <button
                               
                                class="btn position-absolute bottom-0 end-0 m-3">
                                <svg xmlns="http://www.w3.org/2000/svg" id="heart" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" onclick="toggleLike()">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                  </svg>
                                  <script>
                                    function toggleLike() {
                                      const heartIcon = document.getElementById('heart');
                                      heartIcon.classList.toggle('clicked');
                                    }
                                    </script>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 1 End -->
    </div>
  </div>

  <!-- Bootstrap JS -->
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/sidebarmenu.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="assets/js/dashboard.js"></script>
</body>

</html>
