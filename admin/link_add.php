<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$url = $_POST['url'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_link WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'link  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_link (name, url, status) VALUES (:name, :url, :status)");
				$stmt->execute(['name'=>$name,'url'=>$url, 'status'=>$status]);
				$_SESSION['success'] = 'Link added successfully';

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

	header('location: imp_link.php');

?>