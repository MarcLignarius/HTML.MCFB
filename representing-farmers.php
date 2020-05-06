<?php $page_title = "Representing Farmers"; ?>
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
<div class="banner-container" id="representing-farmers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        The legal requirements that affect farming can make a difficult business even more difficult. Laws, regulations, policies, and 
        government programs are constantly changing and it’s nearly impossible for individual farmers to track, respond to, learn, comply
        with, and voice concern about the changes and requirements. To address this, MCFB serves as an active voice for local farmers at 
        the local, state, and national levels. When government laws, regulations, policies, and programs are proposed anew or to be 
        changed, MCFB strives to identify, understand, disseminate, and engage related officials in a manner that benefits local farmers 
        and the communities.
    </p>
</div>
<div class="container-fluid">
    <div class="grid-container-3">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="elected-officials.php">
                        <img class="card-image" id="image-2-4-1">
                        <h2 class="card-title">Elected Officials</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB engages elected officials on behalf of local farmers through in-person meetings, testimonies, letters, and phone calls.
                    </p>
                </div>
                <div>
                    <a href="elected-officials.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="laws-and-regulations.php">
                        <img class="card-image" id="image-2-4-2">
                        <h2 class="card-title">Laws & Regulations</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB attempts to identify and become familiar with laws and regulations that are relevant to our local farmers.
                    </p>
                </div>
                <div>
                    <a href="laws-and-regulations.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="voter-education.php">
                        <img class="card-image" id="image-2-4-3">
                        <h2 class="card-title">Voter Education</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB sponsors specific events or organizations whose purpose is to inform local voters about agriculture-related issues.
                    </p>
                </div>
                <div>
                    <a href="voter-education.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="advisory-councils-and-committees.php">
                        <img class="card-image" id="image-2-4-4">
                        <h2 class="card-title">Advisory Councils & Committees</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB Board Members and voting members can participate in several state-level OFB issue advisory councils and committees.
                    </p>
                </div>
                <div>
                    <a href="advisory-councils-and-committees.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="organizational-support.php">
                        <img class="card-image" id="image-2-4-5">
                        <h2 class="card-title">Organizational Support</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    MCFB provides financial support to organizations that serve farmers specifically and/or the greater good of the community.
                    </p>
                </div>
                <div>
                    <a href="organizational-support.php" class="btn btn-light">Learn More</a>
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
