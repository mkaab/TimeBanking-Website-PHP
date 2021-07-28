<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HireSeller - Find Your Job & Get Work Done</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/hs_style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="resources/icon.png" />


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="resources/logo.png" width="160" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link rs_menu" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/jobs.php">Browse Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/dashboard.php">DashBoard</a>
            </li>
            
            <?php  
            if(isset($_SESSION['loggedUser']))
              {
               echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/logout.php'>Logout</a></li>";
              }

              else
              {
                echo "<li class='nav-item'>";
                // echo "<a class='nav-link rs_menu' href='pages/registration.php'>Become Freelnacer</a></li>";
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/login.php'>Login</a></li>";


              }
              ?>
            
              
            
          </ul>
        </div>
      </div>
    </nav>

 <div class="container-fluid rs_slider">

      <h1 class="text-white">TimeBanking Website </h1>
      <p class="text-white">Scroll Down to Learn More</p>
</div>

   <div class="container-fluid bg-success">
      <div class="container rs_call">
      <div class="row">
      <div class="col-lg-10 col-md-8 col-sm-8">
         <h1 class="text-white">Get Your Job Done</h1>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 center-block">
         <a href="pages/postjob.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Post Job</a>
         
      </div>
</div>
</div>
</div>
      
    <!-- Page Content -->
    <div class="container" style="padding: 4% 0% 1% 0%">
      <h1 class="text-center text-success">About Us</h1>
      <hr class="rs_hr" color=green>
      <p class="text-center">This is a TimeBanking website for the people, by the people, to help the community for different needs that may arise. There is no currency used in the Time Banking system, rather the hours are the currency. All user upon signing up will be provided with 5 hours credit to their account. They can use these hours to get jobs done. If they do some one else's job they will be credited via hours. The number of hours credited depends on the number of hours it will take to complete the job. This will help the community by increasing the spirit of helping and kindness in these trying times of a global pandemic.
      </p>

    </div>

    <div class="container">
       
    </div>

    <div class="container-fluid bg-success">
       
       <div class="container" style="padding: 5% 0% 8% 0%;">
         <h1 class="text-center text-white">How It Works</h1>
         <hr class="rs_hr" color=white>
         <div class="row">
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Post Your Job</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 rs_step col-md-6 col-6">
            <img style="width: 60%" src="resources/post.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Choose Client</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/hire.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Get Work Done</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/done.png">
         </div>
         </div>

    </div>
    </div>


    <div class="container-fluid">   
       <div class="container" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Find by Category</h1>
         <hr class="rs_hr" color=green>

            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/web.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/mobile.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Mobile Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/graphics.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Graphics Design</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/writer.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Content Writer</p>
               </div>
               </a>
            </div>   

            
       </div>

       <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/seo.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Search Engine Optimization</p>
               </div>
               </a>
            </div>  

             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/care.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Customer Care</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/marketing.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Digital Marketing</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/assistant.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Assistant</p>
               </div>
               </a>
            </div>  
     
            
       </div>
    </div>
 </div>


<div class="container-fluid">   
       <div class="container text-center" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Customer Feedback</h1>
         <hr class="rs_hr" color=green>
         <q style="font-size: 22px; font-weight: bold;">I’ve been working with them for a few years. Fine tuning and tweaking my website to make sure that I have the edge on my competitors. All I can say is Fast,Reliable,and Patiently Understanding. Thanks A million</q><br><br>
         <p>Justin Skinner</p>
       </div>
 </div>


 <div class="container-fluid bg-dark">   
       <div class="container text-white" style="padding: 5% 0% 8% 0%;">
       	<div class="row">
       		
       		<br>
       	<p style="text-align: center;" class="text-white">Muhammad Kaab 001126856</p>
       </div></div>
 </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


  </body>

</html>
