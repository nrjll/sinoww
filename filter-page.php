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
                    <a href="./index.php" class="text-nowrap logo-img">
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
                            <a class="sidebar-link" href="./index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Buat_Izin.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-arrow-up"></i>
                                </span>
                                <span class="hide-menu">UNGGAH</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Notifikasi.php" aria-expanded="false">
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
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">

    <div class="container py-5">
        <h1 class="mb-4">Filter Materi</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="mb-3">
                    <h4 class="mb-3">Select Class</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="actionCheckbox">
                        <label class="form-check-label" for="actionCheckbox">10</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="adventureCheckbox">
                        <label class="form-check-label" for="adventureCheckbox">11</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="comedyCheckbox">
                        <label class="form-check-label" for="comedyCheckbox">12</label>
                    </div>
                    <!-- Add more checkboxes for other genres -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="mb-3">
                    <h4 class="mb-3">Select Materi</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="actionCheckbox">
                        <label class="form-check-label" for="actionCheckbox">HTML</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="adventureCheckbox">
                        <label class="form-check-label" for="adventureCheckbox">CSS</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="comedyCheckbox">
                        <label class="form-check-label" for="comedyCheckbox">JS</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="comedyCheckbox">
                        <label class="form-check-label" for="comedyCheckbox">PHP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="comedyCheckbox">
                        <label class="form-check-label" for="comedyCheckbox">IOT</label>
                    </div>
                    <!-- Add more checkboxes for other genres -->
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-primary search-btn" type="button"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
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
