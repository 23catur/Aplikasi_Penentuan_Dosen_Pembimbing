<?php include 'koneksi2.php';

if (isset($_SESSION['user'])) {
  $id_mahasiswa = $_SESSION["id_mahasiswa"];
  $ambil = $koneksi->query("SELECT * from nilai_mahasiswa,mahasiswa WHERE nilai_mahasiswa.id_mahasiswa='$id_mahasiswa' and mahasiswa.id_mahasiswa='$id_mahasiswa'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php' ?>
</head>

<body>
  <?php include 'includes/navbar.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="listdospem.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hitung Profile Matching <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Proses Profile Matching</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Proses Perhitungan</span>
          <h2 class="mb-4">Data Nilai Mahasiswa</h2>
        </div>
      </div>

      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Nilai Kriteria Dosen</p>
            <thead class=" text-primary">
              <th class="text-center">No</th>
              <th class="text-center">Dosen</th>
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
            </thead>
            <tbody class="text-center">
              <?php $nomor = 1; ?>
              <?php $ambil = $koneksi->query("SELECT * FROM dospem ORDER BY id_dospem ASC"); ?>
              <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_dospem']; ?></td>
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
                </tr>
                <?php $nomor++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari GAP</p>
            <thead class=" text-primary">
              <th class="text-center">No</th>
              <th class="text-center">Dosen</th>
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
            </thead>
            <tbody class="text-center">

              <?php $nomor = 1; ?>
              <?php
              $id_mahasiswa = $_SESSION["id_mahasiswa"];
              $ambil = $koneksi->query("SELECT * FROM dospem, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_dospem ASC");
              $gapa1 = 0;
              $gapa2 = 0;
              $gapa3 = 0;
              $gapa4 = 0;
              $gapb1 = 0;
              $gapb2 = 0;
              $gapb3 = 0;
              $gapb4 = 0;
              $gapb5 = 0;
              $gapb6 = 0;
              $gapb7 = 0;
              $gapb8 = 0;
              $gapb9 = 0;
              $gapb10 = 0;
              $gapb11 = 0;
              ?>
              <?php while ($pecah = $ambil->fetch_assoc()) {
                $gapa1 = floatval($pecah['ka1']) - floatval($pecah['a1']);
                $gapa2 = floatval($pecah['ka2']) - floatval($pecah['a2']);
                $gapa3 = floatval($pecah['ka3']) - floatval($pecah['a3']);
                $gapa4 = floatval($pecah['ka4']) - floatval($pecah['a4']);
                $gapb1 = floatval($pecah['kb1']) - floatval($pecah['b1']);
                $gapb2 = floatval($pecah['kb2']) - floatval($pecah['b2']);
                $gapb3 = floatval($pecah['kb3']) - floatval($pecah['b3']);
                $gapb4 = floatval($pecah['kb4']) - floatval($pecah['b4']);
                $gapb5 = floatval($pecah['kb5']) - floatval($pecah['b5']);
                $gapb6 = floatval($pecah['kb6']) - floatval($pecah['b6']);
                $gapb7 = floatval($pecah['kb7']) - floatval($pecah['b7']);
                $gapb8 = floatval($pecah['kb8']) - floatval($pecah['b8']);
                $gapb9 = floatval($pecah['kb9']) - floatval($pecah['b9']);
                $gapb10 = floatval($pecah['kb10']) - floatval($pecah['b10']);
                $gapb11 = floatval($pecah['kb11']) - floatval($pecah['b11']);

              ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_dospem']; ?></td>
                  <td><?php echo $gapa1; ?></td>
                  <td><?php echo $gapa2; ?></td>
                  <td><?php echo $gapa3; ?></td>
                  <td><?php echo $gapa4; ?></td>
                  <td><?php echo $gapb1; ?></td>
                  <td><?php echo $gapb2; ?></td>
                  <td><?php echo $gapb3; ?></td>
                  <td><?php echo $gapb4; ?></td>
                  <td><?php echo $gapb5; ?></td>
                  <td><?php echo $gapb6; ?></td>
                  <td><?php echo $gapb7; ?></td>
                  <td><?php echo $gapb8; ?></td>
                  <td><?php echo $gapb9; ?></td>
                  <td><?php echo $gapb10; ?></td>
                  <td><?php echo $gapb11; ?></td>
                </tr>
                <?php $nomor++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari Nilai Bobot</p>
            <thead class="text-primary">
              <th class="text-center">No</th>
              <th class="text-center">Dosen</th>
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
            </thead>
            <tbody class="text-center">
              <?php $nomor = 1; ?>
              <?php
              $ambil = $koneksi->query("SELECT * FROM dospem, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_dospem ASC");
              function calculateWeight($gap)
              {
                switch ($gap) {
                  case 0:
                    return 5;
                  case 1:
                    return 4.5;
                  case -1:
                    return 4;
                  case 2:
                    return 3.5;
                  case -2:
                    return 3;
                  case 3:
                    return 2.5;
                  case -3:
                    return 2;
                  case 4:
                    return 1.5;
                  case -4:
                    return 1;
                  default:
                    return "-";
                }
              }

              while ($pecah = $ambil->fetch_assoc()) {
                $gaps = [
                  calculateWeight(floatval($pecah['ka1']) - floatval($pecah['a1'])),
                  calculateWeight(floatval($pecah['ka2']) - floatval($pecah['a2'])),
                  calculateWeight(floatval($pecah['ka3']) - floatval($pecah['a3'])),
                  calculateWeight(floatval($pecah['ka4']) - floatval($pecah['a4'])),
                  calculateWeight(floatval($pecah['kb1']) - floatval($pecah['b1'])),
                  calculateWeight(floatval($pecah['kb2']) - floatval($pecah['b2'])),
                  calculateWeight(floatval($pecah['kb3']) - floatval($pecah['b3'])),
                  calculateWeight(floatval($pecah['kb4']) - floatval($pecah['b4'])),
                  calculateWeight(floatval($pecah['kb5']) - floatval($pecah['b5'])),
                  calculateWeight(floatval($pecah['kb6']) - floatval($pecah['b6'])),
                  calculateWeight(floatval($pecah['kb7']) - floatval($pecah['b7'])),
                  calculateWeight(floatval($pecah['kb8']) - floatval($pecah['b8'])),
                  calculateWeight(floatval($pecah['kb9']) - floatval($pecah['b9'])),
                  calculateWeight(floatval($pecah['kb10']) - floatval($pecah['b10'])),
                  calculateWeight(floatval($pecah['kb11']) - floatval($pecah['b11']))
                ];
              ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_dospem']; ?></td>
                  <?php foreach ($gaps as $bobot) { ?>
                    <td><?php echo $bobot; ?></td>
                  <?php } ?>
                </tr>
                <?php $nomor++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php
      function getBobot($gap)
      {
        switch ($gap) {
          case '0':
            return 5;
          case '1':
            return 4.5;
          case '-1':
            return 4;
          case '2':
            return 3.5;
          case '-2':
            return 3;
          case '3':
            return 2.5;
          case '-3':
            return 2;
          case '4':
            return 1.5;
          case '-4':
            return 1;
          default:
            return "-";
        }
      }
      ?>

      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari Hasil Perhitungan</p>
            <thead class=" text-primary">
              <th class="text-center">Nomor</th>
              <th class="text-center">Dosen</th>
              <th class="text-center">N Kriteria Bidang Keahlian</th>
              <th class="text-center">N Kriteria Matakuliah</th>
            </thead>
            <tbody class="text-center">
              <?php $nomor = 1; ?>
              <?php $ambil = $koneksi->query("SELECT * FROM dospem, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_dospem ASC"); ?>
              <?php while ($pecah = $ambil->fetch_assoc()) {
                $gapa1 = floatval($pecah['ka1']) - floatval($pecah['a1']);
                $gapa2 = floatval($pecah['ka2']) - floatval($pecah['a2']);
                $gapa3 = floatval($pecah['ka3']) - floatval($pecah['a3']);
                $gapa4 = floatval($pecah['ka4']) - floatval($pecah['a4']);
                $gapb1 = floatval($pecah['kb1']) - floatval($pecah['b1']);
                $gapb2 = floatval($pecah['kb2']) - floatval($pecah['b2']);
                $gapb3 = floatval($pecah['kb3']) - floatval($pecah['b3']);
                $gapb4 = floatval($pecah['kb4']) - floatval($pecah['b4']);
                $gapb5 = floatval($pecah['kb5']) - floatval($pecah['b5']);
                $gapb6 = floatval($pecah['kb6']) - floatval($pecah['b6']);
                $gapb7 = floatval($pecah['kb7']) - floatval($pecah['b7']);
                $gapb8 = floatval($pecah['kb8']) - floatval($pecah['b8']);
                $gapb9 = floatval($pecah['kb9']) - floatval($pecah['b9']);
                $gapb10 = floatval($pecah['kb10']) - floatval($pecah['b10']);
                $gapb11 = floatval($pecah['kb11']) - floatval($pecah['b11']);

                $bobota1 = getBobot($gapa1);
                $bobota2 = getBobot($gapa2);
                $bobota3 = getBobot($gapa3);
                $bobota4 = getBobot($gapa4);
                $bobotb1 = getBobot($gapb1);
                $bobotb2 = getBobot($gapb2);
                $bobotb3 = getBobot($gapb3);
                $bobotb4 = getBobot($gapb4);
                $bobotb5 = getBobot($gapb5);
                $bobotb6 = getBobot($gapb6);
                $bobotb7 = getBobot($gapb7);
                $bobotb8 = getBobot($gapb8);
                $bobotb9 = getBobot($gapb9);
                $bobotb10 = getBobot($gapb10);
                $bobotb11 = getBobot($gapb11);

                $cf1 = (($bobota1 + $bobota2 + $bobota3 + $bobota4) / 2);
                $cf2 = (($bobotb1 + $bobotb2 + $bobotb3 + $bobotb4 + $bobotb5 + $bobotb6 + $bobotb7 + $bobotb8 + $bobotb9 + $bobotb10 + $bobotb11) / 2);

                $n1 = $cf1;
                $n2 = $cf2;
              ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_dospem']; ?></td>
                  <td><?php echo $n1; ?></td>
                  <td><?php echo $n2; ?></td>
                </tr>
                <?php $nomor++; ?>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="2" class="text-center">Persentase Penilaian</th>
                <th class="text-center">50%</th>
                <th class="text-center">50%</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>


      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Hasil Perankingan</p>
            <thead class=" text-primary">
              <th class="text-center">No</th>
              <th class="text-center">Dosen</th>
              <th class="text-center">Jabatan Fungsional</th>
              <th class="text-center">Hasil Akhir</th>
            </thead>
            <tbody class="text-center">
              <?php
              $nomor = 1;
              $ambil = $koneksi->query("SELECT * FROM dospem, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_dospem ASC");

              while ($pecah = $ambil->fetch_assoc()) {
                $gapa1 = floatval($pecah['ka1']) - floatval($pecah['a1']);
                $gapa2 = floatval($pecah['ka2']) - floatval($pecah['a2']);
                $gapa3 = floatval($pecah['ka3']) - floatval($pecah['a3']);
                $gapa4 = floatval($pecah['ka4']) - floatval($pecah['a4']);

                $bobota1 = getBobot($gapa1);
                $bobota2 = getBobot($gapa2);
                $bobota3 = getBobot($gapa3);
                $bobota4 = getBobot($gapa4);

                $gapb1 = floatval($pecah['kb1']) - floatval($pecah['b1']);
                $gapb2 = floatval($pecah['kb2']) - floatval($pecah['b2']);
                $gapb3 = floatval($pecah['kb3']) - floatval($pecah['b3']);
                $gapb4 = floatval($pecah['kb4']) - floatval($pecah['b4']);
                $gapb5 = floatval($pecah['kb5']) - floatval($pecah['b5']);
                $gapb6 = floatval($pecah['kb6']) - floatval($pecah['b6']);
                $gapb7 = floatval($pecah['kb7']) - floatval($pecah['b7']);
                $gapb8 = floatval($pecah['kb8']) - floatval($pecah['b8']);
                $gapb9 = floatval($pecah['kb9']) - floatval($pecah['b9']);
                $gapb10 = floatval($pecah['kb10']) - floatval($pecah['b10']);
                $gapb11 = floatval($pecah['kb11']) - floatval($pecah['b11']);

                $bobotb1 = getBobot($gapb1);
                $bobotb2 = getBobot($gapb2);
                $bobotb3 = getBobot($gapb3);
                $bobotb4 = getBobot($gapb4);
                $bobotb5 = getBobot($gapb5);
                $bobotb6 = getBobot($gapb6);
                $bobotb7 = getBobot($gapb7);
                $bobotb8 = getBobot($gapb8);
                $bobotb9 = getBobot($gapb9);
                $bobotb10 = getBobot($gapb10);
                $bobotb11 = getBobot($gapb11);

                $cf1 = ((floatval($bobota1) + floatval($bobota2) + floatval($bobota3) + floatval($bobota4)) / 2);
                $cf2 = ((floatval($bobotb1) + floatval($bobotb2) + floatval($bobotb3) + floatval($bobotb4) + floatval($bobotb5) + floatval($bobotb6) + floatval($bobotb7) + floatval($bobotb8) + floatval($bobotb9) + floatval($bobotb10) + floatval($bobotb11)) / 2);

                $n1 = ($cf1);
                $n2 = ($cf2);
                $rank = ($n1 * 0.50) + ($n2 * 0.50);
                $nama_dospem = $pecah['nama_dospem'];

                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date("Y-m-d h:i");
                $koneksi->query("INSERT INTO hasilhitung(id_mahasiswa, nama_dospem,hasil,tanggal) 
                        VALUES('$id_mahasiswa','$nama_dospem','$rank','$tanggal')");
              ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_dospem']; ?></td>
                  <td><?php echo $pecah['jabatan']; ?></td>
                  <td><?php echo $rank; ?></td>
                </tr>
              <?php
                $nomor++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    </div>
    </div>
  </section>

  <?php include 'includes/footer.php' ?>
  <?php include 'includes/loader.php' ?>

</body>

</html>