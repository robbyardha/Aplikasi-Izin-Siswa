<?php
$izin_nama = $_POST['inputIzinNama'];
$izin_kelas = $_POST['inputIzinKelas'];
$izin_guru = $_POST['inputIzinGuru'];
$izin_keperluan = $_POST['inputIzinKeperluan'];
$username = "root";
$password = "";
$database = "db_izin_siswa";
// echo $izin_id;
$connect = new mysqli("localhost", $username, $password, $database);
if ($connect) { } else {
    echo "connection failed";
    exit();
}

$query = 'INSERT INTO `form_izin_siswa`(`izin_nama`, `izin_kelas`, `izin_guru`, `izin_keperluan`) VALUES ("'.$izin_nama.'","'.$izin_kelas.'","'.$izin_guru.'","'.$izin_keperluan.'")';


if (mysqli_query($connect,$query)==true) {
    echo "berhasil";
}
else {
    echo"gagal";
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>APLIKASI IZIN SISWA</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/app_izin/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app_izin/index.php">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app_izin/rekap.php">Rekap</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="padding-top: 15px; padding-bottom: 15px"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p>Data berhasil diinput!</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="/app_izin/index.php">OK</a>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>