<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IUT CMS</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css">



    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

{{--        <a href="index.html" class="logo mr-auto"><img src="assets/img/IUTCMS.png" alt="" class="img-fluid"></a>--}}
        <!-- Uncomment below if you prefer to use text as a logo -->
        <h1 class="logo mr-auto"><a href="{{url("/")}}">IUTCMS</a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{url("/")}}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#team">Team</a></li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>A course management system for easily managing courses</h1>
                <h2>A course management system is a platform of educational software allowing instructors and
                    institutions to manage a variety of courses with a large number of students and multiple
                    instructional materials.</h2>
                <div><a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a></div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch">
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>IUTCMS - Course Management System</h3>
                    <p>A course management system is a platform of educational software allowing instructors and
                        institutions to manage a variety of courses with a large number of students and multiple
                        instructional materials.</p>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Easy Mangement</a></h4>
                        <p class="description">Easily manage courses</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Get information easily
                            </a></h4>
                        <p class="description">Get all information quickly and easily at a glance</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="">Assign Faculties</a></h4>
                        <p class="description">Assigning Faculties based on availability and notifications to hire if there is deficit of faculty</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
            </div>

            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/Nafiz.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://github.com/nafiz1307">G</a>
                                    <a href="https://www.facebook.com/NafizZamanArnob"><i class="icofont-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/nafizzamanarnob"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nafiz Zaman</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/adiba.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://github.com/adibahasan11">G</a>
                                    <a href="https://www.facebook.com/adiba.h.lia"><i class="icofont-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/adiba-hasan-9026831a5"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Adiba Hasan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/srijon.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://github.com/smuhtasim">G</a>
                                    <a href="https://www.facebook.com/srijon.muhtasim.1"><i class="icofont-facebook"></i></a>
                                    <a href="https://github.com/smuhtasim"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Muhtasim Srijon</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>IUT CMS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a>IUT CMS TEAM</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>