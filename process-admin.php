<?php
	
	include_once('noodlesdbinc.php');
	$mysqli = new mysqli('localhost', 'root', '', 'chun') or die(mysqli_error($mysqli));

	
	$update=false;
	$noodle_id=0;
	$noodle_name='';
	$noodle_description='';
	$noodle_history='';
	$noodle_ingredients='';
	$noodle_origin='';
	$noodle_image='';
	
	if (isset($_POST['save'])){
		$noodle_name = $_POST['noodle_name'];
		$noodle_name = mysqli_real_escape_string($conn,$_POST['noodle_name']);
		$noodle_description = mysqli_real_escape_string($conn,$_POST['noodle_description']);
		$noodle_history = mysqli_real_escape_string($conn,$_POST['noodle_history']);
		$noodle_ingredients = mysqli_real_escape_string($conn,$_POST['noodle_ingredients']);
		$noodle_origin = mysqli_real_escape_string($conn,$_POST['noodle_origin']);
		$noodle_image = mysqli_real_escape_string($conn,$_POST['noodle_image']);
		
		$mysqli->query("INSERT INTO noodles (noodle_name, noodle_description, noodle_history, noodle_ingredients, noodle_origin, noodle_image) VALUES('$noodle_name', '$noodle_description', '$noodle_history', '$noodle_ingredients', '$noodle_origin', '$noodle_image')")or die($mysqli->error);
		
		header("location: admin-noodle-control.php");
		
	}	
		
	if (isset($_GET['delete'])){
		$noodle_id = $_GET['delete'];
		$mysqli->query("DELETE FROM noodles WHERE noodle_id=$noodle_id") or die($mysqli->error());

		header("location: admin-noodle-control.php");
	}
	
	if (isset($_GET['edit'])){
		$noodle_id = $_GET['edit'];
		$update = true;
		
		$result = $mysqli->query("SELECT * FROM noodles WHERE noodle_id=$noodle_id") or die($mysqli->error());
		
			$row = mysqli_fetch_array($result);
			$noodle_name = $row['noodle_name'];
			$noodle_description = $row['noodle_description'];
			$noodle_history = $row['noodle_history'];
			$noodle_ingredients = $row['noodle_ingredients'];
			$noodle_origin = $row['noodle_origin'];
			$noodle_image = $row['noodle_image'];
			
		}
		
		if (isset($_POST['update'])){
			$noodle_id = mysqli_real_escape_string($conn,$_POST['noodle_id']);
			$noodle_name = mysqli_real_escape_string($conn,$_POST['noodle_name']);
			$noodle_description = mysqli_real_escape_string($conn,$_POST['noodle_description']);
			$noodle_history = mysqli_real_escape_string($conn,$_POST['noodle_history']);
			$noodle_ingredients = mysqli_real_escape_string($conn,$_POST['noodle_ingredients']);
			$noodle_origin = mysqli_real_escape_string($conn,$_POST['noodle_origin']);
			$noodle_image = mysqli_real_escape_string($conn,$_POST['noodle_image']);
		
			$mysqli->query("UPDATE noodles SET noodle_name='$noodle_name', noodle_description='$noodle_description', noodle_history='$noodle_history', noodle_ingredients='$noodle_ingredients', noodle_origin='$noodle_origin', noodle_image='$noodle_image' WHERE noodle_id=$noodle_id") or die($mysqli->error);
		
			header('location: admin-noodle-control.php');
		}

?>