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

    <!--Header-nav-->
    <div id="header"></div>
    <!-- Ends -->

    <!-- popup modal -->
    <section id="review-popup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                        <div class="modal-dialog show" role="document" style="z-index: 9999;">
                            <div class="modal-content">
                                <a class="close text-right" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><img src="images/close.png" alt=""></span>
                                </a>
                                <div class="modal-title" style="margin-left: 30px;">
                                    <h4>Add Review</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="colmd-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="3" id="star5">
                                                        <label for="star5"><img src="images/star-white.png" alt=""></label>
                                                        <input type="radio" name="rating" value="4" id="star4">
                                                        <label for="star4"><img src="images/star-white.png" alt=""></label>
                                                        <input type="radio" name="rating" value="3" id="star3">
                                                        <label for="star3"><img src="images/star-white.png" alt=""></label>
                                                        <input type="radio" name="rating" value="2" id="star2">
                                                        <label for="star2"><img src="images/star-white.png" alt=""></label>
                                                        <input type="radio" name="rating" value="1" id="star1">
                                                        <label for="star1"><img src="images/star-white.png" alt=""></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="contact-comment">Comments</label>
                                                    <textarea class="form-control" id="contact-comment" rows="3" placeholder="commenting.."></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-5 col-sm-5">
                                                <a href="" class="fillup-btn" role="button">Submit</a>
                                            </div>
                                        </div>
                                    </form>'
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal end-->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- my download table -->
    <section id="my-download">
        <div class="content-box-first">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 table-caption-header">

                        <div class="col-md-6 general-heading wow slideInLeft">
                            <h4>My Downloads</h4>
                        </div>

                        <div class="col-md-4 wow slideInRight">
                            <form>
                                <div class="row">
                                    <div class="col-md-7 col-sm-10">
                                        <!-- Search image as icon-->
                                        <span class="input-group-addon">
                                            <img src="images/search-icon.png" alt="search">
                                        </span>
                                        <input type="search" class="form-control" id="searchbar" placeholder="Search.." value="">
                                    </div>

                                    <div class="col-md-5 col-sm-6">
                                        <a href="" class="add-note-btn" role="button">Search</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 wow zoomIn">
                        <div class="all-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SR NO.</th>
                                        <th scope="col">NOTE TITLE</th>
                                        <th scope="col">CATEGORY</th>
                                        <th scope="col">BUYER</th>
                                        <th scope="col">SELL TYPE</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">DOWNLOADED DATE/TIME</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Data Science</td>
                                        <td>Science</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Paid</td>
                                        <td>$250</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Accounts</td>
                                        <td>Commerce</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Social Studies</td>
                                        <td>Social</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>AI</td>
                                        <td>IT</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Paid</td>
                                        <td>$158</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Writing</td>
                                        <td>Arts</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Data Science</td>
                                        <td>Science</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Paid</td>
                                        <td>$555</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Accounts</td>
                                        <td>Commerce</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Social Studies</td>
                                        <td>Social</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>AI</td>
                                        <td>IT</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Paid</td>
                                        <td>$215</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Writing</td>
                                        <td>Arts</td>
                                        <td>testing123@gmail.com</td>
                                        <td>Free</td>
                                        <td>$115</td>
                                        <td>27 Nov 2020, 11:24:34</td>
                                        <td>
                                            <div class="dropdown dropleft">
                                                <img src="images/eye.png" alt="eye">
                                                &nbsp;
                                                <a href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/dots.png" alt="">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">Download Note</a>
                                                    <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Add Reviws/Feedback</a>
                                                    <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- pagination -->
                        <nav aria-label="Page navigation example" class="wow zoomIn">
                            <ul class="pagination justify-content-center">
                                <li class="page-arrow disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><img src="images/left-arrow.png" alt="left-arrow"></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-arrow">
                                    <a class="page-link" href="#"><img src="images/right-arrow.png" alt="right-arrow"></a>
                                </li>
                            </ul>
                        </nav>
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

    <!--Bootstrap Bundle Js-->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <!--Bootstrap Js-->
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Other html load js-->
    <script src="js/other-html-load.js"></script>

    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body></html>
