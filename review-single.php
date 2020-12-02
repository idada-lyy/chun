<?php
	include_once('noodlesdbinc.php');
	$ID = $_GET['id'];
	$sql = "SELECT * FROM reviews where review_id='$ID';";
	$result = mysqli_query($conn, $sql) or die("Bad Query:$sql");
	$row = mysqli_fetch_array($result);
	
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Review</title>

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

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <?php include 'header.html';
 ?>
 
 
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Reviews</h2>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
					<div class="col-md-1"></div>
                    <div class="col-md-10">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
						<?php
						  $noodleid = $row['noodle_id'];
						  $sql2 = "SELECT * FROM noodles where noodle_id='$noodleid';";
					      $result2 = mysqli_query($conn, $sql2) or die("Bad Query:$sql2");
	                      $row2 = mysqli_fetch_array($result2);
						  ?>
                          <a href="#"><img alt="img" src="<?php echo $row2['noodle_image']?>" height="500"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#"><?php echo $row['review_title']?></a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <a><?php echo $row['review_name']?></a>						  
                          <a href="#"><?php echo $row2['noodle_name']?></a>
						  <a><?php echo $row['review_rating']?>/5 stars</a>
                          
                        </div>
                        <div class="mu-blog-description">
                          <p><?php echo $row['review_text']?></p>
                        </div>
                      </article>
                    </div> 
					<div class="col-md-1"></div>
                  </div>
                </div>
                <!-- end course content container -->        
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <?php include 'footer.html';
 ?>



  
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