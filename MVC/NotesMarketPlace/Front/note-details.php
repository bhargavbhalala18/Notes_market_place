<!DOCTYPE html>

<html lang="en">

<head>

    <!--Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Title-->
    <title>Document</title>

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- fontsawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg wow slideInDown">
            <div class="container">

                <div class="navbar-header">
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-open-btn">&#9776;</span>

                    <!-- Logo -->
                    <a href="#home" class="navbar-brand smooth-scroll">
                        <img class="img-fluid img-responsive" src="images/logo.png" alt="logo">
                    </a>
                </div>

                <div class="nav-option">
                    <!-- Navigatio List -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav text-center">
                            <li><a href="#">Search Notes</a></li>
                            <li><a href="#">Sell Your Notes</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a class="user-photo" href="#"><img src="images/user-img.png" alt=""></a></li>
                            <li><a class="btn btn-default nav-btn" href="login-page.php" role="button"><span class="">Logout</span></a></li>
                        </ul>
                    </div>
                </div>

                <div id="mobile-nav">
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Search Notes</a></li>
                            <li><a class="nav-link" href="#">Sell Your Notes</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a class="user-photo" href="#"><img src="images/user-img.png" alt=""></a></li>
                            <li><a class="btn btn-default" href="login-page.html" role="button"><span class="nav-btn">Login</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

    </header>
    <!-- Header Ends-->

    <!-- Notes details-->
    <section id="notes-details">

        <div class="content-box-first">

            <div class="container">

                <div class="row">
                    <div class="col-md-12 general-heading">
                        <h4>Notes Details</h4>
                    </div>
                </div>

                <div class="row">

                    <!-- Notes-Intro-left -->
                    <div class="col-md-6 col-sm-12 notes-left general-heading wow slideInLeft">
                        <img class="image-fluid" src="images/computer-science.png" alt="note">
                        <h4>Computer Science</h4>
                        <h5>Science</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eum maiores at et ratione adipisicing elit, cupiditate velit maiores adipisicing elit. Animi eum maiores at et ratione adipisicing elit at et ratione adipisicing.</p>
                        <a class="download-btn" data-toggle="modal" data-target="#exampleModalCenter" href="" role="button">DOWNLOAD / $15</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <a class="close text-right" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><img src="images/close.png" alt=""></span>
                                    </a>

                                    <div class="modal-title text-center">
                                        <span class=" text-center">&check;</span>
                                        <h4>Thanks you for purchasing!</h4>
                                    </div>

                                    <div class="modal-body">
                                        <h5>Dear Smith,</h5>
                                        <p>As this is paid notes - you need to pay to seller Rahil Shah offline. We eill send him an email that you want to download this note. He may contact you further for payment prcess complition.</p>
                                        <p>Incase, you have urgency,<br>
                                            Please contact us on +9195377345959 </p>
                                        <p>Once he receives the payment and acknowledge us - selected notes you can see over my downloads tab for download.</p>
                                        <p>Have a good day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <!-- Notes-Intro-Right -->
                    <div class="col-md-5 col-sm-12 notes-right wow slideInRight">
                        <div class="col-md-12">
                            <p class="">Institution:</p>
                            <p id="institution" class="text-right">University of California</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Country:</p>
                            <p id="country" class="text-right">United State</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Course Name:</p>
                            <p id="course-name" class="text-right">Computer Engineering</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Course Code:</p>
                            <p id="course-code" class="text-right">248705</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Professor:</p>
                            <p id="professor" class="text-right">Mr. Richard Brown</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Number Of Pages:</p>
                            <p id="institution" class="text-right">277</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Approved Date:</p>
                            <p id="approved-date" class="text-right">November 25 2020</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-left">Rating:</p>

                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="star5">
                                <label for="star5"><img src="images/star-white.png" alt=""></label>
                                <input type="radio" name="rating" value="4" id="star4">
                                <label for="star4"><img src="images/star-white.png" alt=""></label>
                                <input type="radio" name="rating" value="3" id="star3">
                                <label for="star3"><img src="images/star-white.png" alt=""></label>
                                <input type="radio" name="rating" value="2" id="star2">
                                <label for="star2"><img src="images/star-white.png" alt=""></label>
                                <input type="radio" name="rating" value="1" id="star1">
                                <label for="star1"><img src="images/star-white.png" alt=""></label>
                            </div>
                            <p class="rate-review">100 Reviews</p>
                        </div>

                        <div class="col-md-12 flag">
                            <p>5 Users marked this note as inappropriate</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Notes Preview -->
    <section id="notes-preview">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 general-heading wow slideInLeft">
                        <h4>Notes Preview</h4>

                        <div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
                            <div class="responsive-wrapper responsive-wrapper-padding-bottom-90pct" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                                <iframe class="img-fluid" src="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">
                                    <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                            An &#105;frame should be displayed here but your browser version does not support &#105;frames.</em> Please update your browser to its most recent version and try again, or access the file <a href="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">with this link.</a>
                                    </p>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 general-heading wow slideInRight">
                        <h4>Customer Reviews</h4>

                        <div class="all-review">

                            <div class="customer-review">
                                <img src="images/reviewer/reviewer-1.png" alt="">
                                <div class="reviews-detail">
                                    <h5>Richard Brown</h5>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="star5">
                                        <label for="star5"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1"><img src="images/star-white.png" alt=""></label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat officia nam esse, repellendus consectetur!</p>
                                </div>
                            </div>
                            <hr>
                            <div class="customer-review">
                                <img src="images/reviewer/reviewer-2.png" alt="">
                                <div class="reviews-detail">
                                    <h5>Alice Ortiaz</h5>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="star5">
                                        <label for="star5"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1"><img src="images/star-white.png" alt=""></label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat officia nam esse, repellendus consectetur ab!</p>
                                </div>
                            </div>
                            <hr>
                            <div class="customer-review">
                                <img src="images/reviewer/reviewer-3.png" alt="">
                                <div class="reviews-detail">
                                    <h5>Sara Passmore</h5>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="star5">
                                        <label for="star5"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2"><img src="images/star-white.png" alt=""></label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1"><img src="images/star-white.png" alt=""></label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quaerat officia nam esse, repellendus consectetur ab!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Footer -->
    <div id="footer"></div>
    <!-- End -->

    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>

    <!--Bootstrap Js-->
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Other html load js-->
    <script src="js/other-html-load.js"></script>

    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body></html>
