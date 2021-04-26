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
    
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">
    
    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">
    
     <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!--Change Password Page-->
    <section id="form-page" class="img-fluid">

        <div class="container">

            <div class="row">
                  
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- top logo -->
                    <div class="form-logo text-center wow zoomIn" data-wow-duration="1s"><img src="images/top-logo.png" alt="png"></div>
                </div>
                
            </div>
            
            <div class="row">
                
                <div class="col-md-3 col-sm-2 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Change Password Form -->
                    <form class="all-form wow zoomIn">
                        <div class="form-header text-center">
                            <h3>Change Password</h3>
                            <p>Enter your new password to change your password.</p>
                        </div>

                        <div class="form-control">
                            <label class="control-label" for="opassword">Old Password</label>
                            <input id="opassword" type="password" name="password" placeholder="Enter your old password">
                            <span toggle="#opassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-control">
                            <label class="control-label" for="npassword">New Password</label>
                            <input id="npassword" type="password" name="password" placeholder="Enter your new password">
                            <span toggle="#npassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-control">
                            <label class="control-label" for="ncpassword">Confirm Password</label>
                            <input id="ncpassword" type="password" name="password" placeholder="Enter your confirm password">
                            <span toggle="#ncpassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                        </div>

                        
                        <input class="btn btn-default form-btn" value="Submit">

                    </form>
                </div>  
                <div class="col-md-3 col-sm-2 col-xs-3"></div>   
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
