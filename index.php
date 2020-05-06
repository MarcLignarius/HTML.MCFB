<?php $page_title = "Home"; ?>
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
<?php include("banner.php"); ?>
<div class="container-fluid">
    <div class="grid-container-4">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="about.php">
                        <img class="card-image" id="image-1">
                        <h2 class="card-title">About</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        We are a non-profit organization and local chapter of the Oregon Farm Bureau.
                    </p>
                </div>
                <div>
                    <a href="about.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="our-approach.php">
                        <img class="card-image" id="image-2">
                        <h2 class="card-title">Our Approach</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The strategies we use to fulfill our mission and accomplish our vision.
                    </p>
                </div>
                <div>
                    <a href="our-approach.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="benefits.php">
                        <img class="card-image" id="image-3">
                        <h2 class="card-title">Benefits</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The benefits and discounts our members receive on farming resources and services.
                    </p>
                </div>
                <div>
                    <a href="benefits.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="join-us.php">
                        <img class="card-image" id="image-4">
                        <h2 class="card-title">Join Us</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        There are many ways to participate and benefit from MCFB activities.
                    </p>
                </div>
                <div>
                    <a href="join-us.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>