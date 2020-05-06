<?php $page_title = "Our People"; ?>
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
<div class="banner-container" id="our-people-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        Our people include our 7,000 members, Board of Directors, contractors, and volunteers. We encourage you to join us in the 
        manner the best suits you.	
    </p>
</div>
<div class="container-fluid">
    <div class="grid-container-4">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="membership.php">
                        <img class="card-image" id="image-1-3-1">
                        <h2 class="card-title">Membership</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        More information about the different levels of membership and how to apply.
                    </p>
                </div>
                <div>
                    <a href="membership.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="board.php">
                        <img class="card-image" id="image-1-3-2">
                        <h2 class="card-title">Board</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    MCFB's Board Officers are elected by Voting Members and meet seven times throughout each year.
                    </p>
                </div>
                <div>
                    <a href="board.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="contractors.php">
                        <img class="card-image" id="image-1-3-3">
                        <h2 class="card-title">Contractors</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB contracts for services related to the executive director/secretary and treasurer.
                    </p>
                </div>
                <div>
                    <a href="contractors.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="volunteers.php">
                        <img class="card-image" id="image-1-3-4">
                        <h2 class="card-title">Volunteers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB occasionally benefits from the time and expertise of volunteers.
                    </p>
                </div>
                <div>
                    <a href="volunteers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>