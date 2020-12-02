<?php
	include('noodlesdbinc.php'); 
	$mysqli = new mysqli('localhost', 'root', '', 'chun') or die(mysqli_error($mysqli));
	
	$noodle_id=0;
	$review_name='';
	$review_email='';
	$review_id=0;
	$review_text='';
	$review_rating=0;	
	
	if (isset($_POST['submit'])){
		$noodle_id = $_POST['noodle_id'];
		$review_email = mysqli_real_escape_string($conn,$_POST['review_email']);
		$review_name = mysqli_real_escape_string($conn,$_POST['review_name']);
		$review_title = mysqli_real_escape_string($conn,$_POST['review_title']);
		$review_text = mysqli_real_escape_string($conn,$_POST['review_text']);
		$review_rating = $_POST['review_rating'];
		
		$mysqli->query("INSERT INTO reviews (review_id, noodle_id, review_email, review_name, review_title, review_text, review_rating) VALUES('$review_id', '$noodle_id', '$review_email', '$review_name', '$review_title', '$review_text', '$review_rating')")or die($mysqli->error);
		
		header('location: review-all.php');
	}
?>
