<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_newsletter WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'course  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['file']['name'];
			$now = date('Y-m-d'); 
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], 'assets/images/newsletter/'.$new_filename);	
			}
		
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_newsletter (name, file, status) VALUES (:name, :file, :status)");
				$stmt->execute(['name'=>$name,'file'=>$new_filename, 'status'=>$status]);
				$_SESSION['success'] = 'Newsletter added successfully';

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

	header('location: academy_newsletter.php');

?>