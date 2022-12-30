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
  <a class="nav-link " href="index.php">
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
      <h1>Pendaftaran Peserta Didik Baru</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">PPDB</li>
            <li class="breadcrumb-item active">Pendaftaran</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <div class="d-grid gap-2 d-md-block">
        <a class="btn" style="text-decoration: none; margin-right: 10px; box-shadow: 2px 2px 1px grey; background-color: #2C5C52; color: white; border-radius: 50px;" href="pendaftaranppdb.php">Pendaftaran</a>
        <a class="btn" style="text-decoration: none;  box-shadow: 2px 2px 1px grey; border-radius: 50px;" href="pengumumanppdb.php">pengumuman</a>
    </div>

    <div class="container table-responsive">
        <div class="row py-5">
          <div class="col-lg-12 mx-auto">
            <div class="card rounded shadow border-0">
              <div class="card-body p-5 bg-white rounded">
                <button type="button" class="btn add-kelas" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Pendaftar</button>
                <div class="table-responsive">
                  <table id="example" class="table table-striped " style="width:100%">
                    
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Peserta</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>01</td>
                                <td>200509744</td>
                                <td>Bryan adi Prakosos</td>
                                <td>Laki-Laki</td>
                                <td>30/10/2022 10.22.33</td>
                                <td>Selesai</td>
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
    
            <!-- modal tambah pendaftar -->
            <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content" style="width: 650px;">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <h2 style="text-align:center;">Informasi Pengguna</h2>
                  <div class="  row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                    <h8>
                      Data Pribadi Siswa
                    </h8>
                  </div>
                  <form>
                      <div class="row mb-3 ">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
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
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nik" type="text" class="form-control" id="nik" value="">
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
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tempat, Tanggal Lahir</label>
                        <div class="col-md-4 ">
                          <input name="ttl" type="text" class="form-control" id="ttl" value="">
                        </div>
                        <div class="col-md-5 ">
                          <input type="date" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">No.Hp/Whatsapp</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="telepon" type="text" class="form-control" id="Telepon" value="">
                        </div>
                      </div>
      
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="alamat" class="form-control" id="about" style="height: 100px"></textarea>
                        </div>
                      </div>
                      <div class="  row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                        <h8>
                          Data Pendaftar
                        </h8>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Gelombang</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih Gelombang --</option>
                            <option value="1">Rapot</option>
                            <option value="2">Undangan</option>
                            <option value="3">Tes</option>
                          </select>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 1</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                            <option value="3">BAHASA</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 2</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                            <option value="3">BAHASA</option>
                          </select>
                        </div>
                      </div> 
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 3</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                            <option value="3">BAHASA</option>
                          </select>
                        </div>
                      </div>    
                      <div class="  row mb-3  text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                        <h8>
                          Data Orang Tua
                        </h8>
                      </div> 
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Ayah</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Ayah</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">Guru/PNS</option>
                            <option value="2">Swasta</option>
                            <option value="3">Wirausaha</option>
                            <option value="4">Petani</option>
                            <option value="5">Lain-Lain</option>
                          </select>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No.HP/Whatsapp Ayah</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pendapatan</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">Rp. 500.000-1.000.000</option>
                            <option value="2">Rp. 1.000.000-2.000.000</option>
                            <option value="3">Rp. 2.000.000-3.000.000</option>
                            <option value="4">Rp. 3.000.000-4.000.000</option>
                            <option value="5">Rp. 5.000.000-5.000.000</option>
                          </select>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Ibu</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Ibu</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">Guru/PNS</option>
                            <option value="2">Ibu Rumah Tangga</option>
                            <option value="2">Swasta</option>
                            <option value="3">Wirausaha</option>
                            <option value="4">Petani</option>
                            <option value="5">Lain-Lain</option>
                          </select>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No.HP/Whatsapp Ibu</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pendapatan</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                            <option selected>-- Pilih  --</option>
                            <option value="1">Rp. 500.000-1.000.000</option>
                            <option value="2">Rp. 1.000.000-2.000.000</option>
                            <option value="3">Rp. 2.000.000-3.000.000</option>
                            <option value="4">Rp. 3.000.000-4.000.000</option>
                            <option value="5">Rp. 5.000.000-5.000.000</option>
                          </select>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tanggungan Keluarga</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Slip Gaji</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Kartu Keluarga</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                        </div>
                      </div>
                      <div class=" row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                        <h8>
                          Data Sekolah Asal & Nilai
                        </h8>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Sekolah Asal</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 1</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 2</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 3</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 4</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 5</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 6</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Raport</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Prestasi(jika ada)</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Ijzah (jika ada)</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      <!-- modal informasi  -->
      <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content" style="width: 650px;">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
              <h2 style="text-align:center;">Informasi Siswa</h2>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Pribadi
                </h8>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Foto Pofil <img src="assets/img/profile-img.jpg" alt="" width="100" height="100" style="margin-left: 150px;" ></div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Lengkap :
               </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">NISN :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">NIK :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Jenis Kelamin :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Agama :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Tempat, Tanggal Lahir :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Email :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">No.Hp/Whastapp :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Email :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Wali Murid :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Alamat :</div>
              </div>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Pendaftar
                </h8>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Gelombang :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pilihan 1 :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pilihan 2 :</div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pilihan 3 :</div>
              </div>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Orang Tua
                </h8>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Ayah </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pekerjaan Ayah </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">No.Hp/Whatsapp Ayah </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pendapatan </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Ibu </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pekerjaan Ibu </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">No.Hp/Whatsapp Ibu </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Pendapatan </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Tanggungan Keluarga </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Slip Gaji  </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Kartu Keluaraga </div>
              </div>
              <div class=" text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Sekolah Asal & Nilai
                </h8>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Nama Sekolah Asal </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 1 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 2 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 3 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 4 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 5 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Semester 6 </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Raport </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Prestasi(jika ada) </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-8 label mb-4">Ijazah (jika ada) </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              </div>
              

            </div>
        </div>
      </div>
      <!-- modal Edit informasi Siswa -->
      <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content" style="width: 650px;">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h2 style="text-align:center;">Edit Informasi Siswa</h2>
            
              <form>
              <div class="  row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Pribadi Siswa
                </h8>
              </div>
                <div class="row">
                  <div class="col-lg-6 col-md-8 label mb-4">Foto Pofil <img src="assets/img/profile-img.jpg" alt="" width="100" height="100" style="margin-left: 150px;" ></div>
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
                    <input name="nisn" type="text" class="form-control" id="nisn" value="099765524">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nik" type="text" class="form-control" id="nik" value="00099197716">
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
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tempat, Tanggal Lahir</label>
                  <div class="col-md-4 ">
                    <input name="ttl" type="text" class="form-control" id="ttl" value="Sidoarjo">
                  </div>
                  <div class="col-md-5 ">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="mirna12@sis.zekola.site">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">No.Hp/Whatsapp</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="telepon" type="text" class="form-control" id="Telepon" value="086545667654">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="alamat" class="form-control" id="about" style="height: 100px"></textarea>
                  </div>
                </div>
                <div class="  row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                <h8>
                  Data Pendaftaran
                </h8>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Gelombang</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih Gelombang --</option>
                      <option value="1">Rapot</option>
                      <option value="2">Undangan</option>
                      <option value="3">Tes</option>
                    </select>
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 1</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">IPA</option>
                      <option value="2">IPS</option>
                      <option value="3">BAHASA</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 2</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">IPA</option>
                      <option value="2">IPS</option>
                      <option value="3">BAHASA</option>
                    </select>
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pilihan 3</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">IPA</option>
                      <option value="2">IPS</option>
                      <option value="3">BAHASA</option>
                    </select>
                  </div>
                </div>   
                <div class="  row mb-3  text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                  <h8>
                    Data Orang Tua
                  </h8>
                </div> 
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Ayah</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Ayah</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">Guru/PNS</option>
                      <option value="2">Swasta</option>
                      <option value="3">Wirausaha</option>
                      <option value="4">Petani</option>
                      <option value="5">Lain-Lain</option>
                    </select>
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No.HP/Whatsapp Ayah</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="0997555565">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pendapatan</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">Rp. 500.000-1.000.000</option>
                      <option value="2">Rp. 1.000.000-2.000.000</option>
                      <option value="3">Rp. 2.000.000-3.000.000</option>
                      <option value="4">Rp. 3.000.000-4.000.000</option>
                      <option value="5">Rp. 5.000.000-5.000.000</option>
                    </select>
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Ibu</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Ibu</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">Guru/PNS</option>
                      <option value="2">Ibu Rumah Tangga</option>
                      <option value="2">Swasta</option>
                      <option value="3">Wirausaha</option>
                      <option value="4">Petani</option>
                      <option value="5">Lain-Lain</option>
                    </select>
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No.HP/Whatsapp Ibu</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pendapatan</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" aria-label="Default select example" style="text-align: center;color:rgba(0, 0, 0, 0.5)">
                      <option selected>-- Pilih  --</option>
                      <option value="1">Rp. 500.000-1.000.000</option>
                      <option value="2">Rp. 1.000.000-2.000.000</option>
                      <option value="3">Rp. 2.000.000-3.000.000</option>
                      <option value="4">Rp. 3.000.000-4.000.000</option>
                      <option value="5">Rp. 5.000.000-5.000.000</option>
                    </select>
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tanggungan Keluarga</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="4">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Slip Gaji</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Kartu Keluarga</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                  </div>
                </div>
                <div class=" row mb-3 text-wrap" style="width: 520px; margin-left: 3rem; background-color: #2C5C52; color: white; border-radius: 5px;">
                  <h8>
                    Data Sekolah Asal & Nilai
                  </h8>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Sekolah Asal</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="SMP NEGERI 2 SURABAYA">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 1</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="99">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 2</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="87">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 3</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="88">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 4</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="98">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 5</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="99">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Semester 6</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="98">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Raport</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Prestasi(jika ada)</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">Ijzah (jika ada)</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="alamat" class="form-control" id="about" style="height: 100px" value="input class="form-control" type="file">
                  </div>
                </div>
                </div>
               
      
      
                  </div>
                </div>    

                <div class="text-center">
                  <button type="submit" class="btn btn-success">Simpan</button>
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