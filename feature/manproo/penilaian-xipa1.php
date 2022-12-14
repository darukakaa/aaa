<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZEKOLA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/lg.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- <link href="assets/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/lg.png" alt="">
        <span class="d-none d-lg-block">ZEKOLA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Mirna Milasari</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Mirna Milasari</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <!-- <i class="bi bi-grid"></i> -->
          <img src="assets/img/1.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="absensi-siswa.php">
          <img src="assets/img/2.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Absensi</span>
        </a>
      </li><!-- End Absensi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kelas.php">
          <img src="assets/img/3.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Kelas</span>
        </a>
      </li><!-- End Kelas Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="penilaian-belajar.php">
          <img src="assets/img/4.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Penilaian Belajar</span>
        </a>
      </li><!-- End Penilaian Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="rapor.php">
          <img src="assets/img/5.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Rapor</span>
        </a>
      </li><!-- End Rapor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="jadwal-kelas.php">
          <img src="assets/img/6.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Jadwal</span>
        </a>
      </li><!-- End Jadwal Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="berita-kelas.php">
          <img src="assets/img/7.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Berita</span>
        </a>
      </li><!-- End Berita Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-tu.php">
          <img src="assets/img/8.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Administrasi TU</span>
        </a>
      </li><!-- End Admin TU Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="osis.php">
          <img src="assets/img/9.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Osis</span>
        </a>
      </li><!-- End Osis Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="ekstrakulikuler.php">
          <img src="assets/img/10.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Ekstrakulikuler</span>
        </a>
      </li><!-- End Ekstrakulikuler Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kantin.php">
          <img src="assets/img/11.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Kantin</span>
        </a>
      </li><!-- End Kantin Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="koperasi-koleksiproduk.php">
          <img src="assets/img/12.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Koperasi</span>
        </a>
      </li><!-- End Koperasi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="fasilitas.php">
          <img src="assets/img/13.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Fasilitas</span>
        </a>
      </li><!-- End Fasilitas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="perpustakaan.php">
          <img src="assets/img/14.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Perpustakaan</span>
        </a>
      </li><!-- End Perpustakaan Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="mutasi.php">
          <img src="assets/img/15.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Mutasi</span>
        </a>
      </li><!-- End Mutasi Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="data-pengguna.php">
          <img src="assets/img/16.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Data Pengguna</span>
        </a>
      </li><!-- End Kantin Page Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pendaftaranppdb.php">
          <img src="assets/img/17.png" alt="" style="width: 20px; margin-right:10px;">
          <span>PPDB</span>
        </a>
      </li><!-- End PPDB Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <img src="assets/img/18.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Profil Pengguna</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a type="button" class="nav-link collapsed" data-bs-toggle="modal" data-bs-target="#out" >
          <img src="assets/img/19.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Keluar</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Penilaian Belajar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="penilaian-belajar.php">Penilaian Belajar</a></li>
          <li class="breadcrumb-item active">X IPA 1</li>
          
        </ol>
      </nav>
    </div>
    <!-- End Page Title --> 

    <div class="container table-responsive">
      <div class="row py-3">
        <div class="col-lg-12 mx-auto">
          <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
              <button type="button" class="btn add-kelas" data-bs-toggle="modal" data-bs-target="#tambahpenilaian">Tambah Nilai</button>
              <form action="" method="">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="25%">Nama Kelas</td>
                      <td>X RPL 1</td>
                    </tr>
                    <tr>
                      <td width="25%">Wali Kelas</td>
                      <td>Jojo</td>
                    </tr>
                    <tr>
                      <td width="25%">Mapel</td>
                      <td>Matematika</td>
                    </tr>
                    <tr>
                      <td width="25%">Tahun Ajaran</td>
                      <td>2021-2022</td>
                    </tr>
                  </tbody>
                </table> 
              </form>
              <div class="table-responsive">
                <table id="example" class="table table-striped " style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Mata Pelajaran</th>
                      <th>Jumlah Nilai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Pendidikan Agama Islam dan Budi Pekerti</td>
                      <td>7</td>
                      <td style="width: 150px;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailpenilaian">
                          <i class="bi bi-eye-fill" style="width: 10px ;"></i>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpenilaian">
                          <i class="bi bi-pencil"></i>
                        </button>   
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">
                          <i class="bi bi-trash"></i>
                        </button>                              
                      </td>
                    </tr>

                    <tr>
                      <td>02</td>
                      <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                      <td>8</td>
                      <td style="width: 150px;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailpenilaian">
                          <i class="bi bi-eye-fill" style="width: 10px ;"></i>
                        </button>  
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editpenilaian">
                          <i class="bi bi-pencil"></i>
                        </button>   
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">
                          <i class="bi bi-trash"></i>
                        </button>                            
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>       
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal detail-->
    <div class="modal fade" id="detailpenilaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Kelas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-md-8 label mb-4">Nama Kelas</div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-8 label mb-4">Wali Kelas </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal tambah -->
    <div class="modal fade" id="tambahpenilaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kelas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="">
              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Kelas</label>
                <div class="col-md-8 col-lg-9">
                  <input name="fullName" type="text" class="form-control" id="fullName" value="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Wali Kelas</label>
                <div class="col-md-8 col-lg-9">
                  <input name="fullName" type="text" class="form-control" id="fullName" value="">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal edit -->
    <div class="modal fade" id="editpenilaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kelas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="">
              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Kelas</label>
                <div class="col-md-8 col-lg-9">
                  <input name="fullName" type="text" class="form-control" id="fullName" value="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Wali Kelas</label>
                <div class="col-md-8 col-lg-9">
                  <input name="fullName" type="text" class="form-control" id="fullName" value="">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal hapus -->
    <div class="modal fade" id="hapus" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered" style="width:20rem">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            <center>
              <p>Apakah anda ingin hapus data</p>
              <p>tersebut ?</p>
              <a href="penilaian-xipa1.php" class="btn" style="border-radius: 10px; background-color:#fff; ">Batal</a>
              <button type="submit" class="btn" style="background-color:#5DA194; color:#fff; border-radius: 10px;">Hapus</button>
            </center>
          </div>
        </div>
      </div>
    </div>
	  <!-- logout -->
      <div class="modal fade" id="out" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="width:20rem">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
              <center>
                <p>Apakah anda ingin Keluar</p>
                <a href="penilaian-xipa1.php" class="btn" style="border-radius: 10px; background-color:#fff; ">Batal</a>
                <a href= "login.php" class="btn" style="background-color:#5DA194; color:#fff; border-radius: 10px;">Ya</a>
              </center>
            </div>
          </div>
        </div>
      </div>

  </main><!-- End #main -->

  <?php
  include "layouts/footer.php";
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>