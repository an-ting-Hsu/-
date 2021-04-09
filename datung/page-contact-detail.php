
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>關於大統環保</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="事業廢水污染防治規劃、申請，污染防治設備規劃、自動控制 廢水中古設備買賣, 環保署相關業務協助申辦" />

        <!-- favicon -->
        <link rel="shortcut icon" href="images/hash/favicon.png">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Magnific -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
        <style type="text/css">
              #topnav .navigation-menu.nav-light > li > a {
                color: #222222;
              }
              #topnav .navigation-menu.nav-light > li > a:hover {
                color: #999999;
              }
              #topnav .navigation-menu.nav-light > li.active > a {
                    color: #222222 !important;
                }
            #topnav .navigation-menu.nav-light > li:hover > a {
                color: #999999 !important;
              }
        </style>
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <?php include("include/logo.php");?>    
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <?php include("include/nav.php");?>
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="vh-100 d-flex align-items-center" style="background: url('images/contact-detail.jpg') center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                        <div class="title-heading mt-5 pt-4">
                            <h1 class="heading">
                                聯絡資訊
                            </h1>
                            
                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h5 class="title fw-bold mb-0">Email</h5>
                                    <a href="mailto:contact@example.com" class="text-primary">power6982@hotmail.com</a>
                                </div>
                            </div>
                            
                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h5 class="title fw-bold mb-0">Phone</h5>
                                    <a href="tel:0915675308" class="text-primary">0915675308</a>
                                </div>
                            </div>
                            
                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h5 class="title fw-bold mb-0">位置</h5>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#watchvideomodal" class="video-play-icon text-primary"> Google map</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Map Popup Start -->
        <div class="modal fade" id="watchvideomodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content video-modal rounded overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.374778653472!2d121.25848681524685!3d25.021352344951815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346820291e880b63%3A0x196d8f52a5965c4!2z5aSn57Wx55Kw5L-d5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1615881641792!5m2!1szh-TW!2stw"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Map Popup End -->

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific.init.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>