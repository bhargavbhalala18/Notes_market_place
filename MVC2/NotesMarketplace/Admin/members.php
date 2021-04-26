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

    <!-- members table -->
    <section id="members-table">
        <div class="content-box-first">
            <div class="container table-caption-header">
                <div class="row">

                    <div class="col-md-6 general-heading wow slideInLeft" style="margin-bottom: 15px;">
                        <h3>Members</h3>
                    </div>

                    <div class="col-md-6 wow slideInRight">
                        <form>
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <!-- Search image as icon-->
                                    <span class="input-group-addon">
                                        <img src="images/search-icon.png" alt="search">
                                    </span>
                                    <input type="search" class="form-control" id="searchbar" placeholder="Search.." value="">
                                </div>

                                <div class="col-md-5 col-sm-4">
                                    <a href="" class="add-note-btn" role="button">Search</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 wow zoomIn">
                        <div class="all-table table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">SR NO.</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">LAST NAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col" style="width: 150px;">JOINING DATE</th>
                                        <th scope="col">UNDER REVIEW NOTES</th>
                                        <th scope="col">PUBLISHED NOTES</th>
                                        <th scope="col">DOWNLOADED NOTES</th>
                                        <th scope="col">TOTAL EXPENSES</th>
                                        <th scope="col">TOTAL EARNING</th>
                                        <th scope="col"></th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Khyati</td>
                                        <td>Patel</td>
                                        <td>khyatipatel@gmail.com</td>
                                        <td>09-10-2020, 10:10</td>
                                        <td style="color: #6255a5;">19</td>
                                        <td style="color: #6255a5;">10</td>
                                        <td style="color: #6255a5;">22</td>
                                        <td style="color: #6255a5;">$220</td>
                                        <td>$177</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Deactivate</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Rahil</td>
                                        <td>Shah</td>
                                        <td>rahilshah@gmail.com</td>
                                        <td>10-10-2020, 12:30</td>
                                        <td style="color: #6255a5;">4</td>
                                        <td style="color: #6255a5;">5</td>
                                        <td style="color: #6255a5;">4</td>
                                        <td style="color: #6255a5;">$120</td>
                                        <td>$167</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Deactivate</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Suman</td>
                                        <td>Trivedi</td>
                                        <td>sumantrivedi@gmail.com</td>
                                        <td>11-10-2020, 01:00</td>
                                        <td style="color: #6255a5;">12</td>
                                        <td style="color: #6255a5;">11</td>
                                        <td style="color: #6255a5;">17</td>
                                        <td style="color: #6255a5;">$886</td>
                                        <td>$978</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Deactivate</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Raj</td>
                                        <td>Malhotra</td>
                                        <td>rajmalhotra@gmail.com</td>
                                        <td>12-10-2020, 10:10</td>
                                        <td style="color: #6255a5;">2</td>
                                        <td style="color: #6255a5;">123</td>
                                        <td style="color: #6255a5;">28</td>
                                        <td style="color: #6255a5;">$1284</td>
                                        <td>$15254</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Deactivate</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Niya</td>
                                        <td>Patel</td>
                                        <td>niyapatel@gmail.com</td>
                                        <td>13-10-2020, 11:25</td>
                                        <td style="color: #6255a5;">20</td>
                                        <td style="color: #6255a5;">1</td>
                                        <td style="color: #6255a5;">0</td>
                                        <td style="color: #6255a5;">$0</td>
                                        <td>$69</td>
                                        <td>
                                            <a href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/dots.png" alt="dots">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" data-target="#exampleModalCenter" data-toggle="modal">Deactivate</a>
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
