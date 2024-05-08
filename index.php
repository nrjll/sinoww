<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }    
?>

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
                            <a class="sidebar-link" href="./unggah.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-arrow-up"></i>
                                </span>
                                <span class="hide-menu">Unggah</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Notifikasi.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-bell"></i>
                                </span>
                                <span class="hide-menu">Notifikasi</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./profile-page.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Jokowi</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
                
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
                        
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <!-- Tambahkan kotak pencarian di sini -->
                            <li class="nav-item">
                                <form class="d-flex align-items-center">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <!-- Ganti tombol search dengan logo search -->
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="ti ti-search"></i> <!-- Ikon search dari Bootstrap Icons -->
                                    </button>
                                </form>
                            </li>
                            <!-- Tambahkan tombol filter di sini -->
                            <li class="nav-item">
                                <a href="./filter-page.html" class="btn btn-outline-primary me-2">
                                    <i class="ti ti-filter"></i> <!-- Ikon filter dari Bootstrap Icons -->
                                </a>
                            </li>
                            <!-- Dropdown untuk My Profile -->
                    
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
                                    
                                    <button class="btn position-absolute bottom-0 end-0 m-3" onclick="toggleLike(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                        </svg>
                                    </button>
                                    <a href="komen.html" class="btn position-relative bottom-0 end-0 m-3">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                                        </svg>
                                    </a>
                                          
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
                                        
                                        <button class="btn position-absolute bottom-0 end-0 m-3" onclick="toggleLike(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                            </svg>
                                        </button>
                                        <a href="komen.html" class="btn position-relative bottom-0 end-0 m-3">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                                            </svg>
                                        </a>
                                              
                                        </button>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Yearly Breakup -->
                                    <style>
                                        #rekomendasi-mapel {
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        overflow-y: auto;
                                         width: 250px;

                                        }
                                    </style>
                                    <nav class="sidebar-nav scroll-sidebar" data-simplebar="" id="rekomendasi-mapel">
                                        <ul id="sidebarnav">
                                            <li class="nav-small-cap">
                                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                                <span class="hide-menu">REKOMENDASI MAPEL</span>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="#html" aria-expanded="false">
                                                    <span class="hide-menu">HTML</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="#css" aria-expanded="false">
                                                    <span class="hide-menu">CSS</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="#javascript" aria-expanded="false">
                                                    <span class="hide-menu">Javascript</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="#php" aria-expanded="false">
                                                    <span class="hide-menu">PHP</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $(window).scroll(function() {
                                                var scrollTop = $(window).scrollTop(); // Get current vertical scroll position
                                                $('#rekomendasi-mapel').css('top', scrollTop + 'px'); // Update top position of sidebar
                                            });
                                        });
                                    </script>
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
    </body>
    
    </html>
    
    
