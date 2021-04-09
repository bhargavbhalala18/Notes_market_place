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
                            <li><a href="dashboard.html">Dashboard</a></li>
                            
                            <!-- Notes dropdown-->
                            <li><div class="dropdown">
                                    <a href="#" class="drop-a" id="dropdown-notes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Notes
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdown-notes">
                                        <a class="dropdown-item" href="note-under-rab.html">Notes Under Review</a>
                                        <a class="dropdown-item" href="published-notes.html">Published Notes</a>
                                        <a class="dropdown-item" href="download-note.html">Downloaded Notes</a>
                                        <a class="dropdown-item" href="rejected-notes.html">Rejected Notes</a>
                                       
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="members.html">Members</a></li>
                            
                            <!-- Reports dropdown-->
                            <li><div class="dropdown">
                                    <a href="#" class="drop-a" id="dropdown-reports" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        Reports
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdown-reports">
                                        <a class="dropdown-item" href="spam-request.html">Spam Reports</a> 
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="#">Settings</a></li>
                            
                            <!-- Admin Photo dropdown-->
                            <li><div class="dropdown user-photo">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="images/user-img.png" alt="">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="my-profile.html">Update Profile</a>
                                        <a class="dropdown-item" href="forgot-password.html">Change Password</a>
                                        <a class="drop-btn" href="login-page.html" role="button">LOGOUT</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="nav-btn" href="login.html" role="button">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div id="mobile-nav">
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav navbar-nav text-left">
                            <li><a href="dashboard.html">Dashboard</a></li>
                            
                            <!-- Notes dropdown-->
                            <li><div class="dropdown">
                                    <a role="button" id="dropdown-notes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Notes
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdown-notes">
                                        <a class="dropdown-item" href="note-under-rab.html">Notes Under Review</a>
                                        <a class="dropdown-item" href="published-notes.html">Published Notes</a>
                                        <a class="dropdown-item" href="download-note.html">Downloaded Notes</a>
                                        <a class="dropdown-item" href="rejected-notes.html">Rejected Notes</a>
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="members.html">Members</a></li>
                            
                            <!-- Reports dropdown-->
                            <li><div class="dropdown">
                                    <a role="button" id="dropdown-reports" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reports
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdown-reports">
                                        <a class="dropdown-item" href="#">Spam Reports</a> 
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="#">Settings</a></li>
                            
                            <!-- Admin Photo dropdown-->
                            <li><div class="dropdown user-photo">
                                    <a role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="images/user-img.png" alt="">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Update Profile</a>
                                        <a class="dropdown-item" href="#">Change Password</a>
                                        <a class="drop-btn" href="login-page.html" role="button">LOGOUT</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="nav-btn" href="login.html" role="button">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
             </div>
        </nav> 
    </header>

    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <script src="js/script.js"></script>

</body>
</html> 
