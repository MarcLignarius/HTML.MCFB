<?php $page_title = "Farming"; ?>
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
<div class="banner-container" id="farming-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            Multnomah County encompasses over 300,000 acres and includes both highly urbanized and
            less developed rural communities. Within the county, there are over 650 farms made up of
            more than 25,000 acres. These farms are both big and small, urban and rural, organic and
            conventional, and food and non-food producing. Multnomah County farm commodity sales total
            over $74 million annually and are thus a critical part of the local economy. Farmers from all
            sectors are welcome and encouraged to join and participate in MCFB.
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="grid-container-3">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="farm-stands-and-agritourism.php">
                        <img class="card-image" id="image-2-2-1">
                        <h2 class="card-title">Farm Stands & Agritourism</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB promotes local farm stands every year to assist local farmers in getting the word out to our communities.
                    </p>
                </div>
                <div>
                    <a href="farm-stands-and-agritourism.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
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