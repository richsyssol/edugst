<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['c_id'];
		$name = $_POST['name'];
		$url = $_POST['url'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE tbl_link  SET name=:name, url=:url WHERE id=:id");
			$stmt->execute(['name'=>$name, 'url'=>$url, 'id'=>$id]);
			$_SESSION['success'] = 'Link updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: imp_link.php');
?>