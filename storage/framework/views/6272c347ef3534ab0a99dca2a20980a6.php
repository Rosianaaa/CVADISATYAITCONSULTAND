<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>MeBlood</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link href="assets/css/animate-3.7.0.css"rel="stylesheet" >
    <link href="assets/css/font-awesome-4.7.0.min.css"rel="stylesheet" >
    <link href="assets/css/bootstrap-4.1.3.min.css"rel="stylesheet" >
    <link href="assets/css/owl-carousel.min.css"rel="stylesheet" >
    <link href="assets/css/jquery.datetimepicker.min.css"rel="stylesheet">
    <link href="assets/css/linearicons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> Hubungi Kami Di +62-8311-1527-851</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span>meblood.co.id</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Temukan Lokasi Kami</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="beranda"><img src="assets/images/logo/logo.png" width="100px" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/beranda">Beranda</a></li>
                        <li><a href="/stok">Stok Darah</a></li>
                        <li><a href="/dokter">Dokter</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li class="menu-has-children"><a href="">Tentang</a>
                            <ul>
                                <li><a href="/tentang">Tentang Kami</a></li>
                                <li><a href="/data">Data Donor</a></li>
                            </ul>
                        </li>
                        <li><a href="/kontak">Kontak</a></li>			          				          
                    </ul>
                </nav>
                <!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Stok Darah</h1>
                    <a href="/beranda">Beranda</a> <span>|</span> <a href="/stok">Stok Darah</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Golongan Darah</th>
                    <th>Jumlah</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $donordarah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->golongan_darah); ?></td>
                        <td><?php echo e($data->jumlah); ?></td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    
      <!-- Footer Area Starts -->
      <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Produk Teratas</h3>
                            <ul>
                                <li class="mb-2"><a href="#">Donor Darah</a></li>
                                <li class="mb-2"><a href="#">Ambulan</a></li>
                                <li class="mb-2"><a href="#">Transfusi Darah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Promo</h3>
                            <p class="mb-4">Anda dapat mempercayai kami. kami hanya mengirimkan penawaran promo.</p>  
                            <form action="#">
                                <input type="email" placeholder="Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">Ikuti Sekarang</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram</h3>
                            <div class="feed">
                                <img src="assets/images/feed1.jpg" alt="feed">
                                <img src="assets/images/feed2.jpg" alt="feed">
                                <img src="assets/images/feed3.jpg" alt="feed">
                                <img src="assets/images/feed4.jpg" alt="feed">
                                <img src="assets/images/feed5.jpg" alt="feed">
                                <img src="assets/images/feed6.jpg" alt="feed">
                                <img src="assets/images/feed7.jpg" alt="feed">
                                <img src="assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://instagram.com/amryllslily?igshid=MzRlODBiNWFlZA==" target="_blank">MeBlood</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100089487947136"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="https://twitter.com/ZeyraaSukaTidur?t=kYaqtlvQItgaUfjPjilmfw&s=08"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="https://instagram.com/amryllslily?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://pin.it/2MRYuqU"><i class="fa fa-pinterest"></i><a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>



</body>
</html>
<?php /**PATH C:\Users\LENOVO SLIM 1\Documents\CVADISATYAITCONSULTAND\meblood\resources\views/stok.blade.php ENDPATH**/ ?>