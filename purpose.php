<?php $page_title = "Purpose"; ?>
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
<div class="banner-container" id="purpose-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            The Multnomah County Farm Bureau's (MCFB’s) purpose is to support and defend our vision, mission, and values as shown below.
        </p>
        <p>
            <strong>MCFB's Vision:</strong> Farmers, in reflection of our hard work, can expect incomes that support quality livelihoods for their families. 
        </p>
        <p>
            <strong>MCFB's Mission:</strong> We help local farmers be successful.
        </p>
        <p>
            <strong>MCFB's Values:</strong> We believe a diverse representation of farmers and farming methods will best support and defend our collective farm community. 
        </p>
        <p>
            <strong>Approach:</strong> <a href="purpose-our-approach.php">Our Approach</a> explains the actions 
            we use to implement our purpose.
        </p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>