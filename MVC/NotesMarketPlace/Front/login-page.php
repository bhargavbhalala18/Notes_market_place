
<?php 
 include 'db_connect.php';
 session_start();
 $_SESSION['login'] = true;
 
 $email_verified = false;
 $correct_email = false;
 $login_failed = false;
 
 if(isset($_POST['login'])){
      
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);    
     
    $query = "SELECT * FROM users WHERE email_id ='$email' AND password = '$password' AND is_active=1 AND is_email_verified = 1";
    $result = mysqli_query($conn,$query);
    $user_count = mysqli_num_rows($result);
 
    if($user_count == 1){
        $_SESSION['email'] = $email;
        header('Location:search-notes.php');
     } else {
        $login_failed = true;
    }
 
    //email verification 
    $email_verification = mysqli_query($conn , "SELECT is_email_verified FROM users WHERE email_id = 'email' AND is_email_verified = 0");
    $email_count = mysqli_num_rows($email_verification);
 
    if($email_count == 1){
        $email_verified = true;
    }
 
    //correct email
    $correct_email_check= mysqli_query($conn , "SELECT email_id FROM users WHERE email_id = '$email' ");
    $correct_email_count = mysqli_num_rows($correct_email_check);
 
    if($correct_email_count == 0){
        $correct_email = true;
    }
 }
 
 ?>

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

        <div class="container">

            <div class="row">
                  
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- top logo -->
                    <div class="form-logo text-center wow zoomIn"><img src="images/top-logo.png" alt="png"></div>
                </div>
                
            </div>
            
            <div class="row">
                
                <div class="col-md-3 col-sm-2 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Login Form -->
                    <form class="all-form wow zoomIn">
                        <div class="form-header text-center">
                            <h3>Login</h3>
                            <p>Enter your email and password to login</p>
                        </div>

                        <?php 
                            if ($email_verified)
                                echo "<small style='color:red;'>Please Verify your Email id first</small>";
                        ?>

                        <?php
                        if($correct_email){
                            echo '<div class="form-control error">
                                    <label for="email1">Email</label>
                                    <input type="email" name="email" id="email1" placeholder="Enter your email adress">
                                    <small style="color:red;">Please Enter a valid Email Address</small>
                                </div>';
                        } else {
                            echo '<div class="form-control">
                                    <label for="email1">Email</label>
                                    <input type="email" name="email" id="email1" placeholder="Enter your email adress">
                                </div>';
                        }
                        ?>

                        <?php
                        if($login_failed){
                            echo '<div class="form-control error">
                                    <label  for="password">Password <a id="fgt-pwd" href="forgotPassword-page.html">Forgot Password?</a></label>
                                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="on">
                                    <span toggle="#password" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                                    <small style="color:red;">The password that you have entered is incorrect</small>
                                </div>';
                            }
                        else{
                            echo '<div class="form-control">
                                    <label  for="password">Password <a id="fgt-pwd" href="forgotPassword-page.html">Forgot Password?</a></label>
                                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="on">
                                    <span toggle="#password" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                                </div>';
                        }
                        ?>
                        
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck">
                            <label class="form-check-label" for="exampleCheck">Check me out</label>
                        </div>

                        <div class="form-control">
                            <input type="submit" name="login" value="LogIn" class="btn btn-default form-btn">
                        </div>

                        <div class="form-footer text-center">
                            <p>Don't have an account? <a href="signUp-page.php">Sign Up</a></p>
                        </div>
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
