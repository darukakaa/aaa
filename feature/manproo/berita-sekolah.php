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
        <a class="nav-link collapsed" href="index.php">
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
        <a class="nav-link collapsed" href="penilaian-belajar.php">
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
        <a class="nav-link " href="berita-kelas.php">
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
        <a class="nav-link collapsed" href="koperasi.php">
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
        <a class="nav-link collapsed" href="perpustakaan.php">
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
        <a class="nav-link collapsed" href="login.php">
          <img src="assets/img/19.png" alt="" style="width: 20px; margin-right:10px;">
          <span>Keluar</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="index.php">Berita</a></li>
          <li class="breadcrumb-item active">Berita Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="d-grid gap-2 d-md-block">
      <a class="btn" style="text-decoration: none; margin-right: 10px; box-shadow: 2px 2px 1px grey; border-radius: 50px;"  href="berita-xipa1.php">Kelas</a>
      <a class="btn" style="text-decoration: none; box-shadow: 2px 2px 1px grey; background-color: #2C5C52; color: white; border-radius: 50px;"  href="berita-sekolah.php">Sekolah</a>
    </div>

    <section class="section dashboard py-3">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- News & Update -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="color: #2C5C52; font-weight: bold;">Mata Pelajaran Kimia Akan Melaksanakan Praktek Minggu Depan</h5>
                  <div class="news">
                    <img src="assets/img/praktek.png" alt="" style="width:30%">
                    <h4>Pengumuman</h4>
                    <p>#TUGAS 1</p>
                    <p style="text-align: justify;">Selamat siang teman - teman, diberitahukan bahwa minggu depan akan diadakan praktikum kimia di laboratorium kimia. Diharapkan untuk teman - teman untuk membawa beberapa perlengkapan yang wajib dibawa, sebagai berikut :</p>
                    <p></p>
                    <p>1. Jas Lab</p>
                    <p>2. Buku Catatan</p>
                    <p>3. Pulpen</p>
                    <p>4. Buku Paket</p>
                    <p>Materi yang perlu di pelajari adalah reaksi kimia:oleh karena itu dipersilahkan untuk membawa beberap bahan yang sudah tertera pada buku paket kimia halaman 105.

                    <p>Selanjutnya buatlah kelompok dengan masing - masing kelompok beranggotakan 4 -5 orang. dan tentukan pembagian tugas di masing - masing kelompok.</p> 

                    <p>Tulis nama kelompok dan anggota di kertas folio bergaris dan kumpulkan besok ke asisten laborTorium</p></p>
                  </div>
                </a>
              </div>
            </div>
          </div><!-- End News & Update -->
        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Kalender -->
        <div class="card">
          <div class="card-body pb-0">
            <h5 class="card-title" style="color: #2C5C52; font-weight: bold; ">Berita Terbaru</h5>
            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/kotak.png" alt="" style="width: 50px; margin-left: 20px;">
                <h4><a href="#" style="color: #2C5C52; font-weight: bold; ">Minggu Depan Persiapkan Pekerjaan Rumah Mata Pelajaran Bahasa Inggris</a></h4>
                <p>10 Oktober 2022</p>
              </div>
              <div class="post-item clearfix">
                <img src="assets/img/kotak.png" alt="" style="width: 50px; margin-left: 20px;">
                <h4><a href="#" style="color: #2C5C52; font-weight: bold; ">Hari Senin Tanggal 24 Oktober 2022 Waktunya Pembayaran Uang KAS Kelas</a></h4>
                <p>10 Oktober 2022</p>
              </div>
              <div class="post-item clearfix">
                <img src="assets/img/kotak.png" alt="" style="width: 50px; margin-left: 20px;">
                <h4><a href="#" style="color: #2C5C52; font-weight: bold; ">Hari Senin Tanggal 24 Oktober 2022 Waktunya Pembayaran Uang KAS Kelas</a></h4>
                <p>10 Oktober 2022</p>
              </div>
              <div class="post-item clearfix">
                <img src="assets/img/kotak.png" alt="" style="width: 50px; margin-left: 20px;">
                <h4><a href="#" style="color: #2C5C52; font-weight: bold; ">Hari Jumat Mata Pelajaran Penjaskes Jangan Lupa Membawa Baju Olahraga</a></h4>
                <p>10 Oktober 2022</p>
              </div>
              <div class="post-item clearfix">
                <img src="assets/img/kotak.png" alt="" style="width: 50px; margin-left: 20px;">
                <h4><a href="#" style="color: #2C5C52; font-weight: bold; ">Presiden Jokowi Bicara Peran Siswa dan Ekonomi Indonesia </a></h4>
                <p>10 Oktober 2022</p>
              </div>
            </div>

            <a href="#" style="color: #2C5C52; font-weight: bold; "><center>Lihat Semuanya >>></center></a>
          </div>
        </div><!-- End Kalender -->




      </div><!-- End Right side columns -->

    </div>
  </section>

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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>