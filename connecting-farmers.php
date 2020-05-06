<?php $page_title = "Connecting Farmers"; ?>
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
<div class="banner-container" id="connecting-farmers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        Farmers enjoy talking to other farmers. They share stories and ideas, and sometimes even commiserate about problems. In today’s 
        busy world, however, it’s difficult for farmers to connect with one another. There’s not enough time in the day to get the work 
        done, not to mention sit down for coffee with a fellow farmer. At the same time, there are an over-whelming number of ways to 
        communicate with today’s technology. Given this, through our social outings, celebrations, newsletters and emails, and social 
        media, MCFB strives to serve as a farmer-to-farmer uniter and communication pathway.
    </p>
</div>
<div class="container-fluid">
    <div class="grid-container-4">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="social-outings.php">
                        <img class="card-image" id="image-2-3-1">
                        <h2 class="card-title">Social Outings</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB participates in and sometimes organizes and hosts member outings every year.
                    </p>
                </div>
                <div>
                    <a href="social-outings.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="celebrations.php">
                        <img class="card-image" id="image-2-3-2">
                        <h2 class="card-title">Celebrations</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB hosts one major celebration, the end of year holiday party, each year in December.
                    </p>
                </div>
                <div>
                    <a href="celebrations.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="newsletters-and-mailers.php">
                        <img class="card-image" id="image-2-3-3">
                        <h2 class="card-title">Newsletters & Mailers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB uses periodic newsletters and mailers to keep its members updated.
                    </p>
                </div>
                <div>
                    <a href="newsletters.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="social-media.php">
                        <img class="card-image" id="image-2-3-4">
                        <h2 class="card-title">Social Media</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB uses social media to communicate with members and the general public.
                    </p>
                </div>
                <div>
                    <a href="social-media.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="our-approach.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>