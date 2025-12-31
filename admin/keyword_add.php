<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$keyword = $_POST['keyword'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_keyword WHERE keyword=:keyword");
		$stmt->execute(['keyword'=>$keyword]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Keyword  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);

			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_keyword (keyword, status) VALUES (:keyword, :status)");
				$stmt->execute(['keyword'=>$keyword, 'status'=>$status]);
				$_SESSION['success'] = 'Keyword added successfully';

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

	header('location: glossary.php');

?>