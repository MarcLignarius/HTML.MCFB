<?php $page_title = "Workshops"; ?>
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
<div class="banner-container" id="workshops-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB sponsors and hosts workshops to help local farmers achieve necessary certifications and licenses and remain compliant with 
            laws and regulations. We are developing an annual “curriculum” that farmers can depend on every year. The curriculum will include 
            two workshop topics that are the same from year to year and two workshop topics that change from year to year. Our current workshop 
            training schedule is below. Workshops will be announced through email, mailers, and the MCFB Facebook site.</p>
        <ul>
            <li><strong>January/February:</strong> Worker Protection Standards & Pesticides for Owners/Managers</li>
            <li><strong>April/May:</strong> Worker Protection Standards & Pesticides for Workers and Handlers</li>
            <li><strong>September/October:</strong> Rotating training topic</li>
            <li><strong>November/December:</strong> Rotating training topic</li>
        </ul>
        <p>If you are a local farmer and would like to request a training topic, please <a href="contact.php">Contact Us</a>.</p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="sharing-knowledge-with-farmers.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>