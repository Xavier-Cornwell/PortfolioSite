<?php require_once('inc/mysqli_connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Blog - B4 Template by Bootstrap Temple</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,900&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet"> 

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body style="background-color:#e3e7ea;">
    <header class="header header3"  style="background: url(img/hello.jpg); background-size: cover; background-position: center center; height:500px;">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
          <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
              <div class="close-btn"> 
                <i class="icon-close"></i></div>
              <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                </div>
              </div>
            </div>
          </div>
          <?php 
  
  $id=$_GET['blog'];
  // echo $id;
    //blog post query
    $sql = "SELECT *
    FROM blog
     WHERE id = '$id'";

$result = $db->query($sql);   
       //img query
       $img = "SELECT *
        FROM img
         WHERE blog_id = '$id' LIMIT 6"; 
        
        //header query
        $header = "SELECT *
        FROM header
         WHERE blog_id = '$id' LIMIT 6";  
         

         $row = $result->fetch_assoc() ;
         $project=$row['project'];
         $goals = $row['goals'];
         $challenge= $row['challenge'];
         $learned =$row['learned'];
         $changes =  $row['changes'];
         $thought=$row['thought'];       

  //resaults for the blog                
  $imgResult = $db->query($img); 
  $headerResult = $db->query($header); 

  
   
   $img=[];
   $header=[];
   while ($row = $imgResult->fetch_assoc()) {
          
    array_push($img, $row['img_path']);
   }
   while ($row = $headerResult->fetch_assoc()) {
          
    array_push($header, $row['header']);
   }
  //  var_dump($img);
  //  var_dump($header);
?>


          <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
              <!-- Navbar Brand -->
              <!-- Toggle Button-->
              <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link ">Home</a>
                </li>
                <li class="nav-item"><a href="blog.php" class="nav-link ">Portfolio</a>
                </li>
                <li class="nav-item"><a href="about.html" class="nav-link ">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
     
        <div class="ml-5 d-flex h-50 align-items-center" style="font-size:82; color:white;"><h1>The  <span>Project</span></h1></div>

    </header>
    <div class="arrow d-flex justify-content-center mt-5 " style="display:inline-block; ">
    <a href="#scroll" class=""><i style="font-size:50px; width:100%;" class="fa fa-arrow-down "></i></a>
      </div>

    <div class="container d-flex justify-content-center">
    

      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-12"   id="scroll"> 
   
          
          <div class="container">

                 <div class="how-section1">
            <div class="row pb-5 mt-5 sect " style="border-bottom:solid 2px black;">
            <div><h1 class="topHead col-lg-6 col-md-12  align-items-center  head">The Project</h1></div> 
                <div class="col-lg-6 col-md-12  how-img">
                    <img src="img/<?php echo $img[0];?>" class=" col-lg-9 col-md-12 img-fluid pt-3" alt=""/>
                    <h4 class="col-lg-9 col-md-12 pt-3"><?php echo $header[0];?></h4>
                    <p class="text-muted col-lg-9 col-md-12"><?php echo $project;?></p>
                </div>
                <div class="col-lg-6 col-md-12  align-items-center head">
                  
                     <h1 class="bottomHead">The Project</h1>      
                </div>
            </div>
            <div class="row pb-5 mt-5 sect" style="border-bottom:solid 2px black;">
                <div class="col-lg-6 col-md-12    head">
                 <h1>Goals</h1>
                </div>
                <div class="col-lg-6 col-md-12  how-img" >
          
                    <img src="img/<?php echo $img[1];?>" class="col-lg-9 col-md-12 img-fluid pt-3" alt=""/>
                    <h4 class="col-lg-9 col-md-12 pt-3"><?php echo $header[1];?></h4>
                          
                                <p class="text-muted col-lg-9 col-md-12 "><?php echo $goals;?></p>
                </div>
            </div>
            <div class="row mt-5 pb-5 sect" style="border-bottom:solid 2px black;" >
            <div ><h1 class="topHead col-lg-6 col-md-12  align-items-center  head" >Challenges</h1></div> 
                <div class="col-lg-6 col-md-12  how-img">
                     <img src="img/<?php echo $img[2];?>" class="col-lg-9 col-md-12 img-fluid pt-3" alt=""/>
                     
                     <h4 class="subheading col-lg-9 col-md-12 pt-3 "><?php echo $header[2];?></h4>
                     <p class="text-muted col-lg-9 col-md-12"><?php echo $challenge;?></p>
                </div>
                <div class="col-lg-6 col-md-12  align-items-center head">
                  <h1 class="bottomHead">Challenges</h1>
                </div>
            </div>
            <div class="row mt-5 pb-5 sect" style="border-bottom:solid 2px black;">
                <div class="col-lg-6 col-md-12   align-items-center head">
                <div><h1 class=" col-lg-6 col-md-12  align-items-center  head">Lessons Learned</h1></div> 
                </div>
                <div class="col-lg-6 col-md-12  pb-5 how-img">
                    <img src="img/<?php echo $img[3];?>" class="col-lg-9 col-md-12 img-fluid pt-3 " alt=""/>
                    
                    <h4 class="subheading col-lg-9 col-md-12 pt-3"><?php echo $header[3];?></h4>
                    <p class="text-muted col-lg-9 col-md-12"><?php echo $learned  ;?></p>
                </div>
            </div>
            <div class="row mt-5 pb-5 sect" style="border-bottom:solid 2px black;" >
            <div><h1 class="topHead col-lg-6 col-md-12  align-items-center  "> What I Would Change</h1></div>
                <div class="col-lg-6 col-md-12  how-img">
                     <img src="img/<?php echo $img[4];?>" class="col-lg-9 col-md-12 img-fluid pt-3" alt=""/>
                     
                     <h4 class="subheading col-lg-9 col-md-12 pt-3"><?php echo $header[4];?> </h4>
                     <p class="text-muted col-lg-9 col-md-12 "><?php echo $changes ;?></p>
                </div>
                <div class="col-lg-6 col-md-12  align-items-center head">
                  <h1 class="bottomHead">What I Would Change</h1>
                </div>
     
        </div>
        <div class="row pb-5 mt-5 sect" style="border-bottom:solid 2px black;">
                <div class="col-lg-6 col-md-12  align-items-center  head">
                 <h1>Final Thoughts</h1>
                </div>
                <div class="col-lg-6 col-md-12  how-img" >
          
                    <img src="img/<?php echo $img[5];?>" class="col-9 img-fluid pt-3" alt=""/>
                    <h4 class=" col-lg-6 col-md-12  pt-3"><?php echo $header[5];?></h4>
                          
                                <p class="text-muted col-lg-9 col-md-12  "><?php echo $goals;?></p>
                </div>
            </div>
        </div>
        </main>

      </div>
    </div>
    <!-- Page Footer-->
    <!-- Page Footer-->
    <footer class="main-footer mt-5"  style="background: url(img/hello.jpg); background-size: cover; background-position: center center">
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header ">
            <!-- Navbar Brand -->
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item"><a href="blog.php" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="about.php" class="nav-link ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2017. All rights reserved. Your great site.</p>
            </div>
            <div class="col-md-6 text-right">
              <p>Template By <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
    <script src="js/fadein.js"></script>

  </body>
</html>