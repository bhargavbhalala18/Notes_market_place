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

    <!-- Header-nav -->
    <div id="header"></div>
    <!-- Ends -->

    <!-- DashBoard -->
    <section id="dashboard">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 add-note general-heading wow zoomIn">
                        <h3>Dashboard</h3>
                    </div>

                    <div class="col-md-12 text-center d-boxes">

                        <div class="d-box" id="no-notes-review">
                            <h4>20</h4>
                            <p>Number of Notes in Review for Publish</p>
                        </div>
                        <div class="d-box" id="no-downloaded-notes">
                            <h4>103</h4>
                            <p>Number of New Notes Downloaded</p>
                            <p>(Last 7 Days)</p>
                        </div>
                        <div class="d-box" id="no-new-register">
                            <h4>223</h4>
                            <p>Number of New Registration</p>
                            <p>(Last 7 days)</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Published Table -->
    <section id="published-table">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 table-caption-header">
                        <div class="row">

                            <div class="col-md-4 col-sm-4 general-heading wow slideInLeft">
                                <h4>Published Notes</h4>
                            </div>

                            <div class="col-md-7 col-sm-7 wow slideInRight">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Search image as icon-->
                                            <span class="search-icon">
                                                <img src="images/search-icon.png" alt="search">
                                            </span>
                                            <input type="search" class="form-control" id="search-bar" placeholder="Search.." value="">
                                        </div>

                                        <div class="col-md-3">
                                            <a href="" class="add-note-btn" role="button">Search</a>
                                        </div>

                                        <div class="col-md-3">
                                            <select id="coun" class="form-control">
                                                <option disabled selected hidden>Select month</option>
                                                <option>Jan</option>
                                                <option>Feb</option>
                                                <option>March</option>
                                                <option>Apr</option>
                                                <option>May</option>
                                                <option>Jun</option>
                                                <option>Jul</option>
                                                <option>Aug</option>
                                                <option>Sep</option>
                                                <option>Oct</option>
                                                <option>Nov</option>
                                                <option>Dec</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 wow zoomIn">
                        <div class="all-table table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">SR NO.</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">CATEGORY</th>
                                        <th scope="col">ATTACHMENT SIZE</th>
                                        <th scope="col">SELL TYPE</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">PUBLISHER</th>
                                        <th scope="col">PUBLISH DATE</th>
                                        <th scope="col">NUMBER OF DOWNLOADS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Data Science</td>
                                        <td>Science</td>
                                        <td>10 KB</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>Pritesh Panchal</td>
                                        <td>09-10-2020, 10:10</td>
                                        <td>10</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Accounts</td>
                                        <td>Commerce</td>
                                        <td>20 MB</td>
                                        <td>Paid</td>
                                        <td>$22</td>
                                        <td>Rahil Shah</td>
                                        <td>10-10-2020, 12:30</td>
                                        <td>21</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Social Studies</td>
                                        <td>Social</td>
                                        <td>3 MB</td>
                                        <td>Paid</td>
                                        <td>$56</td>
                                        <td>Anish Patel</td>
                                        <td>12-10-2020, 10:10</td>
                                        <td>13</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>AI</td>
                                        <td>IT</td>
                                        <td>1 MB</td>
                                        <td>Free</td>
                                        <td>$0</td>
                                        <td>Vijay Vaishnav</td>
                                        <td>11-10-2020, 01:00</td>
                                        <td>34</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Writing</td>
                                        <td>Arts</td>
                                        <td>105 KB</td>
                                        <td>Paid</td>
                                        <td>$90</td>
                                        <td>Mehul Patel</td>
                                        <td>13-10-2020, 11:25</td>
                                        <td>9</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
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

    <!--Bootstrap Bundale Js-->
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
