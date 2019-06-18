
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xavier Cornwell Portfolio</title>
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
  <body >
  <?php require_once('inc/mysqli_connect.php'); ?>
    <header class="header header2" style="background: url(img/hello.jpg); background-size: cover; background-position: center center;"> 
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg text-white">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
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
   
    <!-- Hero Section-->
    <section class="hero">
      <div class="container pt-5 ">
        <div class="row">
          <div class="col-xl-6 mb-5">
            <h1>Xavier <span>Cornwell</span></h1><p>Cats, Coffee and,<br><span>Code</span></p>
          </div>
          
        </div><a href="about.html" class="btn btn-primary btn-round-lg btn-lg continue link-scroll" style="font-size:61;"><b>Contact Me</b></a>
     
      <div class="row justify-content-end text-left slogan"><div class="col-xl-5 mt-3 slogan offset-xl-2 ">Life gets boring if you arn't <span>trying to learn something new.</span></div> </div> </div>
    </section>
    </header>
    <main class="all" style="z-index: -1;background: url(img/learn.png); background-size: cover; background-repeat: repeat;padding-bottom:200px;">
    <div class="bigcontain" style="" >
    <!-- Divider Section-->
    <section style="background-color:#27272D;" class="divider mt-5 pt-2 pb-3">
      <div class="container  d-flex justify-content-center">
        <div class="row">
          <div class="col-md-12 mt-4 text-center">
            <h2 class="mb-5">Want to see my <span>projects?</span></h2>
          <div class="mt-5 col-md-12 check" >Check them out below!</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts mt-5"> 
      <div class="container"> 
      <div class="row d-flex justify-content-between" >
      <?php 
  
  //blog post query
  $sql = "SELECT *
  FROM blog  LIMIT 3";
$result = $db->query($sql);  


while ($row = $result->fetch_assoc()) {

$id= $row['id'];
$summary=$row['summary'];
$date= $row['date'];



     //img query
     $img = "SELECT *
      FROM img
       WHERE blog_id = '$id' LIMIT 1"; 
      
      //header query
      $header = "SELECT *
      FROM header
       WHERE blog_id = '$id' LIMIT 1";         
                

                
$imgResult = $db->query($img); 
$headerResult = $db->query($header); 
$row = $imgResult->fetch_assoc();
 $img=$row['img_path'];

 $row = $headerResult->fetch_assoc();
 $header=$row['header'];

?>
        
          <div class="card pt-3 col-lg-3 mt-4" style="background-color:#27272D;   color:white;">
            <div class="post-thumbnail"><a href="post.php?blog=<?php echo $id;?>"><img src="img/<?php echo $img;?>" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date"><?php echo $date;?></div>

              </div><a href="post.php?blog=<?php echo $id;?>">
                <h3 class="h4" style="color:white;" ><?php echo $header;?></h3></a>
              <p><?php echo $summary;?></p>
            </div>
          </div>
         
         
        
   

<?php } ?>

</div>

  </div>
 
  </section>
  </div>
  </main>
    <!-- Page Footer-->
    <footer class="main-footer 0"  style="background: url(img/hello.jpg); background-size: cover; background-position: center center">
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
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
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand -->
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div  class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link ">Home</a>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="about.html" class="nav-link ">Contact</a>
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
  </body>
</html>