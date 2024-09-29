<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.0/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.0/dist/sweetalert2.min.js"></script>
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
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <li>
              <a href="./dospem.php">
                <i class="nc-icon nc-chart-pie-36"></i>
                <p>Data Semua Dosen</p>
              </a>
            </li>
          <?php if (isset($_SESSION['dosen'])) { ?>
            <li class="active">
              <a href="./dosen.php">
                <i class="nc-icon nc-single-02"></i>
                <p>Data Dosen</p>
              </a>
            </li>
          <?php } ?>

          <li>
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
                <h4 class="card-title">Data Dosen
                <img src="../images/gap.png" alt="Deskripsi gambar" class="img-fluid" style="width: 30%; margin-left: 50px;">
                </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Foto</label>
                          <input type="file" class="form-control" name="foto" required onchange="previewImage(event)">
                          <!-- <img id="file-preview" src="" alt="Masukkan Foto" style="margin-top:10px; max-width:150px; max-height:150px; height:auto;"> -->
                        </div>
                        <div class="col-md-6">
                          <label>Telepon</label>
                          <input type="number" class="form-control" name="nomorhp" required placeholder="Harus berupa angka" value="<?php echo isset($_POST['nomorhp']) ? htmlspecialchars($_POST['nomorhp']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label>Alamat</label>
                          <input type="text" class="form-control" name="alamat" required placeholder="Isi alamat lengkap..." value="<?php echo isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label>Jabatan Fungsional</label>
                          <input type="text" class="form-control" name="jabatan" required placeholder="Isi jabatan..." value="<?php echo isset($_POST['jabatan']) ? htmlspecialchars($_POST['jabatan']) : ''; ?>">
                        </div>
                      </div>

                      <h5 class="mt-4">Bidang Keahlian</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="ka1">Teknik Elektro (A1)</label>
                          <input type="number" class="form-control" name="ka1" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['ka1']) ? htmlspecialchars($_POST['ka1']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="ka2">Teknologi Informasi (A2)</label>
                          <input type="number" class="form-control" name="ka2" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['ka2']) ? htmlspecialchars($_POST['ka2']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="ka3">Ilmu Komputer (A3)</label>
                          <input type="number" class="form-control" name="ka3" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['ka3']) ? htmlspecialchars($_POST['ka3']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="ka4">Cyber Security (A4)</label>
                          <input type="number" class="form-control" name="ka4" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['ka4']) ? htmlspecialchars($_POST['ka4']) : ''; ?>">
                        </div>
                      </div>

                      <h5 class="mt-4">Mata Kuliah</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="kb1">Mobile Programming (B1)</label>
                          <input type="number" class="form-control" name="kb1" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb1']) ? htmlspecialchars($_POST['kb1']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb2">Web Programming (B2)</label>
                          <input type="number" class="form-control" name="kb2" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb2']) ? htmlspecialchars($_POST['kb2']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb3">Administrasi Database (B3)</label>
                          <input type="number" class="form-control" name="kb3" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb3']) ? htmlspecialchars($_POST['kb3']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb4">Cyber Security (B4)</label>
                          <input type="number" class="form-control" name="kb4" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb4']) ? htmlspecialchars($_POST['kb4']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb5">Internet Of Things (IoT) (B5)</label>
                          <input type="number" class="form-control" name="kb5" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb5']) ? htmlspecialchars($_POST['kb5']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb6">Jaringan Komputer (B6)</label>
                          <input type="number" class="form-control" name="kb6" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb6']) ? htmlspecialchars($_POST['kb6']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb7">Big Data (B7)</label>
                          <input type="number" class="form-control" name="kb7" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb7']) ? htmlspecialchars($_POST['kb7']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb8">Machine Learning (B8)</label>
                          <input type="number" class="form-control" name="kb8" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb8']) ? htmlspecialchars($_POST['kb8']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb9">Manajemen Teknologi Informasi (B9)</label>
                          <input type="number" class="form-control" name="kb9" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb9']) ? htmlspecialchars($_POST['kb9']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb10">Software Engineering (B10)</label>
                          <input type="number" class="form-control" name="kb10" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb10']) ? htmlspecialchars($_POST['kb10']) : ''; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="kb11">Rekayasa Perangkat Lunak (B11)</label>
                          <input type="number" class="form-control" name="kb11" min="1" max="5" placeholder="Nilai 1 - 5" value="<?php echo isset($_POST['kb11']) ? htmlspecialchars($_POST['kb11']) : ''; ?>">
                        </div>
                      </div>

                      <button name="save" class="btn btn-primary mt-4">Simpan Data</button>
                    </form>

                    <?php
                    if (isset($_POST['save'])) {
                      $nama = $_FILES['foto']['name'];
                      $lokasi = $_FILES['foto']['tmp_name'];
                      move_uploaded_file($lokasi, "../foto_dospem/" . $nama);

                      $koneksi->query("INSERT INTO dospem(nama_dospem, nomorhp, alamat, jabatan, foto, ka1, ka2, ka3, ka4, kb1, kb2, kb3, kb4, kb5, kb6, kb7, kb8, kb9, kb10, kb11) 
                      VALUES('$_POST[nama]','$_POST[nomorhp]','$_POST[alamat]','$_POST[jabatan]','$nama','$_POST[ka1]','$_POST[ka2]','$_POST[ka3]','$_POST[ka4]','$_POST[kb1]',
                      '$_POST[kb2]','$_POST[kb3]','$_POST[kb4]','$_POST[kb5]','$_POST[kb6]','$_POST[kb7]','$_POST[kb8]','$_POST[kb9]','$_POST[kb10]','$_POST[kb11]')");

                      echo "<script>
                        Swal.fire({
                          title: 'Data Tersimpan!',
                          text: 'Data dosen telah berhasil disimpan.',
                          icon: 'success',
                          showConfirmButton: false,
                          timer: 2000
                        });
                      </script>";

                      echo "<meta http-equiv='refresh' content='2;url=dosen.php'>";
                    }
                    ?>
                  </div>
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