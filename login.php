<?php

session_start();

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama']) || isset($_SESSION['admin'])) {
  header("Location: index.php");
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['admin'] = true;
    $_SESSION['nama'] = $row['nama'];
    header("Location: index.php");
  } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="stylelogin.css">
  <title>Login</title>
</head>

<body>
  <section class="h-100 gradient-form" style="background-color: #ffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="Logo_FPM2.png" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are For People Media</h4>
                  </div>

                  <form action="" method="POST">

                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                      <input name="username" type="text" id="username" class="form-control" placeholder="Username" />
                      <label class="form-label" for="username">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input name="password" type="password" id="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button name="login" class="btn btn-dark">Login</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="register.php" class="btn btn-outline-danger">Create new</a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">For People Media adalah penyedia layanan jasa event organizer (EO) profesional di Jakarta yang berfokus pada kualitas dan kepuasan klien.
                    Kami merancang dan menyelenggarakan acara untuk kegiatan corporate seperti family gathering, acara sekolah atau perkuliahan seperti
                    wisuda, pentas seni atau acara perpisahan, hingga acara sosial seperti pernikahan atau pesta keluarga dengan dokumentasi yang sangat lengkap.
                    Berbagai kegiatan baik telah kami rancang dengan konsep yang unik baik indoor maupun outdoor seperti outbound untuk mempererat tali persaudaraan
                    antar karyawan atau menyelenggarakan bazaar untuk mengenalkan produk Anda kepada khalayak luas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>