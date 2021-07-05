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
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    
    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">
    
     <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!--Login Page-->
    <section id="form-page" class="img-fluid">

        <div id="form-overlay"></div>

        <div class="container-fluid">

            <div class="row">
                  
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- top logo -->
                    <div class="form-logo text-center wow zoomIn"><img src="images/top-logo.png" alt="png"></div>
                </div>
                
            </div>
            
            <div class="row">
                
                <div class="col-md-3 col-sm-6 col-xs-6"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Login Form -->
                    <form class="all-form wow zoomIn">
                        <div class="form-header text-center">
                            <h3>Login</h3>
                            <p>Enter your email and password to login</p>
                        </div>

                        <div class="form-group">
                            <label for="email1">Email</label>
                            <input type="email" class="form-control all-email" id="email1" placeholder="Enter your email adress" value="notesmarketplace77@gmail.com">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password-field">Password <a id="fgt-pwd" href="forgotPassword-page.html">Forgot Password?</a></label>
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Enter your password">
                            <span class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                            <p id="pwdHelp">The password that you've entered is incorrect</p>
                        </div>
                           
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <a class="btn btn-default form-btn" id="btn1" href="" role="button">Login</a>

                        <div class="sign-up text-center">
                            <p>Don't have an account? <a href="signUp-page.html">Sign Up</a></p>
                        </div>
                    </form>
                </div>  
                <div class="col-md-3 col-sm-6 col-xs-6"></div>   
            </div>
        </div>
    </section>
    <!-- Ends -->



    <!--Bootstrap Js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body>

</html>
