<?php
	include_once('noodlesdbinc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Search</title>

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
	
<style>
p.elipsis {
display: -webkit-box;
-webkit-line-clamp: 5;
-webkit-box-orient: vertical;
overflow: hidden;
text-overflow: ellipsis;
}
</style>

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
           <h2>Search: <?php 
		   $search = mysqli_real_escape_string($conn, $_GET['search']);
		   echo $search ?></h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Noodles</li>
          </ol>
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
                <div class="mu-course-container">
                  <div class="row">
				  <?php
				  if(isset($_GET['submit-search'])){
					  
					  $sql = "SELECT * FROM noodles WHERE noodle_name LIKE '%$search%' OR noodle_origin LIKE '%$search%' OR noodle_history LIKE '%$search%' OR noodle_ingredients LIKE '%$search%' OR noodle_description LIKE '%$search%'";
					  $result = mysqli_query($conn, $sql);
					  $queryResult = mysqli_num_rows($result);
					  
					  echo"<p>There are ".$queryResult." results!<br></p>";
					  
					  if($queryResult > 0){
						while($row = mysqli_fetch_assoc($result))
						  {						
					  ?>
					  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="noodle-single.php?id=<?php echo $row['noodle_id']?>">
						<img src="<?php echo $row['noodle_image']?>" alt="img" width="368" height = "290"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                        
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="noodle-single.php?id=<?php echo $row['noodle_id']?>"><?php echo $row['noodle_name']?></a></h4>
                        <p class="elipsis"><?php echo $row['noodle_description']?></p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="noodle-single.php?id=<?php echo $row['noodle_id']?>">Details</a>
                          
                        </div>
                      </div>
                    </div> 
                  </div>    
<?php
						  }
					  }else{
							  echo "No results found!";
					  }
				  }
?>						  
					  
				
                    
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