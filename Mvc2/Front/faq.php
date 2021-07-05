<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Tags -->
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

<body data-spy="scroll" data-target=".navbar" data-offset="6">

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
                            <li class="nav-link"><a href="search.html">Search Notes</a></li>
                            <li class="nav-link"><a href="add-note-page.html">Sell Your Notes</a></li>
                            <li class="nav-link"><a href="faq.html">FAQ</a></li>
                            <li class="nav-link"><a href="contact-us.html">Contact Us</a></li>
                            <li class="nav-link"><a class="btn btn-default nav-btn" href="login-page.html" role="button"><span class="">Login</span></a></li>
                        </ul>
                    </div>
                </div>

                <div id="mobile-nav">
                    <!-- Mobile Menu Open Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav navbar-nav">
                            <li class="nav-link"><a href="search.html">Search Notes</a></li>
                            <li class="nav-link"><a class="nav-link" href="add-note-page.html">Sell Your Notes</a></li>
                            <li class="nav-link"><a href="faq.html">FAQ</a></li>
                            <li class="nav-link"><a href="contact-us.html">Contact Us</a></li>
                            <li class="nav-link"><a class="btn btn-default" href="login-page.html" role="button"><span class="nav-btn">Login</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

    </header>
    <!-- Header Ends-->

    <section id="faq">
        <div class="container">
            <div class="content-box-first">
                <div class="general-heading wow slideInLeft">
                <h4>General-questions</h4></div>
                <div class="accordion wow zoomIn" id="general-question">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">What is Notes Marketplace?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 <img  class="plus" src="images/plus.png" alt="plus">
                                 <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#general-question">
                            <div class="card-body">
                                <p>Notes Marketplace is an online marketplace for university students to buy and sell their course notes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Where did Notes Marketplace start?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#general-question">
                            <div class="card-body">
                                <p>What started out as four friends chucking around an idea in Ahmedabad ended up turning into an earliest version of Notes Marketplace. So, with 2021 batch of tatvasoft – we has developed this product.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="general-heading wow slideInLeft"><h4>Uploaders</h4></div>
                <div class="accordion wow zoomIn" id="uploaders">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Why should I upload now?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>To maximize sales. We can't sell your notes if they are rotting on your hard drive. Your notes are available for purchase the instant they are approved, which means that you could be missing potential sales as we speak. Despite exam and holiday breaks, our users purchase notes all year round, so the best time to upload notes is always today.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">What can't I sell?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>We won't approve materials that have been created by your university or another third party. We also do not accept assignments, essays, practical’s or take-home exams. We love notes though.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">How long does it take to upload?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#uploaders">
                            <div class="card-body">
                                <p>Uploading notes is quick and easy. It can take as little as 90 seconds per set of notes. Put it this way, in the time it took to read these FAQs, you could’ve uploaded several sets of notes.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="general-heading wow slideInLeft"><h4>Downloaders</h4></div>
                <div class="accordion wow zoomIn" id="downloaders">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">How do I buy notes?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>Search for the notes you are after using the 'SEARCH NOTES' tab at the at the top right of every page. You can then filter results by university, category, course information etc. To purchase, go to detail page of note and click on download button. If notes are free to download – it will download over the browser and if notes are paid, Once Seller will allow download you can have notes at my downloads grid for actual download.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Why should I buy notes?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>The notes on our site are incredibly useful as an educational tool when used correctly. They effectively demonstrate the techniques that top students employ in order to receive top marks. They also summaries the course in a concise format and show what that student believed were the most important elements of the course. Learn from the best.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0">Will downloading notes guarantee I improve my grades?</h6>
                            <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseOne">
                                <img  class="plus" src="images/plus.png" alt="plus">
                                <img  class="minus" src="images/minus.png" alt="minus">
                            </a>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#downloaders">
                            <div class="card-body">
                                <p>How long is a piece of string? However, 90% of students who purchased notes through our site said that doing so improved their grades.</p>
                            </div>
                        </div>
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

    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>
    
    <!-- Other html load js-->
    <script src="js/other-html-load.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body></html>
