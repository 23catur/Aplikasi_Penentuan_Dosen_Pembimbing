<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.poliupg.ac.id/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../images/pnup11.png" width="50px">
          </div>
          <!-- <p>CT</p> -->
        </a>
        
        <a href="index.php" class="simple-text logo-normal">
          Penentuan DosPem
          <!-- <div class="logo-image-big">
            <img src="./assets/img/oke.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="./dospem.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data DosPem</p>
            </a>
          </li>
          <li class="active">
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li>
            <a href="./hasil.php">
              <i class="nc-icon nc-box"></i>
              <p>Riwayat Perhitungan</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./logout.php">
              <i class="nc-icon nc-button-power"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <?php include 'includes/navbar.php' ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Ubah Data Nilai Mahasiswa</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" disabled="" class="form-control" name="nama" required value="<?php echo $pecah['nama']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" required value="<?php echo $pecah['judul']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Teknik Elektro (a1)</label>
                      <input type="number" class="form-control" name="a1" required value="<?php echo $pecah['a1']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Teknologi Informasi (a2)</label>
                      <input type="number" class="form-control" name="a2" required value="<?php echo $pecah['a2']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Ilmu Komputer (a3)</label>
                      <input type="number" class="form-control" name="a3" required value="<?php echo $pecah['a3']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Cyber Security (a4)</label>
                      <input type="number" class="form-control" name="a4" required value="<?php echo $pecah['a4']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Mobile Programming (b1)</label>
                      <input type="number" class="form-control" name="b1" required value="<?php echo $pecah['b1']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Web Programming (b2)</label>
                      <input type="number" class="form-control" name="b2" required value="<?php echo $pecah['b2']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Administrasi Database (b3)</label>
                      <input type="number" class="form-control" name="b3" required value="<?php echo $pecah['b3']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Cyber Security (b4)</label>
                      <input type="number" class="form-control" name="b4" required value="<?php echo $pecah['b4']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Internet Of Thing (IoT) (b5)</label>
                      <input type="number" class="form-control" name="b5" required value="<?php echo $pecah['b5']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Jaringan Komputer (b6)</label>
                      <input type="number" class="form-control" name="b6" required value="<?php echo $pecah['b6']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Big Data (b7)</label>
                      <input type="number" class="form-control" name="b7" required value="<?php echo $pecah['b7']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Machine Learning (b8)</label>
                      <input type="number" class="form-control" name="b8" required value="<?php echo $pecah['b8']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Manajemen Teknologi Informasi (b9)</label>
                      <input type="number" class="form-control" name="b9" required value="<?php echo $pecah['b9']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Software Engineering (b10)</label>
                      <input type="number" class="form-control" name="b10" required value="<?php echo $pecah['b10']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Rekayasa Perangkat Lunak (b11)</label>
                      <input type="number" class="form-control" name="b11" required value="<?php echo $pecah['b11']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="ubah">Simpan</button>
                    </div>
                  </div>
                </form>

                <!-- database -->
                <?php
                if (isset($_POST['ubah'])) {
                    $koneksi->query("UPDATE nilai_mahasiswa SET a1='$_POST[a1]', a2='$_POST[a2]', b1='$_POST[b1]', b2='$_POST[b2]', b3='$_POST[b3]', b4='$_POST[b4]', b5='$_POST[b5]', b6='$_POST[b6]', b7='$_POST[b7]', b8='$_POST[b8]', b9='$_POST[b9]', b10='$_POST[b10]', b11='$_POST[b11]' WHERE id_nilai='$_GET[id]'");
                    echo "<script>alert('Data Nilai telah berhasil Diubah!');</script>";
                    echo "<script>location='datanilai.php';</script>";
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
  <?php include 'includes/script.php' ?>
</body>

</html>
