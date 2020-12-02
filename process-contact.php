<?php
	include('noodlesdbinc.php'); 
	$mysqli = new mysqli('localhost', 'root', '', 'chun') or die(mysqli_error($mysqli));
	
	$contact_id=0;
	$contact_name='';
	$contact_email='';
	$contact_title='';
	$contact_message='';	
	
	if (isset($_POST['submit'])){
		$contact_name = mysqli_real_escape_string($conn,$_POST['contact_name']);
		$contact_email = mysqli_real_escape_string($conn,$_POST['contact_email']);
		$contact_title = mysqli_real_escape_string($conn,$_POST['contact_title']);
		$contact_message = mysqli_real_escape_string($conn,$_POST['contact_message']);
		
		$mysqli->query("INSERT INTO contact (contact_name, contact_email, contact_title, contact_message) VALUES('$contact_name', '$contact_email', '$contact_title', '$contact_message')")or die($mysqli->error);
		
		header('location: success-contact.php');
	}
	
	if (isset($_GET['delete'])){
		$contact_id = $_GET['delete'];
		$mysqli->query("DELETE FROM contact WHERE contact_id=$contact_id") or die($mysqli->error());

		header("location: admin-contact-control.php");
	}
	

?>
