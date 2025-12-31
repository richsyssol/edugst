<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM tbl_link WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Link deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select newsletter to delete first';
	}

	header('location: imp_link.php');
	
?>