<?php
include'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $w_id = htmlspecialchars($_POST['w_id']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $address = htmlspecialchars($_POST['address']);

    // Validate the inputs
    if (empty($w_id) || empty($name) || empty($email) || empty($email) | empty($contact) | empty($qualification) | empty($address) ) {
        echo 'Name and mobile no are required!';
    } elseif (!filter_var($email)) {
        echo 'Invalid Email  format!';
    } else {
        // Process the data (e.g., save to database, send email, etc.)
        $sql=mysqli_query($conn,"insert into tbl_w_registration(w_id, name, email, contact, qualification, address) values('$w_id','$name','$email','$contact','$qualification', '$address')");
         header('location: thanku.php');
    exit;
     //   echo '<p class="ud-btn btn-thm col-md-12" >Review Add Successfully</p>';
       // echo '<br>Name: ' . $name;
      //  echo '<br>Email: ' . $email;
    }
} else {
    echo 'Invalid request method!';
}
?>