<?php
session_start();
?>

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

    <!-- navbar header -->
    <?php 
    if($_SESSION['email']){
        include 'header.php';
    } else {
        include 'header2.php';}
    ?>

    <!-- Banner -->
    <section id="banner2">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 home-heading wow slideInLeft">
                    <div class="container">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Download Free/Paid Notes<br>or Sale your Book</h2>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur est incidunt, distinctio odit cumque velit ut eveniet nisi iste laborum laboriosam, fugit quisquam, reprehenderit vero nesciunt. Dolor itaque quidem, impedit.</p>
                        </div>

                        <div class="col-md-6 br-btn col-sm-6"><a
                        href=""><Button>LEARN &nbsp;MORE</Button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- About -->
    <section id="about">
        <div class="content-box-sm">
            <div class="container">
                <div class="row general-heading">

                    <div class="col-md-6">
                        <!-- Left side -->
                        <div class="wow slideInLeft" data-wow-duration="1s">
                            <h3>About<br>NotesMarketPlace</h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Right Side -->
                        <div class="about-content wow slideInRight" data-wow-duration="1s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatem excepturi dignissimos, hic, omnis atque debitis veniam expedita, ipsa dolorum quos quasi! Rerum, ab temporibus doloremque.</p>
                            <p>Alias culpa quos unde labore corporis pariatur perspiciatis ipsam sed voluptas obcaecati sapiente omnis magnam aut. Voluptates ducimus, voluptatem ad fugit sint dolorem.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Works -->
    <section id="works">
        <div class="content-box-sm">
            <div class="container">
                <div class="row text-center general-heading">
                   
                    <div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">
                        <h3>How It Works</h3>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft upload-seller">
                        <span class="rounded-logo">
                        <img alt="100x100" src="images/download.png" >
                        </span>
                        <h4>Download Free/Paid Notes</h4>
                        <p class="text-center">Get aterial for your<br>Cource etc.</p>
                        <a href=""><button class="general-btn">DOWNLOAD</button></a>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight upload-seller">
                        <span class="rounded-logo">
                        <img alt="100x100" src="images/seller.png">
                        </span>
                        <h4>Seller</h4>
                        <p class="text-center">Upload and Download Cource<br>and Materials etc.</p>
                        <a href=""><button class="general-btn">SELL &nbsp;BOOK</button></a>
                    </div>
                    
                </div> 
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- customers -->
    <section id="customers">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 text-center wow zoomIn general-heading">
                        <h3>What Our Custommers Are Saying</h3>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 wow slideInLeft">
                        <div class="customer-details  general-heading">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img class="rounded-circle img-fluid" alt="100x100" src="images/customer/customer-1.png" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h4>Walter Meller</h4>
                                    <p>Founder &amp; CEO, Gateway company</p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nihil neque laboriosam laborum rem placeat ullam harum, quam modi consequatur!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 wow zoomIn">
                        <div class="customer-details  general-heading">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img class="rounded-circle img-fluid" alt="100x100" src="images/customer/customer-2.png" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h4>Jonnie Riley</h4>
                                    <p>Employee, Curious Snacks company</p>
                                </div>
                                <div class=" col-md-12 col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nihil neque laboriosam laborum rem placeat ullam harum, quam modi consequatur!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 wow zoomIn">
                        <div class="customer-details  general-heading">

                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img class="rounded-circle img-fluid" alt="100x100" src="images/customer/customer-3.png" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h4 class="">Amita Luna</h4>
                                    <p>Teacher, Saint Joshreph High School</p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nihil neque laboriosam laborum rem placeat ullam harum, quam modi consequatur!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 wow slideInRight">
                        <div class="customer-details general-heading">

                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img class="rounded-circle img-fluid" alt="100x100" src="images/customer/customer-4.png" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h4 class="">Daniel Cardos</h4>
                                    <p>Software Engineer, Infinitum Company</p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nihil neque laboriosam laborum rem placeat ullam harum, quam modi consequatur!</p>
                                </div>
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
    
    <!-- Other html load js-->
    <script src="js/other-html-load.js"></script>

    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

    <!-- home-nav -->
    <script src="js/home-nav.js"></script>

</body></html>
