<?php
	include_once('noodlesdbinc.php');
	$sql = "SELECT * FROM noodles;";
	$result = mysqli_query($conn, $sql) or die("Bad Query:$sql");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Chun - Home</title>

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
 
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/image/noodles/beefnoodlesoup.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Chun</h4>
        <span></span>
        <h2>Beef Soup Noodle</h2>
        <p>Noodle soup made of stewed or red braised beef, beef broth, vegetables and Chinese noodles.</p>
        <a href="noodle-single.php?id=<?php echo $row['noodle_id']=1?>" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets\image\noodles\jawanoodles.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Chun</h4>
        <span></span>
        <h2>Jawa Noodles</h2>
        <p>Javanese style noodle, commonly found in Indonesia and Malaysia.</p>
        <a href="noodle-single.php?id=<?php echo $row['noodle_id']=6?>" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets\image\noodles\laksa.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Chun</h4>
        <span></span>
        <h2>Laksa</h2>
        <p>Sour and spicy noodle soup popular in the Peranakan cuisine of Southeast Asia.</p>
        <a href="noodle-single.php?id=<?php echo $row['noodle_id']=5?>" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  
  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Snacks</h2>
              <p>A little snack never hurt anyone</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/fries.jpg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">French Fries</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM4.50</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/salad.jpg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">Salad</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM8.30</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/bacon.jpg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">Bacon</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM17.50</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/dumpling.jpeg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">Dumplings</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM5.60</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/nugget.jpeg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">Chicken Nugget</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM12.80</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href=""><img src="assets/image/snacks/wedges.jpeg" alt="img" style="height:250px;"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="">Potato Wedges</a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="">RM4.50</span>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->

 



  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Welcome</h2>
              <p>Welcome to Chun! After 30 years in business, we still serve the best noodles in the Penang. Chun specializes in Asian country noodles. Our noodle menus offer an array of flavorful dishes that are sure to satisfy any appetite.<br>For quality food, exceptional prices, and a clean and superb dining atmosphere, Chun is second to none. Whether you are looking for a quick lunch, a tasty dinner, or an appetizer and snacks, our experienced and courteous staff will make your visit a memorable one.</p>
            </div>
            <!-- end title -->             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

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