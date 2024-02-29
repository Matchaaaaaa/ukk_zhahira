<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Data Petugas</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(register.jpg);" class="bg-dark"></body>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Tambah Data Petugas</h3>
                            </div>


                            <div class="card-body">
                                <?php
                                if (isset($_POST['register'])) {
                                    $nama = $_POST['nama'];
                                    $email = $_POST['email'];
                                    $alamat = $_POST['alamat'];
                                    $no_telepon = $_POST['no_telepon'];
                                    $username = $_POST['username'];
                                    $level = $_POST['level'];
                                    $password = md5($_POST['password']);

                                    $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                    if ($insert) {
                                        echo '<script>alert("Selamat, Tambah data berhasil. Silahkan Login"); location.href="login.php"</script>';
                                    } else {
                                        echo '<script>alert("Tambah data gagal, Silahkan ulangi kembali.");</script>';
                                    }
                                }
                                ?>

                                <form method="post">
                                    <div class="form-group">
                                        <label class="small mb-1">Nama Lengkap</label>
                                        <input class="form-control py-4" type="text" required name="nama"
                                            placeholder="Masukkan Nama Lengkap " />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1">Email</label>
                                        <input class="form-control py-4" type="text" required name="email"
                                            placeholder="Masukkan Email " />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1">No. Telepon</label>
                                        <input class="form-control py-4" type="text" required name="no_telepon"
                                            placeholder="Masukkan No. Telepon " />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1">Alamat</label>
                                        <textarea name="alamat" cols="5" required class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1">Username</label>
                                        <input class="form-control py-4" type="username" required name="username"
                                            placeholder="Masukkan Username" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" required name="password"
                                            type="password" placeholder="Masukkan Password" />
                                    </div>
                                    <div class="form-group">

                                        <select name="level" required class="form-control">
                                            <option value="petugas">Petugas</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-warning" type="submit" name="register"
                                            value="register">Tambah</button>
                                        <a class="btn btn-secondary" href="login.php">Login</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    &copy; 2024 Perpustakaan Digital.
                                </div>
                                <?php
                                include "koneksi.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php
include "koneksi.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="js/scripts.js"></script>
</body>

</html>