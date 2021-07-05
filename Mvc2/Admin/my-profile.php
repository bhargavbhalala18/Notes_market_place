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
    
    <!-- Header-nav -->
    <div id="header"></div>
    <!-- Ends -->

    <!-- Profile Details Form -->
    <section id="my-profile">
        <div class="content-box-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <form class="my-profile-details general-heading">

                            <!-- My Profile Details -->
                            <h4 class="wow slideInLeft">My Profile</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="firstName1">First Name*</label>
                                        <input type="text" class="form-control" id="firstName1" placeholder="Enter your first name" value="John" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6"></div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="lastName1">Last Name*</label>
                                        <input type="text" class="form-control" id="lastName1" placeholder="Enter your first name" value="Picard" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6"></div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="email2">Email*</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter your email adress" value="fernandoocram@gmail.com" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6"></div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="email2">Secondary Email</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter your email adress" value="">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6"></div>

                                <div class="col-md-6 col-sm-6 col-xs-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="phone"> Phone Number</label>

                                        <div class="row">

                                            <div class="col-md-3 col-sm-1 col-xs-1">
                                                <select id="countrynumber" class="form-control">
                                                    <option selected>+91</option>
                                                    <option>+86</option>
                                                    <option>+1</option>
                                                    <option>+83</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-4 pull-right">
                                                <input type="text" id="phone" placeholder="Enter your phone number">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6"></div>

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
                                
                                <div class="col-md-6 col-sm-6"></div>
                                
                                <!-- Submit Button -->
                                <div class="col-md-2 col-sm-4 wow slideInLeft">
                                    <a href="" class="btn btn-default fillup-btn" role="button">SUBMIT</a>
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
