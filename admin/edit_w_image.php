<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
	
		$conn = $pdo->open();
			$filename = $_FILES['image']['name'];
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/webinar/'.$new_filename);
			}

		try{
			$stmt = $conn->prepare("UPDATE tbl_webinar SET image=:image WHERE id=:id");
			$stmt->execute(['image'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Thumbnail updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select Banner to update photo first';
	}

	header('location: webinar.php');
?>