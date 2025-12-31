<?php
include'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $w_id = htmlspecialchars($_POST['w_id']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);

    // Validate the inputs
    if (empty($name) || empty($w_id) || empty($contact) || empty($email) ) {
        echo 'Name and mobile no are required!';
    } elseif (!filter_var($email)) {
        echo 'Invalid Email  format!';
    } else {
        // Process the data (e.g., save to database, send email, etc.)
        $sql=mysqli_query($conn,"insert into tbl_spot(w_id, name, email, contact) values('$w_id','$name','$email','$contact')");
        echo '<p class="ud-btn btn-thm col-md-12" >Details Add Successfully</p>';
       // echo '<br>Name: ' . $name;
      //  echo '<br>Email: ' . $email;
        header('location: thanku.php');
    }
} else {
    echo 'Invalid request method!';
}
?>