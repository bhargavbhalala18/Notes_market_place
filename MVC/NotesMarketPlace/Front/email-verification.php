<?php
//Connection with database
include "db_connect.php";
session_start();
//get id 
$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $id);
$firstname = $_SESSION['username'];

if (isset($_POST['verify'])){
    $query="UPDATE users SET is_email_verified=1 WHERE id=$id";
    $vquery=mysqli_query($conn, $query);
    if(!$vquery){
        die("Connection Failed" . mysqli_error($conn));
    }else
        header("Location:http://localhost/NotesMarketPlace/Front/login-page.php");
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
    
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">
    
    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">
    
     <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!--Login Page-->
    <section id="form-page" class="img-fluid">

        <div class="container">
            
            <div class="row">
                
                <div class="col-md-3 col-sm-2 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Email Verification -->
                    <form method="post" class="all-form wow zoomIn">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <img class="img-fluid" src="images/logo.png" alt="logo">
                            </div>
                            
                             <div class="col-md-12">
                                <br>
                                <h3>Email Verification</h3>
                            </div>
                            
                            <div class="col-md-12">
                                <h5>Dear <span><?php echo "$firstname,";?></span></h5>'
                            </div>
                            
                            <div class="col-md-12">
                                <p>Thank for Signing up!<br>
                                Simply click below for email verification.</p>
                            </div>
                            
                            <div class="col-md-12">
                                <input type="submit" id="verify" name="verify" class="btn btn-default verify-btn" value="VERIFY &nbsp;EMAIL &nbsp;ADDRESS">
                            </div>
                               
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
