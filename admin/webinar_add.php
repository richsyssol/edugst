<?php
    include 'includes/session.php';
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $status = $_POST['status'];
        $conn = $pdo->open();

        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_webinar WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $row = $stmt->fetch();

        if($row['numrows'] > 0){
            $_SESSION['error'] = 'Webinar  already taken';
        }
        else{
        //  $password = password_hash($password, PASSWORD_DEFAULT);
            $filename = $_FILES['image']['name'];
           // $now = date('Y-m-d'); 
            if(!empty($filename)){
                $rand= rand("000000","999999");
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $new_filename = $rand.'.'.$ext;
                move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/webinar/'.$new_filename);   
            }
            try{
                $stmt = $conn->prepare("INSERT INTO tbl_webinar (image, name, date, start, end, status) VALUES (:image, :name, :date, :start, :end, :status)");
                $stmt->execute(['image'=>$new_filename, 'name'=>$name, 'date'=>$date, 'start'=>$start, 'end'=>$end, 'status'=>$status]);
                $_SESSION['success'] = 'Webinar added successfully';

            }
            catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }

        $pdo->close();
    }
    else{
        $_SESSION['error'] = 'Fill up user form first';
    }

    header('location: webinar.php');

?>