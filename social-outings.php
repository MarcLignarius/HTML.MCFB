<?php $page_title = "Social Outings"; ?>
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
<div class="banner-container" id="social-outings-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB participates in, co-sponsors, and sometimes organizes and hosts member outings every year. These outings are intended to 
            be social activities that encourage members to establish and maintain friendships with one another (and others) in a casual 
            atmosphere. Annual outings will be noticed through email, mailers, and the MCFB Facebook page.
        </p>
        <p>
            If you're an MCFB member and would like to recommend an outing or join a currently scheduled outing, please 
            <a href="contact.php">Contact Us</a>.
        </p>
        <p>
            Annual outings include:
        </p>
        <ul>
            <li>May: Trap Shoot (click <a href="https://oregonfb.org/trapshoot-2/" style="color: #007bff;">HERE</a> for more info)</li>
            <li>July: Mt. Hood Pitch & Put/Golfing (click <a href="https://www.oan.org/events/event_details.asp?legacy=1&id=1213110" style="color: #007bff;">HERE</a> for more info)</li>
            <li>July: Volcanoes Baseball Game (click <a href="https://oregonfb.org/volcanoesgame/" style="color: #007bff;">HERE</a> for more info)</li>
        </ul>
    </div> 
</div> 
<div class="container-fluid">
    <p class="text-center">
        <a href="connecting-farmers.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>