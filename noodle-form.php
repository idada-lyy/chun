<!DOCTYPE html>
<html lang="en">
<head>
	<title>Noodle Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/form1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form2.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			
				<span class="contact100-form-title">
					Noodle Details
				</span>
				
				<?php require_once 'process-admin.php';?>
				<form action="process-admin.php" method="POST">

				<input type="hidden" name="noodle_id" value="<?php echo $noodle_id; ?>">
				
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">Noodle Name</span>
					<input class="input100" type="text" name="noodle_name" value="<?php echo $noodle_name; ?>" placeholder="Enter Noodle Name ">
				</div>
				
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">Noodle Origin</span>
					<input class="input100" type="text" name="noodle_origin" value="<?php echo $noodle_origin; ?>" placeholder="Enter Noodle Origin">
				</div>
				
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">Noodle Ingredients</span>
					<input class="input100" type="text" name="noodle_ingredients" value="<?php echo $noodle_ingredients; ?>" placeholder="Enter Noodle Ingredients">
				</div>
				
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Noodle Image File Directory Link</span>
					<input class="input100" type="text" name="noodle_image" value="<?php echo $noodle_image; ?>" placeholder="E.g. assets\image\noodles\beefnoodlesoup.jpg">
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
					<span class="label-input100">Noodle Description</span>
					<textarea class="input100" name="noodle_description" placeholder="Enter Noodle Description"><?php echo $noodle_description; ?></textarea>
				</div>
				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
					<span class="label-input100">Noodle History</span>
					<textarea class="input100" name="noodle_history" placeholder="Enter Noodle History"><?php echo $noodle_history; ?></textarea>
				</div>

				<div class="container-contact100-form-btn">
				<?php if($update == true):?>
					<button type="submit" name="update" class="contact100-form-btn" style="padding-top:0.5cm;"><span>Update <i class="fa fa-rotate-left m-l-7" aria-hidden="true"></i></span></button>
				<?php else: ?>
					<button type="submit" name="save" class="contact100-form-btn" style="padding-top:0.5cm;"><span>Save <i class="fa fa-floppy-o m-l-7" aria-hidden="true"></i></span></button>
				<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
