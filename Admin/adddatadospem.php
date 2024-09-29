<?php include 'koneksi.php' ?>

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
              <p>Data Semua Dosen</p>
            </a>
          </li>
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
                <h4 class="card-title">Tambah Data Dosen Pembimbing
                <img src="../images/gap.png" alt="Deskripsi gambar" class="img-fluid" style="width: 30%; margin-left: 50px;">
                </h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Dosen Pembimbing</label>
                        <input type="text" class="form-control" name="nama" required placeholder="Isi nama dosen...">
                      </div>
                      <div class="form-group">
                          <label>Foto</label>
                          <input type="file" class="form-control" name="foto" required onchange="previewImage(event)">
                          <img id="file-preview" src="" alt="Masukkan Foto" style="margin-top:10px; max-width:150px; max-height:150px; height:auto;">
                      </div>

                      <script>
                          function previewImage(event) {
                              var reader = new FileReader();
                              reader.onload = function(){
                                  var output = document.getElementById('file-preview');
                                  output.src = reader.result;
                              };
                              reader.readAsDataURL(event.target.files[0]);
                          }
                      </script>

                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="nomorhp" required placeholder="Harus berupa angka">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required placeholder="Isi alamat lengkap...">
                      </div>
                      <div class="form-group">
                        <label>Jabatan Fungsional</label>
                        <input type="text" class="form-control" name="jabatan" required placeholder="Isi jabatan...">
                      </div>
                      <div class="form-group">
                        <label>Teknik Elektro (a1)</label>
                        <input type="number" class="form-control" name="ka1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Teknologi Informasi (a2)</label>
                        <input type="number" class="form-control" name="ka2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Ilmu Komputer (a3)</label>
                        <input type="number" class="form-control" name="ka3" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Cyber Security (a4)</label>
                        <input type="number" class="form-control" name="ka4" required placeholder="Berisi angka 1-5">
                      </div>
                      <!-- <div class="form-group">
                        <label>- (a5)</label>
                        <input type="number" class="form-control" name="ka5" required placeholder="Berisi angka 1-5">
                      </div> -->
                      <div class="form-group">
                        <label>Mobile Programming (b1)</label>
                        <input type="number" class="form-control" name="kb1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Web Programming (b2)</label>
                        <input type="number" class="form-control" name="kb2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Administrasi Database (b3)</label>
                        <input type="number" class="form-control" name="kb3" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Cyber Security (b4)</label>
                        <input type="number" class="form-control" name="kb4" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Internet Of Thing (IoT) (b5)</label>
                        <input type="number" class="form-control" name="kb5" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Jaringan Komputer (b6)</label>
                        <input type="number" class="form-control" name="kb6" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Big Data (b7)</label>
                        <input type="number" class="form-control" name="kb7" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Machine Learning (b8)</label>
                        <input type="number" class="form-control" name="kb8" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Manajemen Teknologi Informasi (b9)</label>
                        <input type="number" class="form-control" name="kb9" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Software Engineering (b10)</label>
                        <input type="number" class="form-control" name="kb10" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Rekayasa Perangkat Lunak (b11)</label>
                        <input type="number" class="form-control" name="kb11" required placeholder="Berisi angka 1-5">
                      </div>
                      <!-- <div class="form-group">
                        <label>- (b12)</label>
                        <input type="number" class="form-control" name="kb12" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>- (b13)</label>
                        <input type="number" class="form-control" name="kb13" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>- (b14)</label>
                        <input type="number" class="form-control" name="kb14" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>- (b15)</label>
                        <input type="number" class="form-control" name="kb15" required placeholder="Berisi angka 1-5">
                      </div> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="save">Simpan</button>
                    </div>
                  </div>
                </form>

                <!-- database -->
                <?php
                if (isset($_POST['save'])) {
                    $nama = $_FILES['foto']['name'];
                    $lokasi = $_FILES['foto']['tmp_name'];
                    move_uploaded_file($lokasi, "../foto_dospem/" . $nama);
                    $koneksi->query("INSERT INTO dospem(nama_dospem,nomorhp,alamat,jabatan,foto,ka1,ka2,ka3,ka4,kb1,kb2,kb3,kb4,kb5,kb6,kb7,kb8,kb9,kb10,kb11) 
                      VALUES('$_POST[nama]','$_POST[nomorhp]','$_POST[alamat]','$_POST[jabatan]','$nama','$_POST[ka1]','$_POST[ka2]','$_POST[ka3]','$_POST[ka4]','$_POST[kb1]',
                      '$_POST[kb2]','$_POST[kb3]','$_POST[kb4]','$_POST[kb5]','$_POST[kb6]','$_POST[kb7]','$_POST[kb8]','$_POST[kb9]','$_POST[kb10]','$_POST[kb11]')");
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=dospem.php'>";
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
