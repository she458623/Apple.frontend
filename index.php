<?php include'db/config.php'?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="AMAN KUMAR">
    <meta name="description" content="IT FINAL YEAR">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Apple Mini Store</title>
   
    <link rel="apple-touch-icon" href="assets/images/pavicon.png">
    <link rel="shortcut icon" type="image/ico" href="assets/images/pavicon.png" />
    
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap-min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel-min.css">
    <link rel="stylesheet" href="assets/css/lity-min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
  
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2-8-3-min.js"></script>

   
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    
    <div class="preloader">
        <svg viewBox="-2000 -1000 4000 2000">
            <path id="inf" d="M354-354A500 500 0 1 1 354 354L-354-354A500 500 0 1 0-354 354z"></path>
            <use xlink:href="#inf" stroke-dasharray="1570 5143" stroke-dashoffset="6713px"></use>
        </svg>
    </div>

    
    <div class="mainmenu-area transparent v2" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 row-flex">
                    <div class="site-brand">
                        <a href="#" class="logo">Apple Mini<br>&nbsp;Store</a>
                    </div>
                    <button class="burger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <div class="mainmenu">
                        <ul class="nav">
                            <li><a href="#home-area">Home</a></li>
                            <li><a href="#gallery-area">Gallery</a></li>
                            <li><a href="#contact-area">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <header class="header-area v2 angle-1" id="home-area">
        <div class="container">
            <div class="row row-flex">
                <div class="col-xs-12 col-md-7">
                    <div class="text-box text-white">
                        <h2 class="title">The best <br> landing page for <br> your digital product.</h2>
                        <p>Our cloud computing platform was built with simplicity <br> so managing infrastructure is easy.</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn-4">Discover Now</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 text-right section-bg" style="background-image: url('assets/images/circle-bg-2.png'); background-size: 100% auto">
                    <div class="space-60 hidden-md hidden-lg"></div>
                    <div class="product-single-slider wow zoomIn">

                        <?php
                            $sql="SELECT * FROM `product`";
                            $res=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                            {
                        ?>
                        <div class="item">
                            <img src="<?php echo "assets/images/".$row['img']?>" alt="">
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="topshapewrap">
            <div class="topshape"></div>
        </div>
    </header>

    
    
    <section class="intro-area v2 section-padding circle-bg" style="background-image: url('assets/images/wtach-section-2.png'),url('assets/images/watch-round-4.png'),url('assets/images/circle-bg.png'); background-position: left 58vw bottom 17vh, left 75vw top 10vh, left 56vw center;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="text-box">
                        <div class="box-icon v2">
                            <i class="fa fa-dribbble"></i>
                        </div>
                        <h2 class="title">World best water resistant watch</h2>
                        <p>Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus, et molestie sem tortor quis dui.</p>
                        <div class="space-30"></div>
                        <a href="#" class="bttn-5">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="product-area v2 angle-3">

        <div class="container">
            <div class="product-slider-2">

            <?php
                $sql="SELECT * FROM `product`";
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                {
            ?>            
                <div class="row row-flex">
                    <div class="col-xs-12 col-md-6">
                        <div class="text-box text-white">
                            <h2 class="title"><?php echo $row['name']?> <br>Special Edition</h2>
                            <p class="desc">Vestibulum commodo sapien non elit porttitor, vitae volutpat nibh mollis. Nulla porta risus id neque tempor, in efficitur justo imperdiet. Etiam a ex at ante tincidunt imperdiet.</p>
                            <div class="space-30"></div>
                            <a href="#" class="bttn-4">Buy It Now</a>
                            <div class="space-30"></div>
                            <div class="title"><small>Only</small> ₹<?php echo $row['price']?></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-1">
                        <figure class="single-image">
                            <img src="<?php echo "assets/images/".$row['img']?>" alt="">
                        </figure>
                    </div>
                </div>
            <?php 
                }
            ?>
                
            </div>
        </div>
        <div class="productShape1">
            <div class="productShape1inner">

            </div>
        </div>
        <div class="productShape2">
            <div class="productShape2inner">

            </div>
        </div>
    </section>


    <section class="section-padding-top produst-list-area v2" id="gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="text-box text-center">
                        <div class="box-icon v2">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                        </div>
                        <h2 class="title">New arrivals exclusive watches</h2>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-slide v2">

                    <?php
                        $sql="SELECT * FROM `product`";
                        $res=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
                        {
                    ?>
                    <div class="slide-item">
                        <figure class="product-image">
                            <img src="<?php echo "assets/images/".$row['img']?>" alt="">
                        </figure>
                        <div class="product-content">
                            <h3 class="title"><?php echo $row['name']?></h3>
                            <h5 class="rate">₹ <?php echo $row['price']?></h5>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="info-area v2 section-padding" id="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="text-box text-center">
                        <div class="box-icon v2">
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                        </div>
                        <h2 class="title">Choose your nearest branch</h2>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="info-box wow fadeIn" data-wow-delay="0.3s">
                        <div class="box-image">
                            <img src="assets/images/info-1.png" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="title">Gorakhpur</h3>
                            <p class="desc">xyz abc 201310</p>
                            <h4 class="number">0551-12345</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="info-box wow fadeIn" data-wow-delay="0.5s">
                        <div class="box-image">
                            <img src="assets/images/info-2.png" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="title">Delhi</h3>
                            <p class="desc">Xyz abc 110011</p>
                            <h4 class="number">02211-45345</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="info-box wow fadeIn" data-wow-delay="0.7s">
                        <div class="box-image">
                            <img src="assets/images/info-3.png" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="title">Greater Noida</h3>
                            <p class="desc">Vanice mall Greater noida</p>
                            <h4 class="number">02102-232434</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    
    <footer class="footer-area v2 section-bg angle-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  
                    <div class="subscribe-area v2">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <div class="text-box text-center">
                                    <div class="box-icon v2">
                                        <i class="fa fa-space-shuttle" aria-hidden="true"></i>
                                    </div>
                                    <h2 class="title">Never miss any update</h2>
                                    <div class="space-60"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <form id="mc-form">
                                    <div class="subscribe-form">
                                        <input type="email" class="form-input" id="mc-email" name="email" placeholder="Your email">
                                        <button class="bttn-5 submit" type="submit">Pre-Book My Order</button>
                                        <div class="info">*Your email address is safe with us. We never share your email address.</div>
                                    </div>
                                    <label class="mt10" for="mc-email"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">Quick Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact Us!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">Social</h4>
                            <p>Please connect with our social profiles.</p>
                            <div class="space-30"></div>
                            <div class="social-menu">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="copyright">&copy; 2023 placement Assignment</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="productShape1">
            <div class="productShape1inner">

            </div>
        </div>
    </footer>
    
    <script src="assets/js/vendor/jquery-1-12-4-min.js"></script>
   
    <script src="assets/js/vendor/bootstrap-min.js"></script>
    <script src="assets/js/owl-carousel-min.js"></script>
    <script src="assets/js/ajaxchimp.js"></script>
    <script src="assets/js/lity-min.js"></script>
    <script src="assets/js/click-effect.js"></script>
    <script src="assets/js/mouse-effect.js"></script>
    <script src="assets/js/scrollUp-min.js"></script>
    <script src="assets/js/wow-min.js"></script>
   
    <script src="assets/js/main.js"></script>
</body>

</html>