
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

   <!-- Banner -->
    <section id="banner1">

            <div class="content-box-lg">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">

                            <div class="banner-header text-center">
                                <h3 class="text-center">Add Notes</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Ends -->

    <!--Note Fillup Details Form -->
    <section id="fillup-notes-detail">
        <div class="content-box-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <form class="note-fillup-details">

                            <!-- Basic Note Details-->
                            <h4 class="wow slideInLeft">Basic Note Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="title">Title*</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter your notes title" value="" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="category">Category*</label>
                                        <select id="category" class="form-control" required>
                                        <option disabled selected hidden>Select Your category</option>
                                        <option>IT</option>
                                        <option>CS</option>
                                        <option>MBA</option>
                                        <option>Social</option>
                                        <option>Science</option>
                                        <option>Commerce</option>
                                        <option>Arts</option>
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="file-input">Display Picture
                                        </label>
                                        <input id="file-input" class="file-upload wow fadeInUp" type="file">
                                        <div class="toggle-upload-img text-center">
                                            <img src="images/upload-file.png" alt="upload">
                                            <div>
                                                <p>Upload a picture</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="note-input">Upload Notes*
                                        </label>
                                        <input id="note-input" class="file-upload wow fadeInUp" type="file">
                                        <div class="toggle-upload-img text-center">
                                            <img src="images/upload-note.png" alt="upload">
                                            <div>
                                                <p>Upload your notes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select id="type" class="form-control">
                                        <option disabled selected hidden>Select Your Notes Type</option>
                                        <option>Hands Written</option>
                                        <option>Story Book</option>
                                        <option>University Notes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="total-pages">Number of Pages</label>
                                        <input type="number" class="form-control" id="total-pages" placeholder="Enter number of pages" value="">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description*</label>
                                        <textarea class="form-control" id="description" value="">Enter your description</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Institution Information -->
                            <h4 class="wow slideInLeft">Institution Information</h4>
                            <div class="row">
                               
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <label for="country">Country</label>
                                    <select id="country" class="form-control">
                                        <option disabled selected hidden>Select Your country</option>
                                        <option>India</option>
                                        <option>US</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 wow slideInRight" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <label for="institution-name">Institution Name</label>
                                        <input type="text" class="form-control" id="institution-name" placeholder="Enter your institution name" value="">
                                    </div>
                                </div>
                            </div>

                            <!-- Course Details -->
                            <h4 class="wow slideInLeft">Course Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="course-name">Course Name</label>
                                        <input type="text" class="form-control" id="course-name" placeholder="Enter your course name" value="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="course-code">Course Code</label>
                                        <input type="text" class="form-control" id="course-code" placeholder="Enter your course code" value="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label for="professor-name">Profes/Lecturer</label>
                                        <input type="text" class="form-control" id="professorname" placeholder="Enter your professor name" value="">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Selling Information -->
                            <h4 class="wow slideInLeft">Selling Information</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow slideInLeft">
                                    <div class="form-group">
                                        <label>Sell for*</label>
                                        
                                        <lable><input type="radio" id="free" name="sell-available"> Free <input type="radio" id="paid" name="sell-available"> paid </lable>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="note-price">Sell Price*</label>
                                        <input type="text" class="form-control" id="note-price" placeholder="Enter your price" value="" required>
                                    </div>
                                </div>
 
                                <div class="col-md-6 col-sm-6 wow slideInRight">
                                    <div class="form-group">
                                        <label for="note-preview">Note Preview
                                        </label>
                                        <input id="note-peview" class="file-upload wow fadeInUp" type="file">
                                        <div class="toggle-upload-img text-center">
                                            <img src="images/upload-file.png" alt="upload">
                                            <div>
                                                <p>Upload a file</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Save and Publish Button -->
                                    <div class="col-md-2 col-sm-3 col-xs-3 wow zoomIn">
                                        <a href="" class="fillup-btn " id="fillup-save-btn" role="button">SAVE</a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-3 wow zoomIn">
                                        <a href="" class="fillup-btn " id="fillup-publish-btn" role="button">PUBLISH</a>
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

</body>

</html>