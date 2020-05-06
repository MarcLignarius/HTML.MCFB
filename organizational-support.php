<?php $page_title = "Organizational Support"; ?>
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
<div class="banner-container" id="organizational-support-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>As a means of representing farmers, MCFB provides financial support to two types of organizations:</p>
        <ul>
            <li>Organizations that serve the greater good of the community</li>
            <li>Organizations that specifically advocate on behalf of farmers.</li>
        </ul>
        <p>Organizations typically receiving MCFB support include:</p>
        <ul>
            <li><a href="https://www.oan.org/page/chapters">Mt. Hood Chapter of the Oregon Association of Nurseries</a></li>
            <li><a href="https://www.ofsonline.org/">Oregonians for Food and Shelter</a></li>
            <li><a href="https://oregonfb.org/tag/ofb-pac/">Oregon Farm Bureau Political Action Committee</a></li>
            <li><a href="https://oregonfb.org/programs/oregon-agriculture-educational-foundation-oaef/">Oregon Farm Bureau Voter Education Fund</a></li>
            <li><a href="https://www.rmhc.org/">Ronald McDonald House</a></li>
            <li><a href="https://www.wrlegal.org/">Western Resources Legal Center</a></li>
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