<?php
include ("koneksi.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM tb_peserta WHERE id = $id";
    $query_delete = mysqli_query($db, $sql_delete);

    if ($query_delete) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='daftar-peserta.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location.href='daftar-peserta.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='./vendor/twbs/bootstrap/dist/css/bootstrap.min.css'>
    <script src='main.js'></script>
</head>

<body>
    <nav class="navbar" style="background-color: #A60067;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./images/logoPutih.png" alt="Digital Talent" style="max-height: 50px;">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
    </nav>
    <div class="container mt-5">
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
            data-bs-target="#tambahPesertaModal">[+]Tambah Peserta</button>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Asal</th>
                    <th>Kategori</th>
                    <th>Bakat</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_peserta";
                $query = mysqli_query($db, $sql);

                while ($peserta = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $peserta['id'] . "</td>";
                    echo "<td>";
                    echo "<a href='#' data-bs-toggle='modal' data-bs-target='#profileModal" . $peserta['id'] . "'>" . $peserta['nama_peserta'] . "</a>";
                    echo "</td>";
                    echo "<td>" . $peserta['asal'] . "</td>";
                    echo "<td>" . $peserta['kategori'] . "</td>";
                    echo "<td>" . $peserta['bakat'] . "</td>";
                    echo "<td>";
                    echo "<a href='?id=" . $peserta['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";

                    // Modal untuk menampilkan profil peserta
                    echo "<div class='modal fade' id='profileModal" . $peserta['id'] . "' tabindex='-1' aria-labelledby='profileModalLabel" . $peserta['id'] . "' aria-hidden='true'>";
                    echo "<div class='modal-dialog'>";
                    echo "<div class='modal-content'>";
                    echo "<div class='modal-header'>";
                    echo "<h5 class='modal-title' id='profileModalLabel" . $peserta['id'] . "'>Profil " . $peserta['nama_peserta'] . "</h5>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                    echo "</div>";
                    echo "<div class='modal-body'>";
                    echo "<p><strong>Nama:</strong> " . $peserta['nama_peserta'] . "</p>";
                    echo "<p><strong>Asal:</strong> " . $peserta['asal'] . "</p>";
                    echo "<p><strong>Kategori:</strong> " . $peserta['kategori'] . "</p>";
                    echo "<p><strong>Bakat:</strong> " . $peserta['bakat'] . "</p>";
                    echo "</div>";
                    echo "<div class='modal-footer'>";
                    echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </tbody>
        </table>

        <p>Jumlah peserta : <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <div class="modal fade" id="tambahPesertaModal" tabindex="-1" aria-labelledby="tambahPesertaLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="proses-registrasi.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahPesertaLabel">Tambah Peserta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_peserta" class="form-label">Nama Peserta</label>
                            <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" required>
                        </div>
                        <div class="mb-3">
                            <label for="asal" class="form-label">Asal</label>
                            <input type="text" class="form-control" id="asal" name="asal" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="bakat" class="form-label">Bakat</label>
                            <input type="text" class="form-control" id="bakat" name="bakat" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>