<?php $page_title = "Sharing Knowledge With Farmers"; ?>
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
<div class="banner-container" id="sharing-knowledge-with-farmers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        Farmers need to know a lot of things to be successful. For some farmers, much of the required knowledge is passed on from one 
        generation to the next. For other farmers, they learn on the job. But for both types of farmers and everyone in between, there 
        are constantly new laws, regulations, techniques, and technologies that must be understood and applied. MCFB works with partners 
        to identify opportunities to assist local farmers and community members in staying up to date on relevant legal, regulatory, and 
        technical issues. To do so, we support students though scholarships, send farmers to conferences, sponsor learning events, and 
        host workshops.
    </p>
</div>
<div class="container-fluid">
    <div class="grid-container-3">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="scholarships.php">
                        <img class="card-image" id="image-2-5-1">
                        <h2 class="card-title">Scholarships</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB contributes to various scholarships related to agricultural education throughout each year.
                    </p>
                </div>
                <div>
                    <a href="scholarships.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="conferences.php">
                        <img class="card-image" id="image-2-5-2">
                        <h2 class="card-title">Conferences</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB provides sponsorships to enable MCFB members to attend agriculture-related conferences.
                    </p>
                </div>
                <div>
                    <a href="conferences.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="learning-events.php">
                        <img class="card-image" id="image-2-5-3">
                        <h2 class="card-title">Learning Events</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB sponsors initiatives to increase local community members’ exposure to agricultural issues and educational 
                        opportunities.
                    </p>
                </div>
                <div>
                    <a href="learning-events.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="workshops.php">
                        <img class="card-image" id="image-2-5-4">
                        <h2 class="card-title">Workshops</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB helps local farmers achieve necessary certifications and licenses and remain compliant with laws and 
                        regulations.
                    </p>
                </div>
                <div>
                    <a href="workshops.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="financial-support.php">
                        <img class="card-image" id="image-2-5-5">
                        <h2 class="card-title">Financial Support</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB provides financial support to organizations that teach and train future and current farmers. 
                    </p>
                </div>
                <div>
                    <a href="financial-support.php" class="btn btn-light">Learn More</a>
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