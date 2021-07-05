<?php
session_start();
include 'db_connect.php';
include 'functions.php';

$userId = $_SESSION['userId'];
$limit = 5;

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

  <?php include 'header.php'; ?>

  <!-- DashBoard -->
  <section id="dashboard">
    <div class="content-box-sm">
      <div class="container">
        <div class="row">

          <div class="col-md-12 add-note general-heading">
            <h3>Dashboard</h3>
            <a class="btn defult-btn add-note-btn text-center" href="add-notes.php" role="button">Add Note</a>
          </div>

          <!-- left side -->
          <div class="col-md-6 text-center">
            <div class="row left-d-box">
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
              <div class="col-md-3 d-box" id="my-downloads">
                <h4>38</h4>
                <p>My Downloads</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 d-box" id="rejected-notes">
                <h4>12</h4>
                <p>My Rejected Notes</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 d-box" id="buyer-requests">
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

          <div class="col-md-12 table-caption-header">

            <div class="col-md-7 general-heading">
              <h4>In Progress Notes</h4>
            </div>

            <div class="col-md-5">
              <form method='post'>
                <div class="row">
                  <div class="col-md-8">
                    <!-- Search image as icon-->
                    <span class="input-group-addon">
                      <img src="images/search-icon.png" alt="search">
                    </span>
                    <input type="search" name='searching1' class="form-control" id="searchbar" placeholder="Search..">
                  </div>
                </div>
                <div class="col-md-4">
                  <input type="submit" class="add-note-btn" name='search1' value="Search">
                </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col-md-12">
          <div class="all-table table-responsive">
            <table class="table">
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
                <?php
                // For InProgress Note table
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $result_c = mysqli_query($conn, "SELECT * FROM seller_notes WHERE seller_id=$userId AND is_active=1 AND status in (6,7,8)");
                $prog_count = mysqli_num_rows($result_c);
                $prog_pages = ceil($prog_count / $limit);

                if ($page < 1) {
                  $page = 1;
                } elseif ($page > $prog_count) {
                  $page = $prog_count;
                }

                $start = ($page - 1) * $limit;

                if (isset($_POST['search1'])) {
                  $search_input = $_POST['searching1'];
                  $prog_query = "SELECT seller_notes.id,seller_notes.modified_date,seller_notes.title,note_categories.name,reference_data.value FROM seller_notes LEFT JOIN note_categories ON seller_notes.category=note_categories.id LEFT JOIN reference_data ON seller_notes.status=reference_data.id WHERE seller_notes.is_active=1 AND seller_id=$userId AND concat(title,note_categories.name,reference_data.value) LIKE '%$search_input%' AND reference_data.id IN (6,7,8) ORDER BY seller_notes.modified_date DESC LIMIT $start, $limit";
                  $prog_result = mysqli_query($conn, $prog_query);
                } else {
                  $prog_query = "SELECT seller_notes.id,seller_notes.modified_date,seller_notes.title,note_categories.name,reference_data.value FROM seller_notes LEFT JOIN note_categories ON seller_notes.category=note_categories.id LEFT JOIN reference_data ON seller_notes.status=reference_data.id WHERE seller_notes.is_active=1 AND seller_id=$userId AND reference_data.id IN (6,7,8) ORDER BY seller_notes.modified_date DESC LIMIT $start, $limit";
                  $prog_result = mysqli_query($conn, $prog_query);
                }

                while ($prog_row = mysqli_fetch_assoc($prog_result)) : ?>
                  <tr>
                    <td><?php echo date("d-m-Y", strtotime($prog_row["modified_date"])); ?></td>
                    <td><?php echo $prog_row["title"]; ?></td>
                    <td><?php echo $prog_row["name"]; ?></td>
                    <td><?php echo $prog_row["value"]; ?></td>
                    <td>
                      <?php
                      $edit_id = encrypt_param($prog_row['id']);
                      if ($prog_row['value'] == 'Draft') {
                        echo  "<a href='add-notes.php?edit_id=$edit_id' title='edit the note'><img src='images/edit.png' alt='edit'></a> &nbsp;
                                <a href='delete_note.php?id=$edit_id' onclick='return delete_confirmation()'><img src='images/delete.png' alt='delete'></a>";
                      } else {
                        echo "<a href='note-details.php?id=$edit_id'><img class='table-eye' src='images/eye.png' alt='edit'></a>";
                      } ?>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-md-12">
          <!-- pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-arrow">
                <a class="page-link" href="dashboard.php?page=<?php echo $page - 1; ?>" tabindex="-1" <?php if ($page == 1) {
                                                                                                        echo 'style="pointer-events:none;"';
                                                                                                      } ?>>
                  <img src="images/left-arrow.png" alt="left-arrow"></a>
              </li>
              <?php for ($i = 1; $i <= $prog_pages; $i++) : ?>
                <li class="page-item <?php if ($i == $page) {
                                        echo 'active';
                                      } ?>" aria-current="page">
                  <a class="page-link" href="dashboard.php?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
              <?php endfor; ?>
              <li class="page-arrow">
                <a class="page-link" href="dashboard.php?page=<?php echo $page + 1; ?>" <?php if ($page == $prog_pages) {
                                                                                          echo 'style="pointer-events:none;"';
                                                                                        } ?>>
                  <img src="images/right-arrow.png" alt="right-arrow"></a>
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
            <div class="col-md-7 general-heading">
              <h4>Published Notes</h4>
            </div>

            <div class="col-md-5">
              <form method='post'>
                <div class="row">
                  <div class="col-md-8">
                    <!-- Search image as icon-->
                    <span class="input-group-addon">
                      <img src="images/search-icon.png" alt="search">
                    </span>
                    <input type="search" name='searching2' class="form-control" id="searchbar" placeholder="Search.." value="">
                  </div>
                  <div class="col-md-4">
                    <input type="submit" class="add-note-btn" name='search2' value="Search">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-12">
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
                  <?php
                  // For Published Note table
                  $page2 = isset($_GET['page2']) ? $_GET['page2'] : 1;
                  $result_c2 = mysqli_query($conn, "SELECT * FROM seller_notes WHERE seller_id=$userId AND is_active=1 AND status=9");
                  $pub_count = mysqli_num_rows($result_c2);
                  $pub_pages = ceil($pub_count / $limit);

                  if ($page2 < 1) {
                    $page2 = 1;
                  } elseif ($page2 > $pub_count) {
                    $page2 = $pub_count;
                  }

                  $start2 = ($page2 - 1) * $limit;

                  if (isset($_POST['search2'])) {
                    $search_input2 = $_POST['searching2'];
                    $pub_query = "SELECT seller_notes.id,seller_notes.modified_date,title,note_categories.name,reference_data.value,selling_price FROM seller_notes LEFT JOIN note_categories ON seller_notes.category=note_categories.id LEFT JOIN reference_data ON seller_notes.is_paid=reference_data.id WHERE seller_notes.is_active=1 AND seller_id=$userId AND concat(title,note_categories.name,reference_data.value) LIKE '%$search_input2%' AND status=9 ORDER BY seller_notes.modified_date DESC LIMIT $start2, $limit";
                    $pub_result = mysqli_query($conn, $pub_query);
                  } else {
                    $pub_query = "SELECT seller_notes.id,seller_notes.modified_date,title,note_categories.name,reference_data.value,selling_price FROM seller_notes LEFT JOIN note_categories ON seller_notes.category=note_categories.id LEFT JOIN reference_data ON seller_notes.is_paid=reference_data.id WHERE seller_notes.is_active=1 AND seller_id=$userId AND status=9 ORDER BY seller_notes.modified_date DESC LIMIT $start2, $limit";
                    $pub_result = mysqli_query($conn, $pub_query);
                  }

                  while ($pub_row = mysqli_fetch_assoc($pub_result)) : ?>
                    <tr>
                      <td><?php echo date('d-m-Y', strtotime($pub_row["modified_date"])); ?></td>
                      <td><?php echo $pub_row['title']; ?></td>
                      <td><?php echo $pub_row['name']; ?></td>
                      <td><?php echo $pub_row['value']; ?></td>
                      <td><?php echo "$" . $pub_row['selling_price'] ?></td>
                      <td><?php
                          $pub_id = encrypt_param($pub_row['id']);
                          echo "<a href='note-details.php?id=$pub_id'><img class='table-eye' src='images/eye.png' alt='edit'></a>"; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="col-md-12">
            <!-- pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-arrow">
                  <a class="page-link" href="dashboard.php?page2=<?php echo $page2 - 1; ?>" tabindex="-1" <?php if ($page2 == 1) {
                                                                                                            echo 'style="pointer-events:none;"';
                                                                                                          } ?>>
                    <img src="images/left-arrow.png" alt="left-arrow"></a>
                </li>
                <?php for ($j = 1; $j <= $pub_pages; $j++) : ?>
                  <li class="page-item <?php if ($j == $page2) {
                                          echo 'active';
                                        } ?>" aria-current="page">
                    <a class="page-link" href="dashboard.php?page2=<?= $j; ?>"><?= $j; ?></a>
                  </li>
                <?php endfor; ?>
                <li class="page-arrow">
                  <a class="page-link" href="dashboard.php?page2=<?php echo $page2 + 1; ?>" <?php if ($page2 == $pub_pages) {
                                                                                              echo 'style="pointer-events:none;"';
                                                                                            } ?>>
                    <img src="images/right-arrow.png" alt="right-arrow"></a>
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

  <script>
    function delete_confirmation() {
      if (confirm("Yes or No ?")) {
        return true;
      } else {
        return false;
      }
    }
  </script>


</body>

</html>