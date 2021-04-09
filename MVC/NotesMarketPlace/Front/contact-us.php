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
        <nav class="navbar navbar-expand-lg">
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
                            <li class="nav-link"><a href="search.php">Search Notes</a></li>
                            <li class="nav-link"><a href="add-note-page.php">Sell Your Notes</a></li>
                            <li class="nav-link"><a href="faq.php">FAQ</a></li>
                            <li class="nav-link"><a href="contact-us.php">Contact Us</a></li>
                            <li class="nav-link"><a class="btn btn-default nav-btn" href="login-page.html" role="button"><span class="">Login</span></a></li>
                        </ul>
                    </div>
                </div>

                <div id="mobile-nav">
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav navbar-nav">
                            <li class="nav-link"><a href="search.php">Search Notes</a></li>
                            <li class="nav-link"><a class="nav-link" href="add-note-page.html">Sell Your Notes</a></li>
                            <li class="nav-link"><a href="faq.php">FAQ</a></li>
                            <li class="nav-link"><a href="contact-us.php">Contact Us</a></li>
                            <li class="nav-link"><a class="btn btn-default" href="login-page.php" role="button"><span class="nav-btn">Login</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

    </header>
    <!-- Header Ends-->

    <!-- Banner -->
    <section id="banner1">

        <div class="content-box-lg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">

                        <div class="banner-header text-center">
                            <h3 class="text-center">Contact Us</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Contact Us -->
    <section id="contact-us">
        <div class="content-box-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="general-heading wow slideInLeft">
                            <h3>Get In Touch</h3>
                            <p>Let us know how to get back to you</p>
                        </div>

                        <form class="contact-us-form">
                            <!-- Basic Fillup -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="fullname">Full Name*</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" value="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-user-email">Email Address*</label>
                                        <input type="email" class="form-control" id="contact-user-email" placeholder="Enter your email adress" value="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-subject">Subject*</label>
                                        <input type="text" class="form-control" id="contact-subject" placeholder="Enter your subject" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="contact-comment">Comments</label>
                                        <textarea class="form-control" id="contact-comment" rows="8" placeholder="commenting.."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2 wow zoomIn">
                                    <a href="" class="fillup-btn" role="button">Submit</a>
                                </div>
                            </div>
                        </form>

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

</body>

</html>
