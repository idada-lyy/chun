<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Contact Control</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/red-theme.css" rel="stylesheet">  

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="assets/css/table.css">
	<link rel="stylesheet" type="text/css" href="assets/css/table2.css">

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
p.elipsis {
display: -webkit-box;
-webkit-line-clamp: 5;
-webkit-box-orient: vertical;
overflow: hidden;
text-overflow: ellipsis;
}

table{
	width=300%;
	
}
th,td{
	padding: 10px;
	height=50px;
}
</style>
  </head>
  <body> 
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
<?php include 'header.html';?>
  <!-- End header  -->
 
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Admin Panel</h2><br>
           <p style="color:white;text-align:center;">Reply messages received from users.</p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
			<h3>
 		   <a href="admin-noodle-control.php">Noodles </a>
 		   |
 		   <a href="admin-contact-control.php">Messages</a>
			</h3>
         <div class="mu-gallery-area">
          <!-- start admin table -->
		<div class="limiter" id="table-section">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table>
							<thead>
								<tr class="table100-head">
									<th class="column1">ID</th>
									<th class="column2">Name</th>
									<th class="column3">Email</th>
									<th class="column4">Title</th>
									<th class="column5">Message</th>
									<th class="column6">Replied</th>
								
								</tr>
							</thead>
							<?php require_once 'process-contact.php'; ?>
							
									<?php
										include_once('noodlesdbinc.php');
										$sql = 'SELECT * from contact';
										if (mysqli_query($conn, $sql)) {
										echo "";
										} else {
										echo "Error: " . $sql . "<br>" . mysqli_error($conn);
										}
										
										$result = mysqli_query($conn, $sql);
										if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) { 
									?>
							<tbody>
									<tr>
										<td class="column1"><?php echo $row['contact_id'];?></td>
										<td class="column2"><?php echo $row['contact_name']; ?></td>
										<td class="column3"><p class="elipsis"><?php echo $row['contact_email']; ?></p></td>
										<td class="column4"><p class="elipsis"><?php echo $row['contact_title']; ?></p></td>
										<td class="column5"><p class="elipsis"><?php echo $row['contact_message']; ?></p></td>
										<th class="column6"><a href="process-contact.php?delete=<?php echo $row['contact_id'];?>" style="color:#4d9ef0;">Replied <i class="icon-trash" aria-hidden="true"></i></th>
								
									</tr>
							</tbody>
							<tbody>
									<tr>
										<td colspan="10"><hr></td>
									</tr>
							</tbody>
									<?php
										
										}
										} else {
										echo '0 results';
										}
										?>
						</table>
					</div>
				</div>
			</div>
		</div>
          <!-- end admin table -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 

  <!-- Start footer -->
  <?php include 'footer.html';?>
  <!-- End footer -->





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>