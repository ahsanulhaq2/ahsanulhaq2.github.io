<?php
session_start();

include("koneksi.php");

date_default_timezone_set('Asia/Jakarta');

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Organizer For People Media</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">



</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"></span>For People Media</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#service">Service</a>
            <a href="#about">About</a>
            <a href="#gallery">Gallery</a>
            <a href="#price">Price</a>
            <a href="#contact">Contact</a>
            <?php if (!isset($_SESSION['nama'])) : ?>
                <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a>
            <?php else : ?>
                <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
            <?php endif; ?>
        </nav>

        <div id="menu-bars" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>its time to celebrate! the best <span> event organizers </span></h3>
        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="IMG_1.JPG" alt=""></div>
                <div class="swiper-slide"><img src="IMG_2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="IMG_3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="IMG_4.JPG" alt=""></div>
                <div class="swiper-slide"><img src="IMG_5.JPG" alt=""></div>
                <div class="swiper-slide"><img src="IMG_6.png" alt=""></div>
            </div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Pemilihan Venue</h3>
                <p>Kami menyediakan tempat penyewaan acara, yaitu hotel, wisma, cottage, auditorium, gedung pertemuan, dan lain-lain.</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Percetakan</h3>
                <p>Pihak kami menyediakan fasilitas percetakan termasuk juga menyediakan fasilitas multimedia.</p>
            </div>

            <div class="box">
                <i class="fas fa-music"></i>
                <h3>Musik dan Seni</h3>
                <p>Pihak kami menyediakan peralatan musik dan seni</p>
            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Katering</h3>
                <p>Pihak kami menyediakan jasa kebutuhan konsumsi paket kotak, prasmanan, atau penyewaan peralatan makan.</p>
            </div>

            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3>Dokumentasi</h3>
                <p>Pihak yang menyediakan fasilitas pemotretan dan fasilitas video shooting.</p>
            </div>

            <div class="box">
                <i class="fas fa-birthday-cake"></i>
                <h3>Kue Pernikahan</h3>
                <p>Kami menyediakan kustom kue pernikahan.</p>
            </div>

        </div>

    </section>

    <!-- service section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="Logo_FPM.png" alt="">
            </div>

            <div class="content">
                <h3> Kami membantu anda membuat acara yang menyenangkan dan tak terlupakan bersama keluarga, sahabat, dan kolega.</h3>
                <p> For People Media adalah penyedia layanan jasa event organizer (EO) profesional di Jakarta yang berfokus pada kualitas dan kepuasan klien.
                    Kami merancang dan menyelenggarakan acara untuk kegiatan corporate seperti family gathering, acara sekolah atau perkuliahan seperti
                    wisuda, pentas seni atau acara perpisahan, hingga acara sosial seperti pernikahan atau pesta keluarga dengan dokumentasi yang sangat lengkap.
                    Berbagai kegiatan baik telah kami rancang dengan konsep yang unik baik indoor maupun outdoor seperti outbound untuk mempererat tali persaudaraan
                    antar karyawan atau menyelenggarakan bazaar untuk mengenalkan produk Anda kepada khalayak luas.</p>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="IMG_1.JPG" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_2.JPG" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_3.JPG" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_4.JPG" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_5.JPG" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_6.png" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_7.png" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_8.png" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="IMG_9.png" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- price section starts  -->

    <section class="price" id="price">

        <h1 class="heading"> our <span>price</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">25.000K</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for weddings</h3>
                <h3 class="amount">450.000K</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">650.000K</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for Exhibition</h3>
                <h3 class="amount">850.000K</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

        </div>

    </section>

    <!-- review section starts  -->

    </div>

    </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> jakarta </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> bekasi </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> karawang </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> bandung </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> denpasar </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62 898 8622 280 </a>
                <a href="#"> <i class="fas fa-envelope"></i> kerjasama.fp@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> emailkami.fp@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> jakarta, Indonesia - 13810 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>For People Media</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->

    <!-- theme toggler  -->

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #FC427B;"></div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
</body>

</html>