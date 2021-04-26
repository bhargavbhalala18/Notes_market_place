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

    <!-- DashBoard -->
    <section id="dashboard">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 add-note general-heading wow zoomIn">
                        <h3>Dashboard</h3>
                        <a class="add-note-btn" href="add-notes.php" role="button">Add Note</a>
                    </div>

                    <!-- left side -->
                    <div class="col-md-6 text-center">
                        <div class="row left-d-box wow slideInLeft">
                            <div class="col-md-4 d-box">
                                <img src="images/my-earning.png" alt="my-earning">
                                <h4>My Earning</h4>
                            </div>
                            <div class="col-md-4 d-box" id="sold-notes">
                                <h4>100</h4>
                                <p>Number of Notes Sold</p>
                            </div>
                            <div class="col-md-4 d-box" id="money-earned">
                                <h4>$10,00,000</h4>
                                <p>Money Earned</p>
                            </div>
                        </div>
                    </div>

                    <!-- right side-->
                    <div class="col-md-6 text-center">
                        <div class="row right-d-box">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 d-box wow zoomIn" id="my-downloads">
                                <h4>38</h4>
                                <p>My Downloads</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 d-box wow zoomIn" id="rejected-notes">
                                <h4>12</h4>
                                <p>My Rejected Notes</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 d-box wow zoomIn" id="buyer-requests">
                                <h4>102</h4>
                                <p>Buyer Requests</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Ends -->

    <!-- Progress Table -->
    <section id="progress-table">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-8 table-caption-header">

                        <div class="col-md-6 col-sm-6 general-heading wow slideInLeft">
                            <h4>In Progress Notes</h4>
                        </div>

                        <div class="col-md-4 col-sm-12 wow slideInRight">
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- Search image as icon-->
                                        <span class="input-group-addon">
                                            <img src="images/search-icon.png" alt="search">
                                        </span>
                                        <input type="search" class="form-control" id="searchbar" placeholder="Search.." value="">
                                    </div>

                                    <div class="col-md-4">
                                        <a href="" class="add-note-btn" role="button">Search</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 wow zoomIn">
                        <div class="all-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ADDED DATE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09-10-2020</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>Draft</td>
                                    <td><img src="images/edit.png" alt="edit"> &nbsp;
                                        <img src="images/delete.png" alt="delete">
                                    </td>
                                </tr>
                                <tr>
                                    <td>10-10-2020</td>
                                    <td>Accounts</td>
                                    <td>Commerce</td>
                                    <td>In Review</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="edit"></td>
                                </tr>
                                <tr>
                                    <td>11-10-2020</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>Submitted</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="edit"></td>
                                </tr>
                                <tr>
                                    <td>12-10-2020</td>
                                    <td>AI</td>
                                    <td>IT</td>
                                    <td>Submitted</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="edit"></td>
                                </tr>

                                <tr>
                                    <td>13-10-2020</td>
                                    <td>Writing</td>
                                    <td>Arts</td>
                                    <td>Draft</td>
                                    <td><img src="images/edit.png" alt="edit"> &nbsp;
                                        <img src="images/delete.png" alt="delete">&nbsp;
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

    <!-- Published Table -->
    <section id="published-table">
        <div class="content-box-sm">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 table-caption-header">

                        <div class="col-md-6 general-heading wow slideInLeft">
                            <h4>Published Notes</h4>
                        </div>

                        <div class="col-md-4 wow slideInRight">
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- Search image as icon-->
                                        <span class="input-group-addon">
                                            <img src="images/search-icon.png" alt="search">
                                        </span>
                                        <input type="search" class="form-control" id="searchbar" placeholder="Search.." value="">
                                    </div>

                                    <div class="col-md-4">
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
                                    <th scope="col">ADDED DATE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">SELL TYPE</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09-10-2020</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>Paid</td>
                                    <td>$575</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="eye"></td>
                                </tr>
                                <tr>
                                    <td>10-10-2020</td>
                                    <td>Accounts</td>
                                    <td>Commerce</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="eye"></td>
                                </tr>
                                <tr>
                                    <td>11-10-2020</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="eye"></td>
                                </tr>
                                <tr>
                                    <td>12-10-2020</td>
                                    <td>AI</td>
                                    <td>IT</td>
                                    <td>Paid</td>
                                    <td>$3542</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="eye"></td>
                                </tr>

                                <tr>
                                    <td>13-10-2020</td>
                                    <td>Writing</td>
                                    <td>Arts</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td><img class="table-eye" src="images/eye.png" alt="eye"></td>
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
    
    <!--Bootstrap Bundal Js-->
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

</body>

</html>
