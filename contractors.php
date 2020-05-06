<?php $page_title = "Contractors"; ?>
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
<div class="banner-container" id="contractors-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container" id="team">
        <p>
            MCFB contracts for services related to the executive director/secretary and treasurer.
        </p>
        <div class= "row my-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/jay_udelhoven.jpg" alt="MCFB Executive Director Jay Udelhoven" class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Jay Udelhoven - Executive Director</h4>
                <p>Jay grew up in the Midwest, running around his grandparent's and uncle's dairy farms. Throughout his 30-year natural resource career, he has worked on numerous farm-related projects including dairy production in Africa, fish production in Panama, Mexico and Washington State, cattle ranching in Florida, and small-scale nursery/berry/mixed vegetable production in Oregon. Jay has served in senior level positions for several organizations over the past 20 years and has served as the MCFB Executive Director since July 2019. He holds a Bachelor of Science in Natural Resources from the University of Wisconsin-Madison and a Master of Environmental Policy from the University of Denver, Colorado.</p> 
            </div>
        </div>
        <div class= "row mb-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/deniece_tucker.jpg" alt="MCFB Treasurer Deniece Tucker" class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Deniece Tucker - Treasurer</h4>
                <p>Deniece was born and raised on her family’s farm located east of Troutdale near the Sandy River. The property was homesteaded in 1853 and has been farmed since 1952. Deniece and her family historically raised cattle and grew raspberries but converted to growing nursery stock in 2001 due to market changes. A member of the Multnomah County Farm Bureau since 1999, Deniece joined the Board of Directors in 2000 and has served as the Board President (2007-2008) and Vice-President (2009-2018). Deniece is currently serving as the Board Treasurer. Deniece holds an Associate Degree in Accounting, is an Oregon licensed tax consultant, and is a federally licensed tax agent.</p> 
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="our-people.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>