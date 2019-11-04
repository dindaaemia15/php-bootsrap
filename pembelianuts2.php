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
                    <div class="card-header">Pembelian Buku</div>
                    <div class="card-body">
                        <form action="pembelianuts3.php" method="post">
                            <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
                            <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
                            <input type="hidden" name="jk" value=" <?php echo $_POST['jk'] ?> " id="jk">
                            <input type="hidden" name="tanggal_beli" value=" <?php echo $_POST['tanggal_beli'] ?> " id="tanggal_beli">
                            <input type="hidden" name="jumlah" value=" <?php echo $_POST['jumlah'] ?> " id="jumlah">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml_form = $_POST['jumlah'];
                                for ($a = 0; $a < $jml_form; $a++) { ?>
                                        <div class="form-group">
                                            <label for="">Nama Kerudung</label>
                                            <input type="text" class="form-control" name="kerudung[]" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode</label>
                                            <input type="text" class="form-control" name="kode[]" id="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis</label>
                                            <select class="form-control" name="jenis[]" id="">
                                                    <option value="Kerudung">Kerudung</option>
                                                    <option value="Diamond">Diamond</option>
                                                    <option value="Umama">Umama</option>
                                                    <option value="Saudia">Saudia</option>
                                                    <option value="Rabani">Rabani</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" class="form-control" name="harga[]" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah</label>
                                        <input type="number" class="form-control" name="j[]" id="" min="1" required><br><br><hr><br><br>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            <?php } ?>
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