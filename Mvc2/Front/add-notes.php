<?php
session_start();


include 'db_connect.php'; //database connection
include 'functions.php';
include 'mail.php';


if (isset($_SESSION['email'])) {

  //session to get seller id
  $email = $_SESSION['email'];
  $query_q = mysqli_query($conn, "SELECT * FROM users WHERE email_id='$email'");
  $row = mysqli_fetch_assoc($query_q);
  $seller_id = $row['id'];
  $seller_email = $row['email_id'];
  $fname = $row['first_name'] . " " . $row['last_name'];

  if (isset($_GET['edit_id'])) {
    $noteid = decrypt_param($_GET['edit_id']);
    $fetch_query = "SELECT * FROM seller_notes WHERE id=$noteid AND is_active=1";
    $fetch_result = mysqli_query($conn, $fetch_query);

    // Fetch the data from seller notes
    while ($fetch_row = mysqli_fetch_assoc($fetch_result)) {
      $edit_title = $fetch_row['title'];
      $edit_cat = $fetch_row['category'];
      $edit_type = $fetch_row['note_type'];
      $edit_pages = $fetch_row['number_of_pages'];
      $edit_desc = $fetch_row['description'];
      $edit_country = $fetch_row['country'];
      $edit_univ = $fetch_row['university_name'];
      $edit_course = $fetch_row['course'];
      $edit_co_code = $fetch_row['course_code'];
      $edit_prof = $fetch_row['professor'];
      $edit_sell = $fetch_row['is_paid'];
      $edit_price = $fetch_row['selling_price'];
      $edit_id = $fetch_row['id'];
      $edit_display = $fetch_row['display_picture'];
      $edit_preview = $fetch_row['notes_preview'];
    }

    $pdf_query = "SELECT * FROM seller_notes_attachment WHERE note_id=$noteid AND is_active=1";
    $pdf_result = mysqli_query($conn, $pdf_query);
    $fetch_pdf = mysqli_fetch_assoc($pdf_result);
    $edit_pdf = $fetch_pdf['file_path'];


    // Update & Publish Note
    if (isset($_POST['save'])) {
      update_note($seller_id, $noteid, $conn);
      if (update_note($seller_id, $noteid, $conn)) {
        echo '<script>alert("Your Note is Updated successfully!"); window.location.href = "http://localhost/NotesMarketPlace/Front/dashboard.php" </script>';
      }
    } else if (isset($_POST['publish'])) { // Publish Note
      update_note($seller_id, $noteid, $conn);
      $uresult = mysqli_query($conn, "UPDATE seller_notes SET status=7  WHERE id=$noteid");

      $title = $_POST['title'];

      // Sender and recipient
      $mail->setFrom($seller_email, $fname);
      $mail->addAddress("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
      $mail->addReplyTo($seller_email, $fname);
      $mail->IsHTML(true);
      $mail->Subject = "$fname sent his note for review";
      $mail->Body = "<p>Hello Admins,<br><br>
      We want to inform you that, $fname sent his note $title for review. Please look at the notes and take required actions.<br></p>
      <p>Regards,<br>Notes Marketplace</p>";

      if ($uresult && $mail->send() && update_note($seller_id, $noteid, $conn)) {
        header('location:dashboard.php');
      } else {
        echo '<script>alert("somthing went wrong")</script>';
        die('Query Failed : ' . mysqli_errno($conn));
      }
    }
  } else {
    // Add Note
    if (isset($_POST['save'])) {
      add_note($seller_id, $conn);
    }
  }
} else {
  echo "<script>alert('Please login first'); window.location.href = 'http://localhost/NotesMarketPlace/Front/login-page.php';
  ;</script>";
}

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

  <?php
  include 'header.php'
  ?>

  <!-- Banner -->
  <section id="banner1">

    <div class="content-box-lg">

      <div class="container">

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12 ">

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
          <div class="col-md-12 col-sm-12">
            <form method="post" enctype="multipart/form-data" id="form">

              <!-- Basic Note Details-->
              <h4 class="">Basic Note Details</h4>
              <div class="row">
                <!-- title -->
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" placeholder="Enter your notes title" value="<?= isset($_GET['edit_id']) ? $edit_title : null; ?>">
                    <small></small>
                  </div>
                </div>
                <!-- category -->
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="category">Category*</label>
                    <select id="category" name="category" class="form-control">
                      <option selected hidden>Select your Category</option>
                      <?php
                      $query_category = "SELECT name,id FROM note_categories";
                      $result_category = mysqli_query($conn, $query_category);
                      while ($raw = mysqli_fetch_assoc($result_category)) {
                        $categories = $raw['name'];
                        $category_id = $raw['id'];
                        if ($category_id == $edit_cat) {
                          echo "<option value='$category_id' selected>$categories</option>";
                        } else {
                          echo "<option value='$category_id'>$categories</option>";
                        }
                      }
                      ?>
                    </select>
                    <small></small>
                  </div>
                </div>
                <!-- display picture -->
                <div class="col-md-6 col-sm-6 ">
                  <div class="form-group">
                    <label for="display-picture">Display Picture
                    </label>
                    <input id="display-picture" name="display_picture" class="file-upload" type="file" value="<?= isset($_GET['edit_id']) ? $a[1] : null; ?>">
                    <div class="toggle-upload-img text-center">
                      <img src="<?= isset($_GET['edit_id']) ? $edit_display : 'images/upload-file.png' ?>" style='border:1px solid #d3d3d3;height:calc(50px + 0.4vw);width:calc(50px + 0.4vw);' alt="upload">
                      <div>
                        <p>Upload a picture</p>
                      </div>
                    </div>
                    <small></small>
                  </div>
                </div>
                <!-- upload note -->
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="note-input">Upload Notes*</label>
                    <input id="note-upload" name="upload_note[]" class="file-upload" type="file" multiple>
                    <div class="toggle-upload-img text-center">
                      <iframe src="<?= isset($_GET['edit_id']) ? $edit_pdf : 'images/upload-note.png' ?>" width="50px" height="50px" alt="upload"></iframe>
                      <div>
                        <p>Upload your notes</p>
                      </div>
                    </div>
                    <small></small>
                  </div>
                </div>
                <!-- type -->
                <div class="col-md-6 col-sm-6 ">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name="type" class="form-control">
                      <?php
                      echo "<option value='' selected readonly>Select your note type</option>";
                      $query_type = "SELECT name,id FROM notes_type";
                      $result_type = mysqli_query($conn, $query_type);

                      while ($raw = mysqli_fetch_assoc($result_type)) {
                        $types = $raw['name'];
                        $type_id = $raw['id'];
                        if ($type_id === $edit_type) {
                          echo " <option value='$type_id' selected>$types</option>";
                        } else {
                          echo " <option value='$type_id'>$types</option>";
                        }
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- number of pages -->
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="total-pages">Number of Pages</label>
                    <input type="text" name="pages" class="form-control" id="total-pages" placeholder="Enter number of pages" value="<?= isset($_GET['edit_id']) ? $edit_pages : null; ?>">
                    <small></small>
                  </div>
                </div>
                <!-- discription -->
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter notes description"><?= isset($_GET['edit_id']) ? $edit_desc : null; ?></textarea>
                    <small></small>
                  </div>
                </div>
              </div>

              <!-- Institution Information -->
              <h4 class="">Institution Information</h4>
              <div class="row">
                <!-- country -->
                <div class="col-md-6 col-sm-6 ">
                  <label for="country">Country</label>
                  <select id="country" name='country' class="form-control">
                    <?php
                    echo "<option value='' selected readonly>Select your country</option>";
                    $query_country = "SELECT name,id FROM countries";
                    $result_country = mysqli_query($conn, $query_country);

                    while ($raw = mysqli_fetch_assoc($result_country)) {
                      $countries = $raw['name'];
                      $country_id = $raw['id'];

                      if ($country_id === $edit_country) {
                        echo "<option value='$country_id' selected>$countries</option>";
                      } else {
                        echo "<option value='$country_id'>$countries</option>";
                      }
                    }
                    ?>
                  </select>
                  <small></small>
                </div>
                <!-- Institution name -->
                <div class="col-md-6 col-sm-6" style="margin-top: 10px;">
                  <div class="form-group">
                    <label for="institution-name">Institution Name</label>
                    <input type="text" name='university_name' class="form-control" id="institution-name" placeholder="Enter your institution name" value="<?= isset($_GET['edit_id']) ? $edit_univ : null; ?>">
                  </div>
                </div>
              </div>

              <!-- Course Details -->
              <h4 class="">Course Details</h4>
              <div class="row">
                <div class="col-md-6 col-sm-6 ">
                  <div class="form-group">
                    <label for="course-name">Course Name</label>
                    <input type="text" name="course_name" class="form-control" id="course-name" placeholder="Enter your course name" value="<?= isset($_GET['edit_id']) ? $edit_course : null; ?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="course-code">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course-code" placeholder="Enter your course code" value="<?= isset($_GET['edit_id']) ? $edit_co_code : null; ?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 ">
                  <div class="form-group">
                    <label for="professor-name">Professor/Lecturer</label>
                    <input type="text" name="professor_name" class="form-control" id="professorname" placeholder="Enter your professor name" value="<?= isset($_GET['edit_id']) ? $edit_prof : null; ?>">
                  </div>
                </div>
              </div>

              <!-- Selling Information -->
              <h4 class="">Selling Information</h4>
              <div class="row">
                <!-- sell for and sell price -->
                <div class="col-md-6 col-sm-6 ">
                  <div class="form-group">

                    <label style="width:1000px; display:flex;">Sell-for* : &nbsp;&nbsp;
                      Free<input type="radio" id="free" onclick="price_disable()" name="sell_type" value="5" style="margin-top: 5px; width:50px;" <?php if (isset($_GET['edit_id']) and $edit_sell == 5) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                  } ?>>
                      paid<input type="radio" id="paid" onclick="price_disable()" name="sell_type" value="4" style="margin-top: 5px; width:50px;" <?php if (isset($_GET['edit_id']) and $edit_sell == 4) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                  } ?>>
                      <small></small>
                    </label>

                  </div>
                  <div class="form-group" style="margin-top:37px;">
                    <label for="note-price">Sell Price* (in $)</label>
                    <input type="text" id="note-price" name="sell_price" class="form-control" placeholder="Enter your price" value="<?= isset($_GET['edit_id']) ? $edit_price : null; ?>">
                    <small></small>
                  </div>
                </div>
                <!-- note preview -->
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="note-preview">Note Preview*</label>
                    <input type="file" id="note-preview" name="notes_preview" class="file-upload">
                    <div class="toggle-upload-img text-center">
                      <img src="<?= isset($_GET['edit_id']) ? $edit_preview : 'images/upload-file.png' ?>" style='border:1px solid #d3d3d3;height:calc(50px + 0.4vw);width:calc(50px + 0.4vw);' alt="upload">
                      <div>
                        <p>Upload a picture</p>
                      </div>
                    </div>
                    <small></small>
                  </div>
                </div>

                <!-- when any error occured -->
                <div class="col-md-12">
                  <h5 id='all_error' style="color:#e74c3c;"></h5>
                </div>

                <!-- Save and Publish Button -->
                <div class="form-group col-md-2 col-sm-3 col-xs-3">
                  <input type="submit" name="save" class="btn default-btn form-btn" value="SAVE">
                </div>
                <div class="form-group col-md-2 col-sm-3 col-xs-3">
                  <?php
                  if (isset($_GET['edit_id']))
                    echo '<input type="button" class="btn form-btn" data-toggle="modal" data-target="#exampleModalCenter" value="PUBLISH">';
                  else {
                    echo '<input type="button" class="btn form-btn" value="PUBLISH" title="After save you can publish your note" disabled>';
                  }
                  ?>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">

                        <a class="close text-right" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><img src="images/close.png" alt=""></span>
                        </a>

                        <div class="modal-body">
                          <h5>Dear <?php echo $_SESSION['firstname'] ?>,</h5>
                          <p>“Publishing this note will send note to administrator for review, once administrator review and approve then this note will be published to portal. Press yes to continue.”</p>
                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="publish" class="btn form-btn col-md-3" value="Yes">
                          <input type="button" class="btn form-btn col-md-3" data-dismiss="modal" aria-label="Close" value="Cancel">
                        </div>
                      </div>
                    </div>
                  </div>

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
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Other html load js-->
  <script src="js/other-html-load.js"></script>

  <!-- Wow js -->
  <script src="js/wow/wow.min.js"></script>

  <!--Custome jQuery-->
  <script src="js/script.js"></script>

  <script type="text/javascript">
    const form = document.getElementById('form');
    const title = document.getElementById('title');
    const pages = document.getElementById('total-pages');
    const description = document.getElementById('description');
    const category = document.getElementById('category');
    const display_pic = document.getElementById('display-picture');
    const note_upload = document.getElementById('note-upload');
    const note_preview = document.getElementById('note-preview');
    const sell_price = document.getElementById('note-price');
    const sell_paid = document.getElementById('paid');
    const sell_free = document.getElementById('free');

    const validExt = ['jpg', 'png', 'jpeg'];
    const pdf_ext = ['pdf'];

    form.addEventListener('submit', (event) => {
      validate();
    })

    function price_disable() {
      if (sell_free.checked) {
        sell_price.value = '0';
        sell_price.readOnly = true;
        <?php if (!isset($_GET['edit_id'])) {
          echo 'sell_price.parentElement.classList.remove("error");
        note_preview.parentElement.classList.remove("error");';
        } ?>
      }
      if (sell_paid.checked) {
        sell_price.readOnly = false
      }
    }

    const validate = () => {
      const titleVal = title.value.trim();
      const descriptionVal = description.value.trim();
      const categoryVal = category.value;
      const display_picVal = display_pic.value;
      const note_uploadVal = note_upload.value;
      const note_previewVal = note_preview.value;
      const sell_priceVal = sell_price.value;


      //validate Title
      if (titleVal === "") {
        setErrorMsg(title, 'Title cannot be blank');
      } else {
        setSuccessMsg(title);
      }

      //validate total pages
      if (isNaN(pages.value)) {
        setErrorMsg(pages, 'Only numbers allowed...');
      }

      //validate description
      if (descriptionVal === "") {
        setErrorMsg(description, 'Description cannot be blank');
        description.style.border = '2px solid #e74c3c';
      } else {
        description.style.border = '2px solid #6255a5';
        setSuccessMsg(description);
      }

      //validate category  
      if (categoryVal == '0') {
        setErrorMsg(category, 'Please pick a category');
        category.style.border = '2px solid #e74c3c';
      } else {
        setSuccessMsg(category);
        category.style.border = '2px solid #6255a5';
      }

      //validate display_picture
      if (display_picVal != "") {
        const pos_of_dot = display_picVal.lastIndexOf('.');
        _ext = display_picVal.substring(pos_of_dot + 1);
        file_ext = _ext.toLowerCase();

        if (validExt.includes(file_ext)) {
          setSuccessMsg(display_pic);
        } else {
          setErrorMsg(display_pic, 'Only jpg, png and Jpeg picture allowed');
        }
      }

      //validate note_upload
      if (note_uploadVal != "") {
        for (i = 0; i < note_upload.files.length; i++) {
          var file = note_upload.files[i];
          var FileName = file.name;
          const pos_of_dot = FileName.lastIndexOf('.');
          const _ext = FileName.substring(pos_of_dot + 1);
          file_ext = _ext.toLowerCase();
          if (pdf_ext.includes(file_ext)) {
            setSuccessMsg(note_upload);
          } else {
            setErrorMsg(note_upload, 'Only PDF file allowed');
            break;
          }
        }
      }
      <?php
      if (!isset($_GET['edit_id'])) {
        echo 'else {setErrorMsg(note_upload, "Please upload your note file")}';
      } ?>

      //validate note_preview
      if (note_previewVal != "") {
        const pos_of_dot = note_previewVal.lastIndexOf('.');
        _ext = note_previewVal.substring(pos_of_dot + 1);
        file_ext = _ext.toLowerCase();

        if (validExt.includes(file_ext)) {
          setSuccessMsg(note_preview);
        } else {
          setErrorMsg(note_preview, 'Only jpg, png and Jpeg picture allowed');
        }
      }

      // validate is_paid, sell_price, note_preview 
      if (sell_paid.checked) {

        //validate sell_price
        if (sell_priceVal == "") {
          setErrorMsg(sell_price, 'Please enter price of the note');
        } else if (isNaN(sell_priceVal)) {
          setErrorMsg(sell_price, 'Only numbers allowed...');
        } else {
          setSuccessMsg(sell_price);
        }

        //validate note_preview
        <?php
        if (!isset($_GET['edit_id'])) {
          echo 'if (note_previewVal === "") {
            setErrorMsg(note_preview, "Please enter preview of the note");
          } else {
            setSuccessMsg(note_preview);
          }';
        } ?>

        setSuccessMsg(sell_paid);

      } else if (sell_free.checked) {
        setSuccessMsg(sell_free);
      } else {
        setErrorMsg(sell_paid, 'Please select one option');
      }

    }

    function setErrorMsg(input, errormsgs) {
      const formGroup = input.parentElement;
      formGroup.className = "form-group error";
      const erro = formGroup.querySelector('small');
      erro.textContent = errormsgs;
      document.getElementById('all_error').textContent = ".....Please Enter Required Fields.....";
      event.preventDefault();
    }

    function setSuccessMsg(input) {
      const formGroup = input.parentElement;
      formGroup.className = "form-group success";
    }
  </script>


</body>

</html>