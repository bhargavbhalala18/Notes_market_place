<?php
session_start();
include 'db_connect.php';

$email = $_SESSION['email'];
$errorMsg = '';

if (isset($_POST['submit'])) {

    $newPassword = mysqli_real_escape_string($conn, $_POST['npassword']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['ncpassword']);

    $passQuery = mysqli_query($conn, "SELECT * FROM users WHERE email_id='$email'");

    if (!$passQuery) {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    $count = mysqli_num_rows($passQuery);

    if ($newPassword != $confirmPassword) {
        $errorMsg = "<center><p style='color:red';>Your NewPassword and ConfirmPassword are not Matched</p></center>";
    } elseif ($count) {
        $systemPass = password_hash($newPassword, PASSWORD_BCRYPT);
        $query = mysqli_query($conn, "UPDATE users SET password='$systemPass' WHERE email_id='$email'");
        echo "<script type='text/javascript'>
        alert('Your password has been changed successfully');
        window.location.href = 'http://localhost/NotesMarketPlace/Front/logout.php';
    </script>";
    } else {
        echo "<script>alert('Please First Login')</script>";
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
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="all-form wow zoomIn" id='cpform'>
                        <div class="form-header text-center">
                            <h3>Change Password</h3>
                            <p>Enter your new password to change your password.</p>
                        </div>

                        <?php
                        echo $errorMsg;
                        ?>

                        <div class="form-group">
                            <label class="control-label" for="npassword">New Password</label>
                            <input id="npassword" type="password" name="npassword" placeholder="Enter your new password">
                            <span toggle="#npassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                            <small style="color:red;"></small>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="ncpassword">Confirm Password</label>
                            <input id="ncpassword" type="password" name="ncpassword" placeholder="Enter your confirm password">
                            <span toggle="#ncpassword" class="fa fa-fw fa-eye eye-icon toggle-password"></span>
                        </div>

                        <input type='submit' class="btn btn-default form-btn" name='submit' value="submit">

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

    <script type="text/javascript">
        const form = document.getElementById('cpform');
        const nPassword = document.getElementById('npassword');


        form.addEventListener('submit', (event) => {
            validate();
        })

        // define the validate function
        const validate = () => {
            const nPasswordVal = nPassword.value.trim();

            //password vaildate
            if (nPasswordVal === '') {
                setErrorMsg(nPassword, 'NewPassword cannot be blank');
            } else if (nPasswordVal.length <= 6 || nPasswordVal.length >= 24) {
                setErrorMsg(nPassword, 'Password must be between 6 and 24 characters');
            } else if (!nPasswordVal.match(/[a-z]/g)) {
                setErrorMsg(nPassword, 'Password must have at least 1 lowercase character');
            } else if (!nPasswordVal.match(/[0-9]/g)) {
                setErrorMsg(nPassword, 'Password must have at least 1 digit');
            } else if (!nPasswordVal.match(/[$@$!%*{}#+=\(\)\^?&]/g)) {
                setErrorMsg(nPassword, 'Password must have at least 1 special character');
            } else if (nPasswordVal.indexOf(' ') >= 0) {
                setErrorMsg(nPassword, 'Password must not contain whitespaces');
            } else {
                setSuccessMsg(nPassword);
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