<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head.php' ?>
<style>
        .bg-warning {
            background-color: #FFD700; 
        }
    </style>
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
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                           $is_a1_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a1']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a1'] != $pecah['a1'];
                           $is_a2_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a2']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a2'] != $pecah['a2'];
                           $is_a3_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a3']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a3'] != $pecah['a3'];
                           $is_a4_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a4']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['a4'] != $pecah['a4'];
                           $is_b1_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b1']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b1'] != $pecah['b1'];
                           $is_b2_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b2']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b2'] != $pecah['b2'];
                           $is_b3_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b3']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b3'] != $pecah['b3'];
                           $is_b4_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b4']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b4'] != $pecah['b4'];
                           $is_b5_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b5']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b5'] != $pecah['b5'];
                           $is_b6_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b6']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b6'] != $pecah['b6'];
                           $is_b7_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b7']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b7'] != $pecah['b7'];
                           $is_b8_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b8']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b8'] != $pecah['b8'];
                           $is_b9_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b9']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b9'] != $pecah['b9'];
                           $is_b10_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b10']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b10'] != $pecah['b10'];
                           $is_b11_changed = isset($_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b11']) && $_SESSION['nilai_sebelumnya'][$pecah['id_nilai']]['b11'] != $pecah['b11'];
                          
                          ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['nama']; ?></td>
                            <td><?php echo $pecah['judul']; ?></td>
                            <td class="<?php echo $is_a1_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['a1']; ?></td>
                            <td class="<?php echo $is_a2_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['a2']; ?></td>
                            <td class="<?php echo $is_a3_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['a3']; ?></td>
                            <td class="<?php echo $is_a4_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['a4']; ?></td>
                            <td class="<?php echo $is_b1_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b1']; ?></td>
                            <td class="<?php echo $is_b2_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b2']; ?></td>
                            <td class="<?php echo $is_b3_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b3']; ?></td>
                            <td class="<?php echo $is_b4_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b4']; ?></td>
                            <td class="<?php echo $is_b5_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b5']; ?></td>
                            <td class="<?php echo $is_b6_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b6']; ?></td>
                            <td class="<?php echo $is_b7_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b7']; ?></td>
                            <td class="<?php echo $is_b8_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b8']; ?></td>
                            <td class="<?php echo $is_b9_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b9']; ?></td>
                            <td class="<?php echo $is_b10_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b10']; ?></td>
                            <td class="<?php echo $is_b11_changed ? 'bg-warning' : ''; ?>"><?php echo $pecah['b11']; ?></td>
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