<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator BMI</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
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
    <a href="#" class="brand-link">
      <img src="../KalkulatorBMI/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BMI</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../KalkulatorBMI/dist/img/ava.jpg" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-calculator alt"></i>
              <p>
                Dashboard
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
            <h1 class="m-0">Kalkulator BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissable">
              <form action="index.php" method="post">
                <div class="form-group row">
                  <label for="nama" class="col-12 col-form-label"><h5>Nama</h5></label> 
                  <div class="col-12">
                    <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <label class="col-8"><h5>Jenis Kelamin</h5></label> 
                  <div class="col-8 form group">
                    <div class="form-check custom-control-inline">
                      <input name="gender" id="gender_0" type="radio" class="form-check-input" value="Laki-laki"> 
                      <label for="gender_0" class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check custom-control-inline">
                      <input name="gender" id="gender_1" type="radio" class="form-check-input" value="Perempuan"> 
                      <label for="gender_1" class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date" class="col-12 col-form-label"><h5>Tanggal Pemeriksaan</h5></label> 
                  <div class="col-12">
                    <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal hari ini" type="date" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <label class="col-8 col-form-label" for="tb"><h5>Tinggi Badan (cm)</h5></label> 
                  <div class="col-12">
                    <input id="tb" name="tb" placeholder="Masukkan tinggi badan" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="bb" class="col-8 col-form-label"><h5>Berat Badan (kg)</h5></label> 
                  <div class="col-12">
                    <input id="bb" name="bb" placeholder="Masukkan berat badan" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                  <button name="ulang" type="reset" class="btn btn-danger">Ulang</button>
                    <button id="hitung" name="hitung" type="submit" class="btn btn-primary">Hitung</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="alert alert-success kanan">
              <?php
              require_once 'bmi.php';
                
              $hitung = $_POST['hitung'];
              $nama = $_POST['nama'];
              $bb = number_format($_POST['bb'],1);
              $tb = $_POST['tb'];
              $bmi = number_format($bb / $tb**2 * 10000,1);
              $hasil = hitung($bmi);
  
                echo "<br/>Halo, $nama";
                echo "<br/>Level status BMI Anda adalah <b>$hasil</b>";
                echo "<br/><p> Berat anda $bb kg dan tinggi anda $tb cm
                <br/> Index BMI anda : <b>$bmi</b><p/>";
              ?>
            </div>
          </div>
          <div class="col-md-12">
            <?php
            require_once 'bmipasien.php';

            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $berat = number_format($_POST['bb'],1);
            $tinggi = $_POST['tb'];
            $tanggal = $_POST['tanggal'];
            ?>

            <h3 style="text-align: center">Data Pasien</h3>
            <table class="text-center" border="1" width="100%">
              <thead>
                  <tr>
                    <th>id</th><th>Tanggal Periksa</th><th>Kode</th><th>Nama</th><th>Gender</th>
                    <th>Berat</th><th>Tinggi</th><th>BMI</th><th>Hasil</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                foreach ($ps as $pas) {
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$pas['tanggal'].'</td>';
                    echo '<td>'.$pas['kode'].'</td>';
                    echo '<td>'.$pas['nama'].'</td>';
                    echo '<td>'.$pas['gender'].'</td>';
                    echo '<td>'.$pas['bb'].'</td>';
                    echo '<td>'.$pas['tb'].'</td>';
                    echo '<td>'.$pas['bmi'].'</td>';
                    echo '<td>'.$pas['hasil'].'</td></tr>';
                    $nomor++;
                  }
                ?>
                <tr>
                  <td><?php echo '4';?></td>
                  <td><?php echo "$tanggal";?></td>
                  <td><?php echo 'P004';?></td>
                  <td><?=$nama;?></td>
                  <td><?=$gender;?></td>
                  <td><?=$bb;?></td>
                  <td><?=$tb;?></td>
                  <td><?=$bmi;?></td>
                  <td><?=$hasil;?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
