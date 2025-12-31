<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$subtitle = $_POST['subtitle'];
		$date = $_POST['date'];
		$academy = $_POST['academy'];
		$url = $_POST['url'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_publication WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Book  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['file']['name'];
			$now = date('Y-m-d'); 
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['file']['tmp_name'], 'assets/images/publication/'.$new_filename);	
			}
		
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_publication (file, name, subtitle, date, academy, url, status) VALUES (:file, :name, :subtitle, :date, :academy, :url, :status)");
				$stmt->execute(['file'=>$new_filename, 'name'=>$name, 'subtitle'=>$subtitle, 'date'=>$date, 'academy'=>$academy, 'url'=>$url, 'status'=>$status]);
				$_SESSION['success'] = 'publication added successfully';

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

	header('location: publication.php');

?>