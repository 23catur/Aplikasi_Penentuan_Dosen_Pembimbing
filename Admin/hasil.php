<?php include 'koneksi2.php' ?>

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
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a href="./dospem.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data DosPem</p>
            </a>
          </li>
          <li>
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li class="active">
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
                <h4 class="card-title">Riwayat Perhitungan Mahasiswa</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">No</th>
                      <th class="text-center">Tanggal Perhitungan</th>
                      <th class="text-center">Nama Mahasiswa</th>
                      <th class="text-center">Judul</th>
                      <th class="text-center">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT mahasiswa.nama, hasilhitung.tanggal, nilai_mahasiswa.judul FROM mahasiswa JOIN hasilhitung ON mahasiswa.id_mahasiswa=hasilhitung.id_mahasiswa JOIN nilai_mahasiswa ON nilai_mahasiswa.id_mahasiswa = hasilhitung.id_mahasiswa GROUP BY tanggal"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['tanggal']; ?></td>
                            <td><?php echo $pecah['nama']; ?></td>
                            <td><?php echo $pecah['judul']; ?></td>
                            <td>
                              <a href="detailhasil.php?tanggal=<?php echo $pecah["tanggal"] ?>"><button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-paper"></i></button></a>
                              <a href="hapushasilhitung.php?tanggal=<?php echo $pecah["tanggal"] ?>"><button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button></a>
                            </td>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
