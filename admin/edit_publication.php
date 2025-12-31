<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['c_id'];
		$name = $_POST['name'];
		$subtitle = $_POST['subtitle'];
		$academy = $_POST['academy'];
		$url = $_POST['url'];
		$date = $_POST['date'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE tbl_publication SET name=:name, subtitle=:subtitle, academy=:academy, date=:date, url=:url WHERE id=:id");
			$stmt->execute(['name'=>$name, 'subtitle'=>$subtitle, 'academy'=>$academy, 'date'=>$date, 'url'=>$url, 'id'=>$id]);
			$_SESSION['success'] = 'Publication updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: publication.php');
?>