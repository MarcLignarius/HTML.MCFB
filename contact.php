<?php $page_title = "Contact"; ?>
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
<div class="banner-container" id="contact-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
  <div class="container">
  <h3 class="mb-5">Call or Email</h3>
    <p>
      <i class="fa fa-phone"></i>
      <a href="tel:206-595-5078" class="ml-1" style="color: black; text-decoration: none">206 [dash] 595 [dash] 5078</a>
    </p>
    <p>
      <i class="fa fa-envelope"></i>
      <a href="mailto:multnomahCFB@gmail.com" class="ml-1" style="color: black; text-decoration: none">multnomahCFB [at] gmail [dot] com</a>
    </p>
    <h3 class="my-5">Send us a Message</h3>
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="control-group form-group">
        <div class="controls">
          <label>Full Name:</label>
          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Phone Number:</label>
          <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Email Address:</label>
          <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Message:</label>
          <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
        </div>
      </div>
      <div id="success"></div>
      <!-- For success/fail messages -->
      <p>
        <button type="submit" class="btn btn-light" id="sendMessageButton">Send Message</button>
      </p>
    </form>
  </div>
</div>
<div class="container-fluid">
  <p class="mt-2 mb-4 text-center" id="statement">
    <em>
        MCFB prohibits workplace discrimination and harassment in all of its
        programs and activities. MCFB will not condone or tolerate prejudicial remarks,
        actions, slurs, or jokes expressed and directed at or to any person for any reason.
    </em>
</p>
  <p class="text-center">
    <a href="index.php" class="btn btn-light">Home</a>
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