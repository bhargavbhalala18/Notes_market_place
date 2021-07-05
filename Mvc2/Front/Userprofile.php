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
                            <li><a class="btn btn-default" href="login-page.html" role="button"><button class="nav-btn">Login</button></a></li>
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
                            <li><a class="btn btn-default nav-btn" href="login-page.html" role="button">Login</a></li>
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
                                <h3 class="text-center">User Profile</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Ends -->

    <!-- Details Form -->
    <section id="details">
        <div class="content-box-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <form class="basic-details">

                            <!-- Basic Profile Address -->
                            <h4 class="basic-profile-details wow slideInLeft">Basic Profile Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="firstName1">First Name*</label>
                                        <input type="text" class="form-control" id="firstName1" placeholder="Enter your first name" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="lastName1">Last Name*</label>
                                        <input type="text" class="form-control" id="lastName1" placeholder="Enter your first name" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="email2">Email*</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter your email adress" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="birthdate">Date Of Birth</label>
                                        <input type="date" class="form-control" id="birthdate" value="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control">
                                        <option disabled selected hidden>Select Your Gender</option>
                                        <option>Male</option>
                                        <option>Femal</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="phone"> Phone Number*</label>

                                        <div class="row">

                                            <div class="col-md-3 col-sm-1 col-xs-1">
                                                <select id="countrynumber" class="form-control" required>
                                                    <option selected>+91</option>
                                                    <option>+86</option>
                                                    <option>+1</option>
                                                    <option>+83</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-4 pull-right">
                                                <input type="text" id="phone" placeholder="Enter your phone number" required>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="file-input">Profile Picture
                                        </label>
                                        <input id="file-input" class="file-upload wow fadeInUp" type="file">
                                        <div class="toggle-upload-img text-center">
                                            <img src="images/upload-file.png" alt="upload">
                                            <div>
                                                <p>upload a picture</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Details -->
                            <h4 class="address-details wow slideInLeft">Address Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="address1">Address Line 1*</label>
                                        <input type="text" class="form-control" id="address1" placeholder="Enter your address" value="" required>

                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="address2">Address Line 2</label>
                                        <input type="text" class="form-control" id="address2" placeholder="Enter your address" value="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="city">city*</label>
                                        <input type="text" class="form-control" id="city" placeholder="Enter your city" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="state">State*</label>
                                        <input type="text" class="form-control" id="state" placeholder="Enter your state" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="zipcode">ZipCode*</label>
                                        <input type="text" class="form-control" id="zipcode" value="" placeholder="Enter your zipcode" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <label for="country">Country*</label>
                                    <select id="country" class="form-control">
                                        <option disabled selected hidden>Select Your country</option>
                                        <option>India</option>
                                        <option>US</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                            </div>

                            <!-- University & College Information-->
                            <h4 class="college-details wow slideInLeft">University and College Information</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="university">University</label>
                                        <input type="text" class="form-control" id="university" placeholder="Enter your university" value="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="college">College</label>
                                        <input type="text" class="form-control" id="college" placeholder="Enter your college" value="">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-md-2 col-sm-4 wow slideInLeft">
                                    <a href="" class="btn btn-default form-btn" role="button">SUBMIT</a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>

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
