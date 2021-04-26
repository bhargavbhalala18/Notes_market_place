<?php
session_start();
include 'db_connect.php'; //database connection

// Function for add Display picture and Preview of Note (jpg, png, jpeg)
function note_dispic_preview($inputfile_name, $col_name, $seller_id, $noteid, $conn)
{
  $display = $inputfile_name;
  $filename = $display['name'];
  $filetmp = $display['tmp_name'];
  $extention = explode('.', $filename);
  $extension_check = strtolower(end($extention));
  
    if (!is_dir("../Members/")) {
      mkdir('../Members/');
    }
    if (!is_dir("../Members/" . $seller_id)) {
      mkdir("../Members/" . $seller_id);
    }
    if (!is_dir("../Members/" . $seller_id . "/" . $noteid)) {
      mkdir('../Members/' . $seller_id . '/' . $noteid);
    }

    $destinationfile = '../Members/' . $seller_id . '/' . $noteid . '/' . $col_name . time() . '.' . $extension_check;
    move_uploaded_file($filetmp, $destinationfile);
    mysqli_query($conn, "UPDATE seller_notes SET $col_name='$destinationfile' WHERE id=$noteid");
}

// Function for upload Note in png format
function note_upload($inputfile_name, $i, $seller_id, $noteid, $conn)
{
  $display = $inputfile_name['name'][$i];
  $extention = explode('.', $display);
  $extension_check = strtolower(end($extention));
  $file_extensions = array('pdf');

  if (in_array($extension_check, $file_extensions)) {
    $query_attach = "INSERT INTO seller_notes_attachment (note_id,created_date,created_by,is_active) 
                          VALUES ($noteid,NOW(),$seller_id,1)";
    mysqli_query($conn, $query_attach);
    $attach_id = mysqli_insert_id($conn);

    // Upload file
    if (!is_dir("../Members/")) {
      mkdir('../Members/');
    }
    if (!is_dir("../Members/" . $seller_id)) {
      mkdir("../Members/" . $seller_id);
    }
    if (!is_dir("../Members/" . $seller_id . "/" . $noteid)) {
      mkdir('../Members/' . $seller_id . '/' . $noteid);
    }
    if (!is_dir("../Members/" . $seller_id . "/" . $noteid . "/" . "Attachements")) {
      mkdir('../Members/' . $seller_id . '/' . $noteid . '/' . 'Attachements');
    }

    $multiple_file_name = '../Members/' . $seller_id . '/' . $noteid . '/' . 'Attachements/' . 'Attachment_' . $attach_id . '.' . $extension_check;
    move_uploaded_file($_FILES['upload_note']['tmp_name'][$i], $multiple_file_name);

    $attached_name = "Attachment_" . $attach_id . '.' . $extension_check;
    $query_attach_final = "UPDATE seller_notes_attachment SET file_name='$attached_name',file_path='$multiple_file_name' WHERE id=$attach_id";
    mysqli_query($conn, $query_attach_final);
  } else {
    echo "<script>alert('Only Pdf Files can be uploaded');</script>";
  }
}

if (isset($_SESSION['email'])) {

  //session to get seller id
  $email = $_SESSION['email']; 
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email_id='$email'"));
  $seller_id = $row['id'];

  if (isset($_POST['save'])) {

    $title = $_POST['title'];
    $pages = $_POST['pages'];
    $description = $_POST['description'];
    $university_name = $_POST['university_name'];
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $professor_name = $_POST['professor_name'];
    $sell_price = $_POST['sell_price'];
    $default_display_pic = "../Members/Default/Note_Display_pic.png";
    $display_picture = $_FILES['display_picture'];
    $note_preview = $_FILES['notes_preview'];
    $note_upload = $_FILES['upload_note'];

    if(isset($_POST['type'])) {
      $type = $_POST['type'];
    } 
    if (isset($_POST['country'])) {
      $country = $_POST['country'];
    } 
    if(isset($_POST['sell_type'])) {
      $sell_type = $_POST['sell_type'];  
    }

    if(!empty($title) && !empty($category) && !empty($upload_note) && !empty($description) && !empty($sell_type) && !empty($notes_preview)) {

      $allquery = " INSERT INTO seller_notes (seller_id,status,actioned_by,title,category,display_picture,note_type,number_of_pages,description,country,university_name,course,course_code,professor,selling_price,created_date,created_by,modified_date,modified_by,is_active) VALUES ($seller_id,6,$seller_id,'$title',$category,'$default_display_pic',$type,$pages,'$description',$country,'$university_name','$course_name','$course_code','$professor_name',$sell_price,now(),1,now(),1,1)";
      
      mysqli_query($conn, $allquery);

      //to get above note id
      $note_id = mysqli_insert_id($conn);

      // Add display picture of Note
        $col_dis = "display_picture";
        note_dispic_preview($display_picture, $col_dis, $seller_id, $noteid, $conn);

      // Add Preview of Note
        $col_prev = 'notes_preview';
        note_dispic_preview($note_preview, $col_prev, $seller_id, $noteid, $conn);

      //Note upload in pdf
        $upload_note = count($note_upload['name']);
        // Looping all files
        for ($i = 0; $i < $uploade_note; $i++) {
          note_upload($uploade_note, $i, $seller_id, $noteid, $conn);
        }

      } else {
        echo '<script>alert("Please Enter required fields")</script>';
      }
    } 
}
else {
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
  <!-- Header-nav-->
  <!-- <div id="header"></div> -->
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
            <form action="add-notes.php" method="post" enctype="multipart/form-data" id="form" name="myForm">

              <!-- Basic Note Details-->
              <h4 class="wow slideInLeft">Basic Note Details</h4>
              <div class="row">
                <!-- title -->
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group">
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" placeholder="Enter your notes title">
                    <small></small>
                  </div>
                </div>
                <!-- category -->
                <div class="col-md-6 col-sm-6 wow slideInRight">
                  <div class="form-group">
                    <label for="category">Category*</label>
                    <select id="category" name="category" class="form-control" <?php if($cat_error){echo 'style="border:2px solid #e74c3c;"';}?>>
                    <option value="" selected disabled>Select your Category</option>
                      <?php
                      $query_category = "SELECT name,id FROM note_categories";
                      $result_category = mysqli_query($conn, $query_category);
                      while ($raw = mysqli_fetch_assoc($result_category)) {
                        $categories = $raw['name'];
                        $category_id = $raw['id'];
                        echo "<option value='$category_id'>$categories</option>";
                      }
                      ?>
                    </select>
                    <small></small>
                  </div>
                </div>
                <!-- display picture -->
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group">
                    <label for="file-input">Display Picture
                    </label>
                    <input id="file-input" name="display_picture" class="file-upload wow fadeInUp" type="file">
                    <div class="toggle-upload-img text-center">
                      <img src="images/upload-file.png" alt="upload">
                      <div>
                        <p>Upload a picture</p>
                      </div>
                    </div>
                    <small></small>
                  </div>
                </div>
                <!-- upload note -->
                <div class="col-md-6 col-sm-6 wow slideInRight">
                  <div class="form-group">
                    <label for="note-input">Upload Notes*</label>
                    <input id="note-upload" name="upload_note" class="file-upload wow fadeInUp" type="file">
                    <div class="toggle-upload-img text-center">
                      <img src="images/upload-note.png" alt="upload">
                      <div>
                        <p>Upload your notes</p>
                      </div>
                    </div>
                    <small></small>
                  </div>
                </div>
                <!-- type -->
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name="type" class="form-control">
                      <?php
                      echo "<option value='' selected disabled>Select your note type</option>";
                      $query_type = "SELECT name,id FROM notes_type";
                      $result_type = mysqli_query($conn, $query_type);

                      while ($raw = mysqli_fetch_assoc($result_type)) {
                        $types = $raw['name'];
                        $type_id = $raw['id'];
                        echo " <option value='$type_id'>$types</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- number of pages -->
                <div class="col-md-6 col-sm-6 wow slideInRight">
                  <div class="form-group">
                    <label for="total-pages">Number of Pages</label>
                    <input type="number" name="pages" class="form-control" id="total-pages" placeholder="Enter number of pages" value="">
                  </div>
                </div>
                <!-- discription -->
                <div class="col-md-12 wow slideInLeft">
                  <div class="form-group">
                    <label for="description">Description* <small></small></label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter notes description"></textarea>
                  </div>
                </div>
              </div>

              <!-- Institution Information -->
              <h4 class="wow slideInLeft">Institution Information</h4>
              <div class="row">
                <!-- country -->
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <label for="country">Country</label>
                  <select id="country" name='country' class="form-control">
                    <?php
                    echo "<option value='' selected disabled>Select your country</option>";
                    $query_country = "SELECT name,id FROM countries";
                    $result_country = mysqli_query($conn, $query_country);

                    while ($raw = mysqli_fetch_assoc($result_country)) {
                      $countries = $raw['name'];
                      $country_id = $raw['id'];
                      echo "<option value='$country_id'>$countries</option>";
                    }
                    ?>
                  </select>
                  <small></small>
                </div>
                <!-- Institution name -->
                <div class="col-md-6 col-sm-6 wow slideInRight" style="margin-top: 10px;">
                  <div class="form-group">
                    <label for="institution-name">Institution Name</label>
                    <input type="text" name="university_name" class="form-control" id="institution-name" placeholder="Enter your institution name">
                  </div>
                </div>
              </div>

              <!-- Course Details -->
              <h4 class="wow slideInLeft">Course Details</h4>
              <div class="row">
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group">
                    <label for="course-name">Course Name</label>
                    <input type="text" name="course_name" class="form-control" id="course-name" placeholder="Enter your course name">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 wow slideInRight">
                  <div class="form-group">
                    <label for="course-code">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course-code" placeholder="Enter your course code">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group">
                    <label for="professor-name">Professor/Lecturer</label>
                    <input type="text" name="professor_name" class="form-control" id="professorname" placeholder="Enter your professor name">
                  </div>
                </div>
              </div>

              <!-- Selling Information -->
              <h4 class="wow slideInLeft">Selling Information</h4>
              <div class="row">
                <!-- sell for and sell price -->
                <div class="col-md-6 col-sm-6 wow slideInLeft">
                  <div class="form-group" style="display:inline-flex;">
                  <small></small>
                    <label style="width:300px;">Sell-for</label>
                    <label> 
                    Free<input type="radio" id="free" onclick="price_disable()" name="sell_type" value="5" style="margin:-13px;">
                    </label>
                    <label>
                    paid<input type="radio" id="paid" name="sell_type" value="4" style="margin:-13px;">
                    </label>
                    
                  </div>
                  <div class="form-group" style="margin-top:23px;">
                    <label for="note-price">Sell Price*</label>
                    <input type="text" id="note-price" name="sell_price" class="form-control" placeholder="Enter your price">
                    <small></small>
                  </div>
                </div>

                <!-- note preview -->
                <div class="col-md-6 col-sm-6 wow slideInRight">
                  <div class="form-group">
                    <label for="note-preview">Note Preview*</label>
                    <input type="file" id="note-preview" name="notes_preview" class="file-upload wow fadeInUp">
                    <div class="toggle-upload-img text-center">
                      <img src="images/upload-file.png" alt="upload">
                      <div><p>Upload a picture</p></div>
                    </div>
                    <small></small>
                  </div>
                </div>

                <!-- Save and Publish Button -->
                <div class="col-md-2 col-sm-3 col-xs-3 wow zoomIn">
                  <input type="submit" name="save" class="btn btn-default form-btn" value="SAVE">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-3 wow zoomIn">
                  <input type="submit" name="publish" class="btn btn-default form-btn" value="PUBLISH" disabled>
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

  <script type="text/javascript">
  const form = document.getElementById('form');
  const title = document.getElementById('title');
  const description = document.getElementById('description');
  const category = document.getElementById('category');
  const note_upload = document.getElementById('note-upload');
  const note_preview = document.getElementById('note-preview');
  const sell_price = document.getElementById('note-price');
  

  const validExt = ['jpg','png','jpeg'];

  form.addEventListener('submit', (event) => {
    validate();
  })

  function price_disable() {
    
  }

  const validate = () => {
    const titleVal = title.value.trim();
    const descriptionVal = description.value.trim();
    const categoryVal = category.value;
    const note_previewVal = note_preview.value;
    const sell_priceVal = sell_price.value;
    const sell_paid = document.getElementById('paid');
    const sell_free = document.getElementById('free');
    
    //validate Title
    if (titleVal === "") {
      setErrorMsg(title, 'Title cannot be blank');
    } else {
      setSuccessMsg(title);
    }

    //validate description
    if(descriptionVal === "") {
      setErrorMsg(description, 'Description cannot be blank');
    } else {
      setSuccessMsg(description);
    }
    
    //validate category  
    if(categoryVal == '') {
      setErrorMsg(category, 'Please pick a category');
    } else {
      setSuccessMsg(category);
    }

    //validate note_preview
    if(note_previewVal != "") {
      const pos_of_dot = note_previewVal.lastIndexOf('.');
      file_ext = note_previewVal.substring(pos_of_dot+1);

      if(validExt.includes(file_ext))
      {
        setSuccessMsg(note_preview)
      } else {
        setErrorMsg(note_preview, 'Only jpg, png and Jpeg picture allowed');
      }
    } 

    // validate is_paid, sell_price, note_preview 
    if(sell_paid.checked) {

      //validate sell_price
      if(sell_priceVal == ""){
        setErrorMsg(sell_price, 'Please enter price of the note');
      } else {
        setSuccessMsg(sell_price);
      }

      //validate note_preview
      if(note_previewVal === ""){
        setErrorMsg(note_preview, 'Please enter preview of the note');
      } else {
        setSuccessMsg(note_preview);
      }

    } else if(sell_free.checked) {
        setSuccessMsg(sell_free);
    } else {
      setErrorMsg(sell_free, 'Please select one option');
    }
    

  }

  function setErrorMsg(input, errormsgs) {
    const formGroup = input.parentElement;
    formGroup.className = "form-group error";
    const erro = formGroup.querySelector('small');
    erro.textContent = errormsgs;
    event.preventDefault();
  }

  function setSuccessMsg(input) {
    const formGroup = input.parentElement;
    formGroup.className = "form-group success";
  }

  </script>


</body>

</html>