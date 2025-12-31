<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$description = $_POST['description'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE our_team SET name=:name, designation=:designation, description=:description  WHERE id=:id");
			$stmt->execute(['name'=>$name, 'designation'=>$designation, 'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Team updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select Banner to update photo first';
	}

	header('location: our-team.php');
?>