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
<html>
<body>
    <!-- Header -->
    <header>
            <nav class="navbar navbar-expand-lg">
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
                                <li class="nav-link"><a href="search.php">Search Notes</a></li>
                                <li class="nav-link"><a href="add-notes.php">Sell Your Notes</a></li>
                                <li class="nav-link"><a href="faq.php">FAQ</a></li>
                                <li class="nav-link"><a href="contact-us.php">Contact Us</a></li>
                                <li class="nav-link"><a class="btn btn-default nav-btn" href="login-page.php" role="button"><span class="">Login</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="mobile-nav">
                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="nav navbar-nav">
                                <li class="nav-link"><a href="search.php">Search Notes</a></li>
                                <li class="nav-link"><a class="nav-link" href="add-notes.php">Sell Your Notes</a></li>
                                <li class="nav-link"><a href="faq.php">FAQ</a></li>
                                <li class="nav-link"><a href="contact-us.php">Contact Us</a></li>
                                <li class="nav-link"><a class="btn btn-default" href="login-page.php" role="button"><span class="nav-btn">Login</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>

        </header>
        <!-- Header Ends-->
    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <script src="js/script.js"></script>
</body>
</html>