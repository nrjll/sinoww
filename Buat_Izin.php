<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/sinow.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <!-- Tambahkan link CSS untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-nFpaUoBQVQ3+2FveMzqL7JwBlFVWJvaClp9iFXERaT+aMzTnD3LkpGc0bO/Or1H7" crossorigin="anonymous">
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
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

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
                                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-mail fs-6"></i>
                                      <p class="mb-0 fs-3">My Account</p>
                                  </a>
                                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-list-check fs-6"></i>
                                      <p class="mb-0 fs-3">My Task</p>
                                  </a>
                                  <a href="authentication-login.php"
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
    <!--  Sidebar End -->
    <!--  Main wrapper -->
      <!--  Header End -->

      <!-- Form untuk mengunggah izin -->
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="mb-4">Unggah Postingan Anda</h2>
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
              </div>
              <div class="mb-3">
                <label for="file" class="form-label">Upload File</label>
                <input type="file" class="form-control" id="file" name="file" required>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
              </div>
              <!-- Pilihan Genre -->
              <div class="mb-3">
                <label for="genre" class="form-label">Pilih kelas</label>
                <select class="form-select" id="genre" name="genre" required>
                  <option value="">Pilih kelas</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <!-- Tambahkan opsi genre lainnya di sini -->
                </select>
                <hr>     
                <label for="genre" class="form-label">Pilih materi</label>           
                <select class="form-select" id="genre" name="genre" required>
                  <option value="">Pilih Materi</option>
                  <option value="Action">HTML</option>
                  <option value="Adventure">CSS</option>
                  <option value="Comedy">Js</option>
                  <option value="Comedy">PHP</option>
                  <option value="Comedy">Bootstrap</option>


                  <!-- Tambahkan opsi genre lainnya di sini -->
                </select>
              </div>
              <!-- Tombol Upload -->
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
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
