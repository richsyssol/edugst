<?php
	include 'includes/session.php';
	include'includes/slugify.php';
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$slug = slugify($name);
		$price = $_POST['price'];
		$mrp = $_POST['mrp'];
		$duration = $_POST['duration'];
		$subtitle = $_POST['subtitle'];
		$about = $_POST['about'];
		$url = $_POST['url'];
	
		$conn = $pdo->open();
		
		try{
			$stmt = $conn->prepare("UPDATE tbl_course SET name=:name, slug=:slug, subtitle=:subtitle, price=:price, mrp=:mrp, duration=:duration, url=:url, about=:about WHERE id=:id");
			$stmt->execute(['name'=>$name, 'slug'=>$slug, 'subtitle'=>$subtitle, 'price'=>$price, 'mrp'=>$mrp, 'duration'=>$duration, 'url'=>$url, 'about'=>$about, 'id'=>$id]);
			$_SESSION['success'] = 'Course updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: courses.php');
?>