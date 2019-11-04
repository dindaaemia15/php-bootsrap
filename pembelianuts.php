<?php
    session_start();
    if ($_SESSION['akseslogin']) {
        # code...   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latihan Bootstrap</title>
	<!-- Pemanggilan CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!-- Akhir pemanggilan -->
  <style>
      font-family: 'Chilanka',
      cursive;
  </style>
    <title>Assalaam Book Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dinda Scarf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homeuts.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pembelianuts.php">Scarf</a>
                </li>
            </ul>
            <form action="keluar.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Pembelian kerudung</div>
                    <div class="card-body">
                        <form action="pembelianuts2.php" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value="" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control" name="alamat" value="" id="alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <br>
                                <input type="radio" name="jk" value="Laki-Laki" id="jk">Laki-Laki
                                <input type="radio" name="jk" value="Perempuan" id="jk">Perempuan
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" class="form-control" name="tanggal_beli" value="" id="tanggal_beli" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Data</label>
                                <input type="number" class="form-control" name="jumlah" value="" id="jumlah" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Pemanggilan Js -->
    <script src="asset/js/jquery-3.4.1.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/bootstrap.bundle.js"></script>
    <!-- Akhir Pemanggilan js -->
</body>
</html>
<?php
    }else{
        echo "<script> alert('Silahkan Login Terlebih dahulu');"." window.location.href='indexuts.php' </script>";
    }
?>