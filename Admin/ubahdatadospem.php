<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM dospem WHERE id_dospem='$_GET[id]'");
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
        </a>
        
        <a href="index.php" class="simple-text logo-normal">
          Penentuan DosPem
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
          <li class="active">
            <a href="./dospem.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data DosPem</p>
            </a>
          </li>
          <li>
            <a href="./hasil.php">
              <i class="nc-icon nc-box"></i>
              <p>Riwayat Perhitungan</p>
            </a>
          </li>
          <li>
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <i class="nc-icon nc-money-coins"></i>
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
                <h4 class="card-title">Ubah Data Dosen Pembimbing</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Dosen Pembimbing</label>
                        <input type="text" class="form-control" name="nama" required value="<?php echo $pecah['nama_dospem']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" value="<?php echo $pecah['foto']; ?>"><br><img src="../foto_dospem/<?php echo $pecah['foto']; ?>" width="100" height="100">
                      </div>
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="nomorhp" required value="<?php echo $pecah['nomorhp']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required value="<?php echo $pecah['alamat']; ?>">
                      </div>
                      <div class="form-group">
                        <label>jabatan Fungsional</label>
                        <input type="text" class="form-control" name="jabatan" required value="<?php echo $pecah['jabatan']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Teknik Elektro (a1)</label>
                      <input type="text" class="form-control" name="ka1" required value="<?php echo $pecah['ka1']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Teknologi Informasi (a2)</label>
                      <input type="text" class="form-control" name="ka2" required value="<?php echo $pecah['ka2']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Ilmu Komputer (a3)</label>
                      <input type="text" class="form-control" name="ka3" required value="<?php echo $pecah['ka3']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Cyber Security (a4)</label>
                      <input type="text" class="form-control" name="ka4" required value="<?php echo $pecah['ka4']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Mobile Programming (b1)</label>
                      <input type="text" class="form-control" name="kb1" required value="<?php echo $pecah['kb1']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Web Programming (b2)</label>
                      <input type="text" class="form-control" name="kb2" required value="<?php echo $pecah['kb2']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Administrasi Database (b3)</label>
                      <input type="text" class="form-control" name="kb3" required value="<?php echo $pecah['kb3']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Cyber Security (b4)</label>
                      <input type="text" class="form-control" name="kb4" required value="<?php echo $pecah['kb4']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Internet Of Thing (IoT) (b5)</label>
                      <input type="text" class="form-control" name="kb5" required value="<?php echo $pecah['kb5']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Jaringan Komputer (b6)</label>
                      <input type="text" class="form-control" name="kb6" required value="<?php echo $pecah['kb6']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Big Data (b7)</label>
                      <input type="text" class="form-control" name="kb7" required value="<?php echo $pecah['kb7']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Machine Learning (b8)</label>
                      <input type="text" class="form-control" name="kb8" required value="<?php echo $pecah['kb8']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Manajemen Teknologi Informasi (b9)</label>
                      <input type="text" class="form-control" name="kb9" required value="<?php echo $pecah['kb9']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Software Engineering (b10)</label>
                      <input type="text" class="form-control" name="kb10" required value="<?php echo $pecah['kb10']; ?>">
                      </div>
                      <div class="form-group">
                      <label>Rekayasa Perangkat Lunak (b11)</label>
                      <input type="text" class="form-control" name="kb11" required value="<?php echo $pecah['kb11']; ?>">
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
                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    if (!empty($lokasifoto)) {
                        move_uploaded_file($lokasifoto, "../foto_dospem/$namafoto");

                        $koneksi->query("UPDATE dospem SET nama_dospem='$_POST[nama]',nomorhp='$_POST[nomorhp]',alamat='$_POST[alamat]',jabatan='$_POST[jabatan]',foto='$namafoto', ka1='$_POST[ka1]', ka2='$_POST[ka2]', ka3='$_POST[ka3]', ka4='$_POST[ka4]', kb1='$_POST[kb1]', kb2='$_POST[kb2]', kb3='$_POST[kb3]', kb4='$_POST[kb4]', kb5='$_POST[kb5]', kb6='$_POST[kb6]', kb7='$_POST[kb7]', kb8='$_POST[kb8]', kb9='$_POST[kb9]', kb10='$_POST[kb10]', kb11='$_POST[kb11]' WHERE id_dospem='$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE dospem SET nama_dospem='$_POST[nama]',nomorhp='$_POST[nomorhp]',alamat='$_POST[alamat]',jabatan='$_POST[jabatan]', ka1='$_POST[ka1]', ka2='$_POST[ka2]', ka3='$_POST[ka3]', ka4='$_POST[ka4]', kb1='$_POST[kb1]', kb2='$_POST[kb2]', kb3='$_POST[kb3]', kb4='$_POST[kb4]', kb5='$_POST[kb5]', kb6='$_POST[kb6]', kb7='$_POST[kb7]', kb8='$_POST[kb8]', kb9='$_POST[kb9]', kb10='$_POST[kb10]', kb11='$_POST[kb11]' WHERE id_dospem='$_GET[id]'");
                    }
                    echo "<script>alert('Data Dosen berhasil Dibuah');</script>";
                    echo "<script>location='dospem.php';</script>";
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
