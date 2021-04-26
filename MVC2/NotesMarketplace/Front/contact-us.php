<?php
session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$alert = '';

if(isset($_POST['submit'])) {
    
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    if($_SESSION['email']){
        $fname = $_SESSION['firstname'] . " " . $_SESSION['lastname'];
        $email = $_SESSION['email'];
    }
    else{
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
    }

    //mail function
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);
    
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
        $mail->Port = 587;  
        $mail->Username = "bhargavbhalala4321@gmail.com";
        $mail->Password = 'bhargav@Main123';
        // Sender and recipient
        $mail->setFrom($email, $fname);
        $mail->addAddress("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
        $mail->addReplyTo($email, $fname);
        $mail->IsHTML(true);
        $mail->Subject = "$fname - $subject";
        $mail->Body = "<P>Hello,<p>$comment</p><p>Regards,<br>$fname<br>$email</p>";
        $mail->AltBody = '';
        $mail->send();
        $alert = '<div>
                <p style="font-size:20px; color:green;" >Message sent ! Thank you for contacting us.</span>
                </div>';
    } catch (Exception $e) {
        $alert = '<div>
                <span>'.$e -> getMessage().'</span>
                </div>';
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
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

<?php 
    if(!empty($_SESSION['email'])){
        include 'header.php';
    } else {
        include 'header2.php';
    }
?>

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

                        <?php echo $alert;?>

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" class="contact-us-form" id="form">
                            <!-- Basic Fillup -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="fullname">Full Name*</label>
                                        <input type="text" class="form-control" name="fullname" id="fullname" value="<?php if(!empty(($_SESSION['email']))){ echo $_SESSION['firstname'].' '. $_SESSION['lastname'];}?>" placeholder="Enter your full name" >
                                        <small></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address*</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email'];}else{echo 'Enter your Email address';}?>" <?php if(!empty($_SESSION['email'])){ echo 'disabled';}?> >
                                        <small></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="subject">Subject*</label>
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject" >
                                        <small></small>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="comment">Comments / Questions*</label>
                                        <textarea class="form-control" name="comment" id="comment" rows="8" placeholder="commenting.."></textarea>
                                        <small></small>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2 wow zoomIn">
                                    <input type="submit" id="submit" name="submit" class="btn form-btn" value="Submit">
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

    <script type="text/javascript">
        const form = document.getElementById('form');
        const fname = document.getElementById('fullname');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const comment = document.getElementById('comment');

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
            const emailVal = email.value.trim();
            const subjectVal = subject.value.trim();
            const commentVal = comment.value.trim();

            //validate fullname
            if (fnameVal === "") {
                setErrorMsg(fname, 'Fullname cannot be blank');
            } else if (fnameVal.match(/[0-9]/g)) {
                setErrorMsg(fname, 'Number is not allowed');
            } else {
                setSuccessMsg(fname);
            }

            //validate Subject
            if (subjectVal === "") {
                setErrorMsg(subject, 'Subject cannot be blank');
            } else {
                setSuccessMsg(subject);
            }

            //validate Comment or Questions
            if (commentVal === "") {
                setErrorMsg(comment, 'Comment cannot be blank');
            } else {
                setSuccessMsg(comment);
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