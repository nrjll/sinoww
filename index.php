<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINOW</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/sinow.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <!-- Tambahkan link CSS untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-nFpaUoBQVQ3+2FveMzqL7JwBlFVWJvaClp9iFXERaT+aMzTnD3LkpGc0bO/Or1H7" crossorigin="anonymous">
        
    <!-- Ganti versi Font Awesome sesuai kebutuhan -->
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
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./login.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <!-- Tambahkan kotak pencarian di sini -->
                            <li class="nav-item">
                                <form class="d-flex align-items-center">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit">Search</button>
                                </form>
                            </li>
                            <!-- Tambahkan tombol filter di sini -->
                            <li class="nav-item">
                                <a href="./filter-page.html" class="btn btn-outline-primary me-2">Filter</a>
                            </li>
                            <!-- Dropdown untuk My Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/images/profile/jokowi.jpg" alt="" width="35" height="35"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="profile-page.html" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
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
                                        <i class="fas fa-user"></i>
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
                                        <i class="fas fa-user"></i>
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
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>
    </script>
</body>

</html>