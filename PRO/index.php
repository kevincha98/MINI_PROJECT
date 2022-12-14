<?php  

//Connecting to Database
$db = mysqli_connect('localhost', 'root', '', 'care');



 //Total Relief Center Count
 $sql="SELECT * FROM rc_register";
 $res=mysqli_query($db,$sql);
 $count=mysqli_num_rows($res);


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CareHand</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"><img src="img/favicon.png" alt="logo"></a>
                        <h3><font color="#fff">CareHand</font></h3>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">                                
                                <li class="nav-item">
                                    <a class="nav-link" href="rclist.php">Relief Centers</a>
                                </li>                                 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_1" role="button" 
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donate</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="donate.php">Donate To Charity</a>    
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" 
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="medicalinfo.php">Medical Info</a>
                                        <a class="dropdown-item" href="EmergencyNo.php">Emergency Numbers</a>
                                        
                                    </div>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="EmergencyNo.php">Emergency Numbers</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Contact us</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="rclogin.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Bless others with
                                your gift</h1>
                            <p>Your greatness is not what you have ,  It's what you give.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end-->

    <!-- Works part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Awesome Feature</p>
                        <h2>How Could You Help </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_1.svg" alt="">
                                <h4>Give Support To The Refugee</h4>
                            </div>
                            <p>Provide support for those who are fleeing violence by offering them 
                               emergency health,shelter,and educational service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_2.svg" alt="">
                                <h4>Become A Volunteer</h4>
                            </div>
                            <p>A person who does something,especially helping other people,willingly and
                                 without being forced or paid to do it.</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Works part end-->

    <!-- Donation part start-->
    <section class="be_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="be_part_text">
                        <h2>Be a part of the break
                            through and make someone
                            happy</h2>
                        <p>Fundraising does not begin and end with cold hard cash.You could be using your 
                            assets to end poverty in the hardest places.</p>
                        <a href="donate.php" class="btn_2">lets donate</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/Charity.jpg" alt="" class="be_img">
    </section>
    <!-- Donation part end-->


    <!-- Counter part start-->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_1.svg" >
                        <div class="single_counter_text">
                            <p>Total Registered Relief Centers</p>
                            <span class="count"><?php   echo "$count";  ?></span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_2.svg" >
                        <div class="single_counter_text">
                            <p>Helped People</p>
                            <span class="count"></span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_3.svg" >
                        <div class="single_counter_text">
                            <p>Total Volunteer</p>
                            <span class="count"></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Counter part end-->


    <!--::Flood info part start::-->
    <section class="passion_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>What We Faced Earlier</p>
                        <h2>What We Done Together</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                            <img src="img/kerala/img5.jpeg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">The Flood</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                            <img src="img/kerala/img2.jpeg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">The Saviour</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                            <img src="img/kerala/img4.jpeg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">The Helper</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::Flood info part end::-->

    <!-- Volunteer Reg part start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>" Only a life lived for others is worth living "</h2>
                        <a href="" class="btn_2">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Volunteer Reg  part start-->


    <!--::volunteers_part start::-->
    <section class="volunteers_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>volunteers</p>
                        <h2>Expert Volunteers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kerala/img6.jpg" alt="doctor">
                            <div class="social_icon"></div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kerala/img7.jpeg" alt="doctor">
                            <div class="social_icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kerala/img8.jpeg" alt="doctor">
                            <div class="social_icon">
                           </div>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kerala/img9.jpeg" alt="doctor">
                            <div class="social_icon">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::volunteers_part end::-->

    
    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>