<?php $page_title = "Laws & Regulations"; ?>
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
<div class="banner-container" id="laws-and-regulations-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            There are numerous laws and regulations at the national, state, and local level that affect farming in Multnomah County. The links 
            below provide access to many, but not all of these. MCFB attempts to identify and become familiar with laws and regulations that 
            are relevant to our local farmers.
        </p>
        <ul>
            <li>Federal level: <a href="https://www.epa.gov/agriculture/laws-and-regulations-apply-your-agricultural-operation-farm-activity">https://www.epa.gov/agriculture/laws-and-regulations-apply-your-agricultural-operation-farm-activity</a></li>
            <li>State level: <a href="https://www.oregon.gov/ODA/agriculture/Pages/Laws.aspx">https://www.oregon.gov/ODA/agriculture/Pages/Laws.aspx</a></li>
            <li>Local level: <a href="https://multco.us/file/48861/download">https://multco.us/file/48861/download</a></li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="representing-farmers.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>