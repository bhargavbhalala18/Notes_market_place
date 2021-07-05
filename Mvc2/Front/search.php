<?php
session_start();

include 'db_connect.php';


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
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate/animate.css">

  <!--Custome Css-->
  <link rel="stylesheet" href="css/style.css">

  <!-- Responsive Css-->
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

  <!-- navbar header -->
  <?php
  if ($_SESSION['email']) {
    include 'header.php';
  } else {
    include 'header2.php';
  }
  ?>

  <!-- Banner -->
  <section id="banner1">

    <div class="content-box-lg">

      <div class="container">

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">
            <!-- Banner Heading -->
            <div class="banner-header text-center wow zoomIn">
              <h3 class="text-center">Search Notes</h3>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Ends -->

  <!-- Search -->
  <section id="search">
    <div class="content-box-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="general-heading wow slideInLeft">
              <h4>Search and Filter notes</h4>
            </div>
            <!-- Search Form -->
            <form class="search-form">
              <div class="row">
                <!-- Search Bar-->
                <div class="col-md-12 col-sm-12 wow zoomIn input-group">
                  <!-- Search image as icon-->
                  <span class="input-group-addon">
                    <img src="images/search-icon.png" alt="search">
                  </span>
                  <input type="search" class="form-control" id="searchbar" placeholder="Search notes here.." value="">
                </div>
                <!-- All Dropdown-->
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="typebook" class="form-control">
                    <option selected value='0'>Select type</option>
                    <?php
                    $noteType_query = mysqli_query($conn, "SELECT id,name from notes_type");
                    while ($rowt = mysqli_fetch_assoc($noteType_query)) {
                      $type_id = $rowt['id'];
                      $type_name = $rowt['name'];
                      echo "<option value='$type_id'>$type_name</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="category" class="form-control">
                    <option value="0" selected>Select Category</option>
                    <?php
                    $notCat_query = mysqli_query($conn, "SELECT id,name FROM note_categories");
                    while ($rowc = mysqli_fetch_assoc($notCat_query)) {
                      $category_id = $rowc['id'];
                      $category_name = $rowc['name'];
                      echo "<option value='$category_id'>$category_name</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="university" class="form-control">
                    <option value="0" selected>Select college university</option>
                    <?php
                    $uni_query = mysqli_query($conn, "SELECT DISTINCT university_name FROM seller_notes");
                    while ($rowu = mysqli_fetch_assoc($uni_query)) {
                      $university_name = $rowu['university_name'];
                      echo (!empty($university_name) && $university_name != "")
                        ? "<option value='$university_name'>$university_name</option>" : "";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="course" class="form-control">
                    <option value="0" selected>Select course</option>
                    <?php
                    $course_query = mysqli_query($conn, "SELECT DISTINCT course FROM seller_notes");
                    while ($rowcr = mysqli_fetch_assoc($course_query)) {
                      $course = $rowcr['course'];
                      echo (!empty($course) && $course != "")
                        ? "<option value='$course'>$course</option>" : "";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="country" class="form-control">
                    <option value="0" selected>Select country</option>
                    <?php
                    $country_query = mysqli_query($conn, "SELECT id,name FROM countries");
                    while ($rowcnt = mysqli_fetch_assoc($country_query)) {
                      $country_id = $rowcnt['id'];
                      $country_name = $rowcnt['name'];
                      echo "<option value='$country_id'>$country_name</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-2 col-sm-4 wow zoomIn">
                  <select id="rating" class="form-control">
                    <option selected value="">Select rating</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Ends -->

  <!-- notes -->
  <section id="notes">

    <div class="container">

      <div class="row">
        <div class="col-md-12 col-sm-12 general-heading wow slideInLeft">
          <h4>Total 18 Notes</h4>
        </div>
      </div>

      <!-- Notes cards -->
      <div class="row">

        <!-- Card-1 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search1.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Computer Operating System-Final Exam Book With Paper Solution</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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

                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-2 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search2.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Computer Science</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-3 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search3.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Basic Computer Engineering Tech India Publication Series</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search4.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Computer Science Illuminted - Seventh Edition</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-5 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search5.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>The Principle Of Computer Hardware - Oxford</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-6 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search6.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>The Computer Book</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
          starstar
        </div>
        <!-- Card-7 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search1.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Computer Operating System-Final Exam Book With Paper Solution</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-8 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search2.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Computer Science</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card-9 -->
        <div class="col-md-4 col-sm-6 wow zoomIn">
          <div class="card">
            <img class="card-img-top" src="images/search/search3.png" alt="Card image cap">

            <div class="card-body general-heading note-content">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4>Basic Computer Enginering Tech India Publication Series</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/university.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>University of California, Us</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/pages.png" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                  <p>204 pages</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/date.png" alt="">
                </div>
                <div class="col-md-10 col-sm-6 col-sm-6">
                  <p>Thu, Nov 26 2020</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2 col-sm-2 note-img">
                  <img src="images/flag.png" alt="">
                </div>
                <div class="flag col-md-10 col-sm-10">
                  <p>5 Users marked this notes as inappropriate</p>
                </div>
              </div>

              <div class="row">

                <div class="col-md-7 col-sm-8">
                  <div class="rating">
                    <input type="radio" name="rating" value="5" id="star5">
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


                <div class="review col-md-5 col-sm-6">
                  <p>120 Reviews</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

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
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-arrow">
            <a class="page-link" href="#"><img src="images/right-arrow.png" alt="right-arrow"></a>
          </li>
        </ul>
      </nav>
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

  <script>
    $('select').change(function() {
      var type = $('#type').val();
      var category = $('#category').val();
      var university = $('#university').val();
      var course = $('#course').val();
      var country = $('#country').val();
      var rating = $('#rating').val();
      var title = $('input').val();

      $.ajax({
        url: "filter_notes.php",
        type: "POST",
        data: {
          'note-type': type,
          'note-category': category,
          'university': university,
          'course': course,
          'country': country,
          'rating': rating,
          'search-notes': title,
          'dropdown': "dropdown",
          'input': "input",
          'page': page
        },
        dataType: "text",
        success: function(response) {
          $("#note-list").html(response);

        },
        error: function(err) {
          console.log(err.statusText);
        },
      });
    });
  </script>

</body>

</html>