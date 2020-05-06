<?php $page_title = "Join Us"; ?>
<?php include("header.php"); ?>
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
<div class="banner-container" id="join-us-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            There are many ways to participate in and benefit from MCFB activities, these are explained more thoroughly in <a href="join-us-our-people.php">
            Our People</a> and <a href="join-us-our-approach.php">Our Approach</a>. 
        </p>
        <p> 
            MCFB <a href="join-us-membership.php">Membership</a> can be attained by: 
        </p>
        <ul>
            <li>Completing a hard copy membership packet</li>
            <li>Completing the <a href="https://oregonfb.org/join/" target="blank">OFB's online application</a></li>
            <li>Signing up for OFB through <a href="https://www.countryfinancial.com/">Country Financial</a></li>
        </ul>
        <p>
            For more information, <a href="contact.php">Contact Us</a>.
        </p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="index.php" class="btn btn-light">Back</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>

