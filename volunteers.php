<?php $page_title = "Volunteers"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We are non-profit grassroots organization working to enhance, protect, and advocate for agriculture and farmers in Multnomah County, Oregon.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="author" content="">
    <title><?php echo $page_title; ?> | Multnomah County Farm Bureau</title>
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/styles.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between fixed-top">
    <a class="navbar-brand" href="../../index.php">
        <img src="../../images/logo.png" alt="Multnomah Farm County Bureau" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/our-approach.php">Our Approach</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/benefits.php">Benefits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/join-us.php">Join Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class="banner-container" id="volunteers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container" id="team">
        <h1 class="mb-4"><?php echo $page_title; ?></h1>
        <p>
            MCFB occasionally benefits from the time and expertise of volunteers. Volunteers lead or help with activities such as website 
            development and maintenance, social media management, and event hosting. If you would like to volunteer or have a volunteer 
            idea, please <a href="contact.php">Contact Us</a>.
        </p>
        <p class="font-weight-bold mt-4">
            Current MCFB Volunteers:
        </p>
        <div class= "row mt-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/marc_davies.jpg" alt="MCFB Volunteer Web Developer Marc Davies" class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Marc Davies, Web Developer</h4>
                <p>
                    Marc is a web developer who has been working on MCFB’s website since the fall of 2019. Marc has a Bachelor of Arts in 
                    International Business from the University of Portsmouth and a Master’s degree in International Commerce from the 
                    KEDGE Business School. Marc has also studied computer programming.
                </p> 
            </div>
        </div>
        <div class= "row mt-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/rain_mower.jpg" alt="MCFB Volunteer Social Media Specialist Rain Mower" class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Rain Mower, Social Media</h4>
                <p>
                    Rain is a social media wiz who graduated from Portland’s Grant High School in 2017. When she is not working hard to satisfy the needs of retail customers, she enjoys spending time in the outdoors with her dog Ranger.
                </p> 
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p class="font-weight-bold">
        Current Volunteer Opportunities:
    </p>
    <p>
       MCFB is not currently recruiting for volunteers. If you have an interest in and an idea for volunteer activities, please <a href="contact.php">Contact Us</a>.
    </p>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="our-people.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <p class="mt-2 mb-4 text-center" id="statement">
    <em>
        MCFB prohibits workplace discrimination and harassment in all of its
        programs and activities. MCFB will not condone or tolerate prejudicial remarks,
        actions, slurs, or jokes expressed and directed at or to any person for any reason.
    </em>
</p>
</div>
    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
          <div class="row mt-2 mb-2">
            <div class="col-md-4 mb-0 text-center">
              <p>
                <i class="fa fa-envelope"></i>
                <a href="mailto:multnomahCFB@gmail.com" class="ml-1">multnomahcfb [at] gmail [dot] org</a> 
              </p>
            </div>
            <div class="col-md-4 mb-0 text-center">
              <p>
                <i class="fa fa-phone"></i>
                <a href="tel:206-595-5078" class="ml-1">206 [dash] 592 [dash] 5138</a>
              </p>
            </div>
            <div class="col-md-4 mb-0 text-center">
              <p>
                <i class="fa fa-facebook"></i>
                <a href="https://www.facebook.com/multnomahcountyfarmbureau/" class="ml-1">Follow MCFB on Facebook</a>
              </p>
            </div>
          </div>
          <p class="m-0 text-center text-white" id="copyright">
            Copyright &copy; Multnomah County Farm Bureau 2020
          </p>
        </div>
        <!-- /.container -->
    </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/scripts.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>