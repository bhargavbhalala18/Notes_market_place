<?php
session_start();
ob_start();
include 'db_connect.php'; //database connection

//email and passwords validation variable
$email_error = false;
$pass_error = false;
$email_pass = "";

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $email_query = " SELECT * FROM users WHERE email_id='$email' ";
    $query = mysqli_query($conn, $email_query);
    
    $row = mysqli_fetch_assoc($query); //Fetch row data in associative array from database.   
    $_SESSION['email'] = $row['email_id'];
    $_SESSION['firstname'] = $row['first_name'];
    $_SESSION['lastname'] = $row['last_name'];

    if(!empty($email) && !empty($password)) {
        $email_count = mysqli_num_rows($query); //No. of rows of same email id.
           
        if ($email_count) {
            $db_pass = $row['password']; //fetch password from database.

            if ($row['is_email_verified'] != 1) {  //is email verified checking.
                $email_pass = "<center><p style='color:red';>Please verify your email address</p></center>";
            } 
            elseif (password_verify($password, $db_pass)) { //password equality checking. 
                //Set coockies for check me out.
                if(isset($_POST['rememberMe'])) {
                    setcookie('emailcoockie',$email,time()+86400*7);
                    setcookie('passcoockie',$password,time()+86400*7);
                    header('Location:search.php');
                } 
                else {
                    header('Location:search.php'); }
            } 
            else {
                $pass_error=true; }
        } 
        else {
            $email_error=true; }
    } 
    else {
        $email_pass = "<center><p style='color:red';>Please enter both email and password</p></center>";
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
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="loginForm" class="all-form wow zoomIn">
                        <div class="form-header text-center">
                            <h3>Login</h3>
                            <p>Enter your email and password to login</p>
                        </div>

                        <?php
                            echo $email_pass;
                        ?>

                        <div class="form-group <?php if($email_error) { echo 'error'; } ?>">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php if(isset($_COOKIE['emailcoockie'])) { echo $_COOKIE['emailcoockie'];} ?>" placeholder="Enter your email adress">
                            <small style="color:red;">Incorrect Email</small>
                        </div>

                        <div class="form-group <?php if($pass_error) { echo 'error'; } ?>">
                            <label for="password">Password <a id="fgt-pwd" href="forgotPassword.php">Forgot Password?</a></label>
                            <input type="password" name="password" id="password" value="<?php if(isset($_COOKIE['passcoockie'])) { echo $_COOKIE['passcoockie'];} ?>" placeholder="Enter your password" autocomplete="on">
                            <span toggle="#password" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                            <small style="color:red;">The password that you have entered is incorrect</small>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="rememberMe" class="form-check-input" id="exampleCheck">
                            <label class="form-check-label" for="exampleCheck">Check me out</label>
                        </div>

                        <div class="form-group">
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


    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>

    <!--Bootstrap Js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body>
</html>