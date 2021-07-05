<?php

// Function for Encryotion of URL parameter
function encrypt_param($x)
{

  // Store the cipher method
  $ciphering = "AES-128-CTR";

  // Use OpenSSl Encryption method
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;

  // Non-NULL Initialization Vector for encryption
  $encryption_iv = '1234567891096181';

  // Store the encryption key
  $encryption_key = "tatvasoft";

  // Use openssl_encrypt() function to encrypt the data
  $encryption = openssl_encrypt($x, $ciphering, $encryption_key, $options, $encryption_iv);

  // Return the encrypted string
  return $encryption;
}

// Function for Decryotion of URL parameter
function decrypt_param($e)
{
  // Store the cipher method
  $ciphering = "AES-128-CTR";

  // Use OpenSSl Encryption method
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;

  // Non-NULL Initialization Vector for decryption
  $decryption_iv = '1234567891096181';

  // Store the decryption key
  $decryption_key = "tatvasoft";

  // Use openssl_decrypt() function to decrypt the data
  $decryption = openssl_decrypt($e, $ciphering, $decryption_key, $options, $decryption_iv);

  // Display the decrypted string
  return $decryption;
}

// Function for add Display picture and Preview of Note (jpg, png, jpeg)
function note_dispic_preview($inputfile_name, $col_name, $seller_id, $noteid, $conn)
{
  $display = $inputfile_name;
  $filename = $display['name'];
  $filetmp = $display['tmp_name'];
  $extention = explode('.', $filename);
  $extension_check = strtolower(end($extention));

  if (!is_dir("../Members/" . $seller_id . "/" . $noteid)) {
    mkdir('../Members/' . $seller_id . '/' . $noteid, 0777, true);
  }

  $destinationfile = '../Members/' . $seller_id . '/' . $noteid . '/' . $col_name . $noteid . '.' . $extension_check;

  if (file_exists('../Members/' . $seller_id . '/' . $noteid . '/' . $col_name . $noteid . '*')) {
    array_map("unlink", glob('../Members/' . $seller_id . '/' . $noteid . '/' . $col_name . $noteid . '*'));
  }

  move_uploaded_file($filetmp, $destinationfile);
  mysqli_query($conn, "UPDATE seller_notes SET $col_name='$destinationfile' WHERE id=$noteid");
}

// Function for upload Note in png format
function note_uploaded($i, $seller_id, $noteid, $conn)
{
  $display = $_FILES['upload_note']['name'][$i];
  $file_tmp = $_FILES['upload_note']['tmp_name'][$i];
  $extention = explode('.', $display);
  $extension_check = strtolower(end($extention));

  $query_attach = "INSERT INTO seller_notes_attachment (note_id,created_date,created_by,is_active) VALUES ($noteid,NOW(),$seller_id,1)";
  mysqli_query($conn, $query_attach);
  $attach_id = mysqli_insert_id($conn);

  // Upload file

  if (!is_dir("../Members/" . $seller_id . "/" . $noteid . "/" . "Attachements/")) {
    mkdir('../Members/' . $seller_id . '/' . $noteid . '/' . 'Attachements/', 0777, true);
  }

  $multiple_file_name = '../Members/' . $seller_id . '/' . $noteid . '/' . 'Attachements/' . 'Attachment_' . $attach_id . '.' . $extension_check;
  move_uploaded_file($file_tmp, $multiple_file_name);
  $attached_name = "Attachment_" . $attach_id . '.' . $extension_check;
  $query_attach_final = "UPDATE seller_notes_attachment SET file_name='$attached_name',file_path='$multiple_file_name' WHERE id=$attach_id";
  mysqli_query($conn, $query_attach_final);
}

// Function for Add Note
function add_note($seller_id, $conn)
{
  $title =  $_POST['title'];
  $category =  $_POST['category'];
  $type =  $_POST['type'];
  $pages =  $_POST['pages'];
  $description =  $_POST['description'];
  $country =  $_POST['country'];
  $university_name =  $_POST['university_name'];
  $course_name =  $_POST['course_name'];
  $course_code =  $_POST['course_code'];
  $professor_name =  $_POST['professor_name'];
  $sell_type =  $_POST['sell_type'];
  $sell_price =  $_POST['sell_price'];
  $default_display_pic = "../Members/Default/Note_Display_pic.png";
  $display_picture = $_FILES['display_picture'];
  $note_preview = $_FILES['notes_preview'];
  $note_upload = $_FILES['upload_note'];

  $allquery = "INSERT INTO `seller_notes` (`seller_id`, `status`, `actioned_by`, `title`, `category`, `display_picture`, `note_type`, `number_of_pages`, `description`, `university_name`, `country`, `course`, `course_code`, `professor`, `is_paid`, `selling_price`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES ($seller_id,6,$seller_id,'$title',$category,'$default_display_pic',$type,'$pages','$description','$university_name',$country,'$course_name','$course_code','$professor_name',$sell_type,$sell_price,current_timestamp(),1,current_timestamp(),1,1)";

  $result_all = mysqli_query($conn, $allquery);

  //to get above note id
  $noteid = mysqli_insert_id($conn);

  // Add display picture of Note
  if ($display_picture['size'] != 0) {
    $col_dis = "display_picture";
    note_dispic_preview($display_picture, $col_dis, $seller_id, $noteid, $conn);
  }

  // Add Preview of Note
  if ($note_preview['size'] != 0) {
    $col_prev = 'notes_preview';
    note_dispic_preview($note_preview, $col_prev, $seller_id, $noteid, $conn);
  }

  $upload_note = count($_FILES['upload_note']['name']);
  // Looping all files
  for ($i = 0; $i < $upload_note; $i++) {
    note_uploaded($i, $seller_id, $noteid, $conn);
  }

  if (!$result_all) {
    die('Query failed' . mysqli_error($conn));
  } else {
    echo '<script>alert("Your Note is Added successfully!"); window.location.href = "http://localhost/NotesMarketPlace/Front/dashboard.php" </script>';
  }
}

// Fuction for Update Note & Use for Publish also...
function update_note($seller_id, $noteid, $conn)
{
  $title =  $_POST['title'];
  $category = $_POST['category'];
  $type = $_POST['type'];
  $pages = $_POST['pages'];
  $description =  $_POST['description'];
  $country = $_POST['country'];
  $university_name =  $_POST['university_name'];
  $course_name =  $_POST['course_name'];
  $course_code =  $_POST['course_code'];
  $professor_name =  $_POST['professor_name'];
  $sell_type = $_POST['sell_type'];
  $sell_price = $_POST['sell_price'];
  $display_picture = $_FILES['display_picture'];
  $note_preview = $_FILES['notes_preview'];

  $update_query = "UPDATE seller_notes SET  title='$title', category=$category, note_type=$type, number_of_pages=$pages, description='$description', country=$country, university_name='$university_name', course='$course_name', course_code='$course_code', professor='$professor_name', is_paid=$sell_type, selling_price=$sell_price, modified_date=now() WHERE id=$noteid";

  $uresult_all = mysqli_query($conn, $update_query);

  // Add display picture of Note
  if ($display_picture['size'] != 0) {
    $col_dis = "display_picture";
    note_dispic_preview($display_picture, $col_dis, $seller_id, $noteid, $conn);
  }

  // Add Preview of Note
  if ($note_preview['size'] != 0) {
    $col_prev = 'notes_preview';
    note_dispic_preview($note_preview, $col_prev, $seller_id, $noteid, $conn);
  }

  //-------Note upload in pdf-------
  if ($_FILES['upload_note']['name'][0] != null) {
    $files = glob('../Members/' . $seller_id . '/' . $noteid . '/' . 'Attachements' . '/*'); // get all file names
    foreach ($files as $file) { // iterate files
      if (file_exists($file)) {
        unlink($file); // delete file 
      }
    }
    mysqli_query($conn, "DELETE FROM seller_notes_attachment WHERE note_id=$noteid");
    $upload_note = count($_FILES['upload_note']['name']);
    // Looping all files
    for ($i = 0; $i < $upload_note; $i++) {
      note_uploaded($i, $seller_id, $noteid, $conn);
    }
  }

  if (!$uresult_all) {
    return false;
  } else {
    return true;
  }
}
