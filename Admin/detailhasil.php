<?php include 'koneksi2.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php' ?>
    <script src="../js/Chart.js"></script>
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
                      <th class="text-center">Ranking</th>
                      <th class="text-center">Rekomendasi Dosen Pembimbing</th>
                      <th class="text-center">Jabatan Fungsional</th>
                      <th class="text-center">Nilai</th>
                    </thead>
                    <tbody>
                      <?php 
                      $nomor = 1; 
                      $ambil = $koneksi->query("SELECT hasilhitung.*, dospem.jabatan 
                          FROM hasilhitung 
                          JOIN dospem ON dospem.nama_dospem = hasilhitung.nama_dospem 
                          WHERE hasilhitung.tanggal = '$_GET[tanggal]' 
                          ORDER BY hasilhitung.hasil DESC");

                      if (!$ambil) {
                          die("Query Error: " . $koneksi->error);
                      }
                      ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <tr>
                        <td class="text-center"><?php echo $nomor; ?></td>
                        <td class="text-center"><?php echo $pecah['nama_dospem']; ?></td>
                        <td class="text-center"><?php echo $pecah['jabatan']; ?></td>
                        <td class="text-center"><?php echo $pecah['hasil']; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

             <!-- Tabel Baru untuk Peringkat 1 dan 2 -->
             <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekomendasi Dosen Pembimbing</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th class="text-center">Pembimbing</th>
                      <th class="text-center">Dosen Pembimbing</th>
                      <th class="text-center">Jabatan Fungsional</th>
                      <th class="text-center">Nilai</th>
                    </thead>
                    <tbody>
                      <?php 
                      $peringkat_ambil = $koneksi->query("SELECT top_results.*, dospem.jabatan 
                                  FROM (
                                      SELECT * 
                                      FROM hasilhitung 
                                      WHERE tanggal = '$_GET[tanggal]' 
                                      ORDER BY hasil DESC 
                                      LIMIT 2
                                  ) AS top_results
                                  JOIN dospem ON dospem.nama_dospem = top_results.nama_dospem 
                                  ORDER BY 
                                      CASE dospem.jabatan 
                                          WHEN 'Professor' THEN 1
                                          WHEN 'Lektor Kepala' THEN 2
                                          WHEN 'Lektor' THEN 3
                                          WHEN 'Asisten Ahli' THEN 4
                                          ELSE 5
                                      END, 
                                      top_results.hasil DESC;
                                  ");

                      if (!$peringkat_ambil) {
                          die("Query Error: " . $koneksi->error);
                      }

                      $nomor = 1;
                      while ($peringkat = $peringkat_ambil->fetch_assoc()) { ?>
                      <tr>
                        <td class="text-center"><?php echo $nomor; ?></td>
                        <td class="text-center"><?php echo $peringkat['nama_dospem']; ?></td>
                        <td class="text-center"><?php echo $peringkat['jabatan']; ?></td>
                        <td class="text-center"><?php echo $peringkat['hasil']; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Akhir Tabel Baru untuk Peringkat 1 dan 2 -->


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
