<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['c_id'];
		$name = $_POST['name'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE  tbl_newsletter  SET name=:name WHERE id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Newsletter updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: academy_newsletter.php');
?>