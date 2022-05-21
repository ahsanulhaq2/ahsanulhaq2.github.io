<?php

session_start();


include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama'])) {
    header("Location: login.php");
}

if (isset($_POST['login'])) {
    $name = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (username, password, nama)
                    VALUES ('$username', '$password', '$name')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                header("Location: login.php");
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Self CSS -->
    <link rel="stylesheet" href="stylelogin.css">

    <title>Register</title>
</head>

<body>
    <section class="gradient-form">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="Logo_FPM2.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Welcome to For People Media</h4>
                                    </div>

                                    <form action="" method="POST">

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="nama">Nama Lengkap</label>
                                            <input type="nama" id="nama" name="nama" class="form-control" placeholder="Your Full Name" value="<?php echo $name; ?>" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Your Username" value="<?php echo $username; ?>" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" value="<?php echo $_POST['password']; ?>" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="cpassword">Confirm Password</label>
                                            <input type="password" id="cpassword" name="cpassword" class="form-control" value="<?php echo $_POST['cpassword']; ?>" required />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button name="login" class="btn btn-dark">Register</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a href="login.php"><button type="button" class="btn btn-outline-dark">Login Now</button></a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">For People Media adalah penyedia layanan jasa event organizer (EO) profesional di Jakarta yang berfokus pada kualitas dan kepuasan klien.
                    Kami merancang dan menyelenggarakan acara untuk kegiatan corporate seperti family gathering, acara sekolah atau perkuliahan seperti
                    wisuda, pentas seni atau acara perpisahan, hingga acara sosial seperti pernikahan atau pesta keluarga dengan dokumentasi yang sangat lengkap.
                    Berbagai kegiatan baik telah kami rancang dengan konsep yang unik baik indoor maupun outdoor seperti outbound untuk mempererat tali persaudaraan
                    antar karyawan atau menyelenggarakan bazaar untuk mengenalkan produk Anda kepada khalayak luas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>