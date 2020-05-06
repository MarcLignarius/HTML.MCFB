<?php $page_title = "Asking Farmers"; ?>
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
<div class="banner-container" id="asking-farmers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            People have questions about farming. Whether members of the general public, students, industry representatives, government 
            employees, or elected officials, when farm-related questions come up, people tend to turn to the usual information sources. 
            These information sources often consist of friends, colleagues, books, the Internet, or academic experts. Rarely, though, do 
            people have ready access to real farmers. Real farmers have unique experiences, knowledge, and understanding of land and 
            farming techniques and issues. Farmers, local communities, and our society in general will benefit if people who are seeking 
            to understand farming better have the ability to ask farmers directly. Given this, MCFB wants to connect people with questions 
            about farming with real farmers. To accomplish this, we have established the “Ask a Farmer” program.
        </p>
        <p class="font-weight-bold">
            Recent questions posed to our farmers include:
        </p>
        <ul>
            <li>What are typical local farmland lease rates?</li>
            <li>What does a farm business plan look like?</li>
            <li>What is it like to have a solar field within a farm?</li>
            <li>How much water is required annually for a single horse?</li>
            <li>Is there a lease premium for farmland that has been in the Conservation Reserve Program?</li>
        </ul>
        <p>
            If you have a question that you would like to pose to a local farmer, <a href="contact.php">Contact Us</a>.
        </p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="our-approach.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>