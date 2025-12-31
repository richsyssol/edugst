<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$start = $_POST['start'];
		$end = $_POST['end'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE tbl_webinar SET name=:name, date=:date, start=:start, end=:end WHERE id=:id");
			$stmt->execute(['name'=>$name, 'date'=>$date, 'start'=>$start, 'end'=>$end, 'id'=>$id]);
			$_SESSION['success'] = 'Webinar updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: webinar.php');
?>