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
          <!-- <p>CT</p> -->
        </a>
        
        <a href="index.php" class="simple-text logo-normal">
          Penentuan DosPem
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
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
          <li>
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
                <h4 class="card-title">Nilai Akademik</h4>
              </div>
              <div class="card-body">
                <div class="col-md-8">
                    <p>Keterangan Singkatan: <br>
                        Kriteria Bidang Keahlian : A <br>
                        Kriteria Matakuliah : B <br>
                    </p>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Mahasiswa</th>
                      <th class="text-center">Judul</th>
                      <th class="text-center">A1</th>
                      <th class="text-center">A2</th>
                      <th class="text-center">A3</th>
                      <th class="text-center">A4</th>
                      <th class="text-center">B1</th>
                      <th class="text-center">B2</th>
                      <th class="text-center">B3</th>
                      <th class="text-center">B4</th>
                      <th class="text-center">B5</th>
                      <th class="text-center">B6</th>
                      <th class="text-center">B7</th>
                      <th class="text-center">B8</th>
                      <th class="text-center">B9</th>
                      <th class="text-center">B10</th>
                      <th class="text-center">B11</th>
                      <th class="text-center">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM mahasiswa JOIN nilai_mahasiswa ON mahasiswa.id_mahasiswa=nilai_mahasiswa.id_mahasiswa ORDER BY id_nilai ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['nama']; ?></td>
                            <td><?php echo $pecah['judul']; ?></td>
                            <td><?php echo $pecah['a1']; ?></td>
                            <td><?php echo $pecah['a2']; ?></td>
                            <td><?php echo $pecah['a3']; ?></td>
                            <td><?php echo $pecah['a4']; ?></td>
                            <td><?php echo $pecah['b1']; ?></td>
                            <td><?php echo $pecah['b2']; ?></td>
                            <td><?php echo $pecah['b3']; ?></td>
                            <td><?php echo $pecah['b4']; ?></td>
                            <td><?php echo $pecah['b5']; ?></td>
                            <td><?php echo $pecah['b6']; ?></td>
                            <td><?php echo $pecah['b7']; ?></td>
                            <td><?php echo $pecah['b8']; ?></td>
                            <td><?php echo $pecah['b9']; ?></td>
                            <td><?php echo $pecah['b10']; ?></td>
                            <td><?php echo $pecah['b11']; ?></td>
                            <td><a href="ubahdatanilai.php?id=<?php echo $pecah["id_nilai"] ?>"><button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button></a>
                            <a href="hapusdatamahasiswa.php?id=<?php echo $pecah["id_nilai"] ?>"><button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button></a></td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                  </table>
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