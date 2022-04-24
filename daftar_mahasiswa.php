<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROJECT-1</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="../Kumpulan/dist/img/nf.png" alt="Logo Project" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project 1</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Kumpulan/dist/img/ava.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Nikita Putri</a>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-id-card alt"></i>
              <p>
                Praktikum 1
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="array_pop.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_pop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="array_push.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_push</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="array_shift.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_shift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="array_unshift.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_unshift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sort.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>sort</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="array_buah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_buah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="array_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>array_siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="variable_constant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_constant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="variable_system.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_system</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="variable_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>variable_user</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart alt"></i>
              <p>
                Praktikum 2
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_belanja.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>form_belanja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_nilai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>form_nilai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop alt"></i>
              <p>
                Praktikum 3
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminLTE/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AdminLTE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="f_form_nilai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Function</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Web_dinamis</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube alt"></i>
              <p>
                Praktikum 4
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_lingkaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>data_lingkaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_persegi_panjang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>data_persegi_panjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_mahasiswa.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>daftar_mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_nilaiMahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>daftar_nilaiMahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lemon alt"></i>
              <p>
                Praktikum 5
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="class_fruit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_fruit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_fruit2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_fruit2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_dispenser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_dispenser</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_fruit3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_fruit3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_account.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>class_account</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building alt"></i>
              <p>
                Praktikum 6
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Dosen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Matakuliah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matakuliah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="projek1.php" class="nav-link">
              <i class="nav-icon fas fa-calculator alt"></i>
              <p>
                Project 1
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            <hr>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 4</a></li>
              <li class="breadcrumb-item active">daftar_mahasiswa</li>
            </ol>
          </div >
        </div>
        <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">WEB02</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                    DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple" method>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Thn Angkatan</th>
                            <th>IPK</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                require_once 'class_mahasiswa.php';
                                $mhs = new Mahasiswa('0110221', 'Nikita Putri', 'TI', 2021, 4);
                                $mhs2 = new Mahasiswa('0110222', 'Justin Boober', 'SI', 2018, 3.5);
                                $mhs3 = new Mahasiswa('0110223', 'Minum Haus', 'TI', 2020, 2.3);
                                $mhs4 = new Mahasiswa('0110224', 'Makan Pizza', 'SI', 2019, 1.9);
                                
                            ?>
                            <td>1</td>
                            <td><?php echo $mhs->nim; ?></td>
                            <td><?php echo $mhs->nama; ?></td>
                            <td><?php echo $mhs->prodi; ?></td>
                            <td><?php echo $mhs->thn_angkatan; ?></td>
                            <td><?php echo $mhs->ipk; ?></td>
                            <td><?php echo $mhs->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $mhs2->nim; ?></td>
                            <td><?php echo $mhs2->nama; ?></td>
                            <td><?php echo $mhs2->prodi; ?></td>
                            <td><?php echo $mhs2->thn_angkatan; ?></td>
                            <td><?php echo $mhs2->ipk; ?></td>
                            <td><?php echo $mhs2->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $mhs3->nim; ?></td>
                            <td><?php echo $mhs3->nama; ?></td>
                            <td><?php echo $mhs3->prodi; ?></td>
                            <td><?php echo $mhs3->thn_angkatan; ?></td>
                            <td><?php echo $mhs3->ipk; ?></td>
                            <td><?php echo $mhs3->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?php echo $mhs4->nim; ?></td>
                            <td><?php echo $mhs4->nama; ?></td>
                            <td><?php echo $mhs4->prodi; ?></td>
                            <td><?php echo $mhs4->thn_angkatan; ?></td>
                            <td><?php echo $mhs4->ipk; ?></td>
                            <td><?php echo $mhs4->predikat_ipk(); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <b>Lab Pemrograman Web Lanjutan</b>
                </div>
                <div class="d-flex align-items-center justify-content-between small">Nikita Putri</div>
                <div class="d-flex align-items-center justify-content-between small">STT NF</div>
            </div>
        </footer>
      </div>
    </div>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>