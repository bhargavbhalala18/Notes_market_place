<?php
session_start();
include 'db_connect.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$success_msg = "";
$mail_sent = false;

if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $cnfpassword = mysqli_real_escape_string($conn, $_POST["cnfpassword"]);

    // email duplicate checking
    $check_mail = mysqli_query($conn, "SELECT * FROM users WHERE email_id='$email'");
    $email_count = mysqli_num_rows($check_mail);

    if ($email_count > 0) {
        $success_msg = "<center><p style='color:red; margin:0;'>Email id already present </p></center>";
    } 
    else if ($password != $cnfpassword) {
        $success_msg = "<center><p style='color:red';>Passwords are not matched</p></center>";
    } 
    else {

        $password = password_hash($password, PASSWORD_BCRYPT); // Password Encryption

        // data entry to database
        $sqlquery = "INSERT INTO users (role_id, first_name, last_name, email_id, password, is_email_verified, created_date, is_active) VALUES (1, '$firstname', '$lastname', '$email', '$password', 0, current_timestamp(), 1)";

        $iresult = mysqli_query($conn, $sqlquery);
        if (!$iresult) {
            die("QUERY FAILED" . mysqli_error($conn));
        }

        // success message after data entry
        $success_msg = "<center><p style='color:green';><span><i class='fa fa-check-circle'></i></span> Your account has been successfully created.</p></center>";

        // firstname in session
        $_SESSION['first_name'] = $firstname;
       
        //userid getter
        $id = mysqli_insert_id($conn);

        //mail function
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer();
        $alert = '';

        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
            $mail->Port = 587;  
            $mail->Username = "bhargavbhalala4321@gmail.com";
            $mail->Password = 'bhargav@Main123';
            // Sender and recipient
            $mail->setFrom("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
            $mail->addAddress($email, $firstname, $lastname);
            $mail->addReplyTo("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
            $mail->IsHTML(true);
            $mail->Subject = "Email verification";
            $mail->Body = "<h3>Hello $firstname,<br></h3>
            <p>Thank you for signing up with us. Please click on below link to verify your email address and to
            do login.</p>
            <a href='http://localhost/NotesMarketPlace/Front/email-verification.php?id=$id'><h4>Click for Email Verification</h4></a>
            <p>Regards,<br>Notes Marketplace</p>";
            $mail->AltBody = '';
            $mail->send();
            $mail_sent = true;
        } catch (Exception $e) {
            $alert = '<div>
                    <span>'.$e -> getMessage().'</span>
                    </div>';
        }
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
    <!--SignUp Page-->
    <section id="form-page" class="img-fluid">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- top logo -->
                    <div class="form-logo signup-logo text-center wow zoomIn"><img src="images/top-logo.png" alt="png">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3 col-sm-2 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- SignUp Form -->
                    <form action="signup-page.php" method="post" id="form" class="all-form signup-form wow zoomIn">
                        <div class="form-header text-center">
                            <h3>Create an Acoount</h3>
                            <p>Enter your details to signup</p>
                        </div>

                        <div class="validation">
                            <?php
                            echo $success_msg;
                            ?>
                        </div>

                        <div class="form-group">
                            <label for="fname">First Name*</label>
                            <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                            <small></small>
                        </div>

                        <div class="form-group">
                            <label for="lname">Last Name*</label>
                            <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                            <small></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email adress">
                            <small></small>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password">
                            <span toggle="#password" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                            <small></small>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="cpassword">Confirm Password</label>
                            <input id="cpassword" type="password" name="cnfpassword" placeholder="Enter your confirm password">
                            <span toggle="#cpassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                            <small></small>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-default form-btn">
                        </div>

                        <?php 
                        if($mail_sent){
                            echo "<center><p style='margin-top:-20px; color:#6255a5;'>We've just sent a verification link to <strong> $email</strong>. Please check your inbox.</p></center>";
                        } 
                        ?>

                        <div class="form-group form-footer text-center">
                            <p>Already have an account? <a href="login-page.php">Login</a></p>
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

    <script type="text/javascript">
        const form = document.getElementById('form');
        const fname = document.getElementById('fname');
        const lname = document.getElementById('lname');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const cpassword = document.getElementById('cpassword');

        form.addEventListener('submit', (event) => {
            validate();
        })


        //more email validate
        const isEmail = (emailVal) => {
            const atSymbol = emailVal.indexOf('@');
            if (atSymbol < 1) return false;
            const dot = emailVal.lastIndexOf('.');
            if (dot <= atSymbol + 3) return false;
            if (dot === emailVal.length - 1) return false;
            return true;
        }


        // define the validate function

        const validate = () => {
            const fnameVal = fname.value.trim();
            const lnameVal = lname.value.trim();
            const emailVal = email.value.trim();
            const passwordVal = password.value.trim();
            const cpasswordVal = cpassword.value.trim();

            //validate firstname
            if (fnameVal === "") {
                setErrorMsg(fname, 'Firstname cannot be blank');
            } else if (fnameVal.length <= 2) {
                setErrorMsg(fname, 'minimum 3 character required');
            } else if (fnameVal.match(/[0-9]/g)) {
                setErrorMsg(fname, 'number is not allowed');
            } else {
                setSuccessMsg(fname);
            }

            //validate lastname
            if (lnameVal === "") {
                setErrorMsg(lname, 'Lastname cannot be blank');
            } else if (lnameVal.length <= 2) {
                setErrorMsg(lname, 'Minimum 3 character required');
            } else if (lnameVal.match(/[0-9]/g)) {
                setErrorMsg(lname, 'number is not allowed');
            } else {
                setSuccessMsg(lname);
            }

            //validate email
            if (emailVal === "") {
                setErrorMsg(email, 'Email cannot be blank');
            } else if (!isEmail(emailVal)) {
                setErrorMsg(email, 'Not a valid Email');
            } else {
                setSuccessMsg(email);
            }

            //password vaildate
            if (passwordVal === '') {
                setErrorMsg(password, 'Password cannot be blank');
            } else if (passwordVal.length <= 6 || passwordVal.length >= 24) {
                setErrorMsg(password, 'Password must be between 6 and 24 characters');
            } else if (!passwordVal.match(/[a-z]/g)) {
                setErrorMsg(password, 'Password must have at least 1 lowercase character');
            } else if (!passwordVal.match(/[0-9]/g)) {
                setErrorMsg(password, 'Password must have at least 1 digit');
            } else if (!passwordVal.match(/[$@$!%*{}#+=\(\)\^?&]/g)) {
                setErrorMsg(password, 'Password must have at least 1 special character');
            } else if (passwordVal.indexOf(' ') >= 0) {
                setErrorMsg(password, 'Password must not contain whitespaces');
            } else {
                setSuccessMsg(password);
            }

            //confirm password validate
            if (cpasswordVal === '') {
                setErrorMsg(cpassword, 'Confirm password cannot be blank');
            } else if (passwordVal !== cpasswordVal) {
                setErrorMsg(cpassword, 'Passwords does not match');
            } else {
                setSuccessMsg(cpassword);
            }

        }

        function setErrorMsg(input, errormsgs) {
            const formControl = input.parentElement;
            formControl.className = "form-group error";
            const erro = formControl.querySelector('small');
            erro.textContent = errormsgs;
            event.preventDefault();
        }

        function setSuccessMsg(input) {
            const formControl = input.parentElement;
            formControl.className = "form-group success";

        }
    </script>

</body>

</html>