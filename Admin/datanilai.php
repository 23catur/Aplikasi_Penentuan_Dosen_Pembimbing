<?php
include 'koneksi.php';

if (!isset($_SESSION)) {
    session_start();
}

function checkChange($id, $field, $currentValue)
{
    if (isset($_SESSION['nilai_sebelumnya'][$id][$field]) && $_SESSION['nilai_sebelumnya'][$id][$field] != $currentValue) {
        return 'bg-warning';
    }
    return '';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_nilai = $_POST['id_nilai'];
    $nilai_a1 = $_POST['a1'];
    $nilai_a2 = $_POST['a2'];
    $nilai_a3 = $_POST['a3'];
    $nilai_a4 = $_POST['a4'];
    $nilai_b1 = $_POST['b1'];
    $nilai_b2 = $_POST['b2'];
    $nilai_b3 = $_POST['b3'];
    $nilai_b4 = $_POST['b4'];
    $nilai_b5 = $_POST['b5'];
    $nilai_b6 = $_POST['b6'];
    $nilai_b7 = $_POST['b7'];
    $nilai_b8 = $_POST['b8'];
    $nilai_b9 = $_POST['b9'];
    $nilai_b10 = $_POST['b10'];
    $nilai_b11 = $_POST['b11'];


    $query = "UPDATE nilai_mahasiswa SET a1 = '$nilai_a1', a2 = '$nilai_a2', a3 = '$nilai_a3', a4 = '$nilai_a4'
    , b1 = '$nilai_b1', b2 = '$nilai_b2', b3 = '$nilai_b3', b4 = '$nilai_b4', b5 = '$nilai_b5', b6 = '$nilai_b6'
    , b7 = '$nilai_b7', b8 = '$nilai_b8', b9 = '$nilai_b9', b10 = '$nilai_b10', b11 = '$nilai_b11' WHERE id_nilai = '$id_nilai'";
    $koneksi->query($query);

    $_SESSION['nilai_sebelumnya'][$id_nilai] = [
        'a1' => $nilai_a1,
        'a2' => $nilai_a2,
        'a3' => $nilai_a3,
        'a4' => $nilai_a4,
        'b1' => $nilai_b1,
        'b2' => $nilai_b2,
        'b3' => $nilai_b3,
        'b4' => $nilai_b4,
        'b5' => $nilai_b5,
        'b6' => $nilai_b6,
        'b7' => $nilai_b7,
        'b8' => $nilai_b8,
        'b9' => $nilai_b9,
        'b10' => $nilai_b10,
        'b11' => $nilai_b11,
    ];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <style>
        .bg-warning {
            background-color: #FFD700 !important;
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
                </a>
                <a href="index.php" class="simple-text logo-normal">
                    Penentuan DosPem
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li><a href="./index.php"><i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a></li>

                    <li>
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
                    <?php } ?> <li class="active"><a href="./datanilai.php"><i class="nc-icon nc-user-run"></i>
                            <p>Data Mahasiswa</p>
                        </a></li>
                    <li><a href="./hasil.php"><i class="nc-icon nc-box"></i>
                            <p>Riwayat Perhitungan</p>
                        </a></li>
                    <li class="active-pro"><a href="./logout.php"><i class="nc-icon nc-button-power"></i>
                            <p>Logout</p>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <?php include 'includes/navbar.php'; ?>
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
                                        <thead class="text-primary">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Mahasiswa</th>
                                            <th class="text-center">Judul</th>
                                            <?php
                                            for ($i = 1; $i <= 4; $i++) {
                                                echo "<th class='text-center'>A{$i}</th>";
                                            }
                                            for ($i = 1; $i <= 11; $i++) {
                                                echo "<th class='text-center'>B{$i}</th>";
                                            }
                                            ?>
                                            <th class="text-center">Aksi</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $nomor = 1;
                                            $ambil = $koneksi->query("SELECT * FROM mahasiswa 
                                                                        JOIN nilai_mahasiswa 
                                                                        ON mahasiswa.id_mahasiswa = nilai_mahasiswa.id_mahasiswa 
                                                                        ORDER BY id_nilai ASC");
                                            while ($pecah = $ambil->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor++; ?></td>
                                                    <td><?php echo $pecah['nama']; ?></td>
                                                    <td><?php echo $pecah['judul']; ?></td>
                                                    <?php
                                                    for ($i = 1; $i <= 4; $i++) {
                                                        $field = "a{$i}";
                                                        echo "<td class='" . checkChange($pecah['id_nilai'], $field, $pecah[$field]) . "'>{$pecah[$field]}</td>";
                                                    }
                                                    for ($i = 1; $i <= 11; $i++) {
                                                        $field = "b{$i}";
                                                        echo "<td class='" . checkChange($pecah['id_nilai'], $field, $pecah[$field]) . "'>{$pecah[$field]}</td>";
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php if (isset($_SESSION['admin'])) {  ?>
                                                            <a href="ubahdatanilai.php?id=<?php echo $pecah["id_nilai"] ?>">
                                                                <button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button>
                                                            </a>
                                                            <a href="hapusdatamahasiswa.php?id=<?php echo $pecah["id_nilai"] ?>">
                                                                <button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button>
                                                            </a>
                                                        <?php } else { ?>
                                                            <button type="button" class="btn btn-secondary btn-round" disabled><i class="nc-icon nc-settings"></i></button>
                                                            <button type="button" class="btn btn-secondary btn-round" disabled><i class="nc-icon nc-basket"></i></button>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>