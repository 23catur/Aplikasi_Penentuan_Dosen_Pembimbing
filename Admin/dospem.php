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
          <?php if (isset($_SESSION['dosen'])) { ?>
            <li>
              <a href="./dosen.php">
                <i class="nc-icon nc-chart-pie-36"></i>
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
                <h4 class="card-title">Daftar Dosen Pembimbing Beserta Nilai Kriteria</h4>
              </div>
              <div class="card-body">
              <div class="card-body">
                <div class="col-md-8">
                    <div class="update ml-auto mr-auto">
                    <?php if (isset($_SESSION['admin'])) {  ?>
                            <a href="adddatadospem.php"> <button type="submit" class="btn btn-primary btn-round">Tambah Data Dosen Pembimbing</button></a>
                        <?php } ?>                    </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">No</th>
                      <th class="text-center">Foto</th>
                      <th class="text-center">Dosen</th>
                      <th class="text-center">Telepon</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">jabatan Fungsional</th>
                      <th class="text-center">ka1</th>
                      <th class="text-center">ka2</th>
                      <th class="text-center">ka3</th>
                      <th class="text-center">ka4</th>
                      <!-- <th class="text-center">ka5</th> -->
                      <th class="text-center">kb1</th>
                      <th class="text-center">kb2</th>
                      <th class="text-center">kb3</th>
                      <th class="text-center">kb4</th>
                      <th class="text-center">kb5</th>
                      <th class="text-center">kb6</th>
                      <th class="text-center">kb7</th>
                      <th class="text-center">kb8</th>
                      <th class="text-center">kb9</th>
                      <th class="text-center">kb10</th>
                      <th class="text-center">kb11</th>
                      <!-- <th class="text-center">kb12</th>
                      <th class="text-center">kb13</th>
                      <th class="text-center">kb14</th>
                      <th class="text-center">kb15</th> -->
                      <th class="text-center">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM dospem ORDER BY id_dospem ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><img src="../foto_dospem/<?php echo $pecah['foto']; ?>" width="60" height="60"></td>
                            <td><?php echo $pecah['nama_dospem']; ?></td>
                            <td><?php echo $pecah['nomorhp']; ?></td>
                            <td><?php echo $pecah['alamat']; ?></td>
                            <td><?php echo $pecah['jabatan']; ?></td>
                            <td><?php echo $pecah['ka1']; ?></td>
                            <td><?php echo $pecah['ka2']; ?></td>
                            <td><?php echo $pecah['ka3']; ?></td>
                            <td><?php echo $pecah['ka4']; ?></td>
                            <td><?php echo $pecah['kb1']; ?></td>
                            <td><?php echo $pecah['kb2']; ?></td>
                            <td><?php echo $pecah['kb3']; ?></td>
                            <td><?php echo $pecah['kb4']; ?></td>
                            <td><?php echo $pecah['kb5']; ?></td>
                            <td><?php echo $pecah['kb6']; ?></td>
                            <td><?php echo $pecah['kb7']; ?></td>
                            <td><?php echo $pecah['kb8']; ?></td>
                            <td><?php echo $pecah['kb9']; ?></td>
                            <td><?php echo $pecah['kb10']; ?></td>
                            <td><?php echo $pecah['kb11']; ?></td>
                            <td>
                            <?php if (isset($_SESSION['admin'])) {  ?>
                              <a href="ubahdatadospem.php?id=<?php echo $pecah["id_dospem"] ?>">
                                        <button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button>
                                    </a>
                                    <a href="hapusdatanilai.php?id=<?php echo $pecah["id_dospem"] ?>">
                                        <button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button>
                                    </a>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-secondary btn-round" disabled><i class="nc-icon nc-settings"></i></button>
                                    <button type="button" class="btn btn-secondary btn-round" disabled><i class="nc-icon nc-basket"></i></button>
                                <?php } ?>
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
</body>

</html>