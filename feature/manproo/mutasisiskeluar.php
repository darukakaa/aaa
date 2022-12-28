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
      <a href="index.php" class="logo d-flex align-items-center">
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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
        <a class="nav-link collapsed" href="index.php">
          <img src="assets/img/1.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav --> 

      <li class="nav-item">
        <a class="nav-link collapsed" href="absensi-siswa.html">
          <img src="assets/img/2.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Absensi</span>
        </a>
      </li><!-- End Absensi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kelas.html">
          <img src="assets/img/3.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Kelas</span>
        </a>
      </li><!-- End Kelas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="penilaian-belajar.html">
          <img src="assets/img/4.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Penilaian Belajar</span>
        </a>
      </li><!-- End Penilaian Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="rapor.html">
          <img src="assets/img/5.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Rapor</span>
        </a>
      </li><!-- End Rapor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="jadwal.html">
          <img src="assets/img/6.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Jadwal</span>
        </a>
      </li><!-- End Jadwal Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="berita.html">
          <img src="assets/img/7.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Berita</span>
        </a>
      </li><!-- End Berita Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-tu.html">
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
        <a class="nav-link collapsed" href="ekstrakulikuler.html">
          <img src="assets/img/10.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Ekstrakulikuler</span>
        </a>
      </li><!-- End Ekstrakulikuler Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kantin.html">
          <img src="assets/img/11.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Kantin</span>
        </a>
      </li><!-- End Kantin Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/img/12.png" alt="" style="width: 20px; margin-right:10px;"><span>Koperasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="fasilitas.html">
          <img src="assets/img/13.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Fasilitas</span>
        </a>
      </li><!-- End Kantin Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="perpustakaan.html">
          <img src="assets/img/14.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Perpustakaan</span>
        </a>
      </li><!-- End Kantin Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="mutasi.php">
          <img src="assets/img/15.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Mutasi</span>
        </a>
      </li>  

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/img/16.png" alt="" style="width: 20px; margin-right:10px;"><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Data Pengguna Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pendaftaranppdb.php">
          <img src="assets/img/17.png" alt="" style="width: 20px; margin-right:10px;">
          <span>PPDB</span>
        </a>
      </li><!-- End PPDB Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <img src="assets/img/18.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Profil Pengguna</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <img src="assets/img/19.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Keluar</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mutasi Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="mutasi.php">Mutasi<a/li>
          <li class="breadcrumb-item active">Mutasi Siswa Keluar</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <div class="d-grid gap-2 d-md-block">

        <a class="btn" style="text-decoration: none;  box-shadow: 2px 2px 1px grey; border-radius: 50px;" href="mutasisismasuk.php">Mutasi Masuk</a>
        <a class="btn" style="text-decoration: none; margin-right: 10px; box-shadow: 2px 2px 1px grey; background-color: #2C5C52; color: white; border-radius: 50px;" href="mutasisiskeluar.php">Mutasi Keluar</a>
      
      
    </div>

    <div class="container table-responsive">
        <div class="row py-5">
          <div class="col-lg-12 mx-auto">
            <div class="card rounded shadow border-0">
              <div class="card-body p-5 bg-white rounded">
                <button type="button" class="btn add-kelas" data-bs-toggle="modal" data-bs-target="#tambahpengajuan">Tambah Pengajuan</button>
                <button type="button" class="btn add-kelas" data-bs-toggle="modal" data-bs-target="#printlaporan">Print Laporan <i class="bi bi-file-earmark-pdf-fill"></i></button>
                <div class="table-responsive">
                  <table id="example" class="table table-striped " style="width:100%">
                    
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Pengajuan</th>
                                <th>Nama Lengkap</th>
                                <th>kelas</th>
                                <th>Status</th>
                                <th>Timestamps</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>01</td>
                                <td>200509744</td>
                                <td>Bryan adi Prakoso</td>
                                <td>X IPA 1</td>
                                <td>Diterima</td>
                                <td>-</td>
                                <td style="width: 150px;">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info">
                                      <i class="bi bi-eye-fill" style="width: 10px ;"></i>
                                    </button>    
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail">
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
    
            <!-- modal tambah pengajuan mutasi -->
            <div class="modal fade" id="tambahpengajuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content" style="width: 650px;">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Pengajuan Mutasi Siswa </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tanggal Pengajuan</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="Mirna Milasari">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NISN</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nisn" type="text" class="form-control" id="nisn" value="Mirna Milasari">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Umur</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Laki-Laki</label>
                          </div>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tahun Pelajaran</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Sekolah Lama</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Sekolah Baru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Alasan Mutasi</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="alasan" class="form-control" id="alasan" style="height: 100px"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Dokumen</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 200px" value="input class="form-control" type="file">
                        </div>
                      </div>
      
                      <div class="text-center">
                        <button type="submit" class="btn btn-success">Masuk</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal Print Laporan -->
            <div class="modal fade" id="printlaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content" style="width: 650px;">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cetak Pengajuan Mutasi Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Tanggal Pengajuan</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="assets/img/profile-img.jpg" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="Mirna Milasari">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NISN</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nisn" type="text" class="form-control" id="nisn" value="Mirna Milasari">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">TTL</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nisn" type="text" class="form-control" id="nisn" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Laki-Laki</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih Agama --</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Hindu</option>
                            <option value="3">Budha</option>
                          </select>
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">No. Telepon</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="telepon" type="text" class="form-control" id="Telepon" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat Siswa</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="alamat" class="form-control" id="about" style="height: 100px"></textarea>
                        </div>
                      </div>
                      
                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nama Wali Murid</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamatsiswa" type="text" class="form-control" id="alamatsiswa" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat Wali Murid</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="alamat" class="form-control" id="about" style="height: 100px"></textarea>
                        </div>
                      </div>
      
                      <div class="text-center">
                        <button type="submit" class="btn btn-success">Masuk</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      <!-- modal informasi siswa -->
      <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content" style="width: 650px;">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
              <h2 style="text-align:center;">Informasi Pengguna</h2>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Identitas Pengguna
                </h8>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;"  >
                <div class="col-lg-6 col-md-8 label mb-4">Foto Pofil : <img src="assets/img/profile-img.jpg" alt="" width="100px" style="margin-left: 150px;"></div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Lengkap :
               </div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">NISN :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Kelas :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Tempat, Tanggal Lahir :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Jenis Kelamin :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Agama :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">No. Telepon :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Email :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Wali Murid :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Alamat Wali Murid :</div>
              </div>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Pengajuan Mutasi
                </h8>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Tanggal Pengajuan :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Tahun Pelajaran :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Sekolah Lama :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Sekolah Baru :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Alasan Mutasi :</div>
              </div>
              <div class="row"style="width: 500px; margin-left: 3rem;">
                <div class="col-lg-6 col-md-8 label mb-4">Dokumen :</div>
              </div>
                <button type="button"  class="btn add-kelas " style="margin-left: 29rem; " >Cetak <i class="bi bi-file-earmark-pdf-fill"></i></button>
                <button type="button"  class="btn add-kelas " style="margin-left: 12rem;background-color: #00F043;" >Konfirmasi </button>
                <button type="button"  class="btn add-kelas " style="margin-left: 1rem;background-color: #F00000;" >Batal </button>
              </div>
              

            </div>
        </div>
      </div>
      <!-- modal Edit Pengajuan Mutasi Siswa -->
      <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content" style="width: 650px;">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengajuan Mutasi Siswa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tanggal Pengajuan</label>
                  <div class="col-md-8 col-lg-9">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="Mirna Milasari">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NISN</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nisn" type="text" class="form-control" id="nisn" value="Mirna Milasari">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Kelas</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="kelas" type="text" class="form-control" id="kelas" value="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Laki-Laki</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Tahun Pelajaran</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="tapel" type="text" class="form-control" id="tapel" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Sekolah Lama</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Sekolah Baru</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Alasan Mutasi</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="alasan" class="form-control" id="alasan" style="height: 100px"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Dokumen</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 200px" value="input class="form-control" type="file">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-success">Masuk</button>
                </div>
              </form>
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
                <a href="anggota-osis.php" class="btn" style="border-radius: 10px; background-color:#fff; ">Batal</a>
                <button type="submit" class="btn" style="background-color:#5DA194; color:#fff; border-radius: 10px;">Hapus</button>
              </center>
            </div>
          </div>
        </div>
      </div>

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Zekola</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Skuitwot
    </div>
  </footer><!-- End Footer -->

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