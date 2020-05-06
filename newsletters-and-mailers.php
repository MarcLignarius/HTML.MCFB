<?php $page_title = "Newsletters and Mailers"; ?>
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
<div class="banner-container" id="newsletter-and-mailers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB uses periodic newsletters and mailers to keep its members up to date regarding meetings, events, outings,
            and other networking opportunities and newsworthy issues. Newsletters and mailers are sent to Voting and Supporting
            members by email and postal service. Associate members can opt-in to receive newsletters and mailers by
            <a href="contact.php">Contacting Us</a>. Previous newsletters and mailers are archived below.
        </p>
        <ul>
            <li>
                <a href="../files/2020-01-MCFB Mailer-Pesticide Training.png" download>
                    2020-01 MCFB Mailer-Pesticide Training
                </a>
            </li>
            <li>
                <a href="../files/2019-11-MCFB Mailer-Holiday Dinner.pdf" download>
                    2019-11 MCFB Mailer-Holiday Dinner
                </a>
            </li>
            <li>
                <a href="../files/2019-11-MCFB Mailer-Annual Meeting2.pdf" download>
                    2019-11 MCFB Mailer-Annual Meeting
                </a>
            </li>
            <li>
                <a href="../files/2018-11-MCFB Mailer-Annual Meeting.pdf" download>
                    2018-11 MCFB Mailer-Annual Meeting
                </a>
            </li>
            <li>
                <a href="../files/2018-01-MCFB Newsletter.pdf" download>
                    2018-01 MCFB Newsletter
                </a>
            </li>
            <li>
                <a href="../files/2016-03-MCFB Newsletter.pdf" download>
                    2016-03 MCFB Newsletter
                </a>
            </li>
            <li>
                <a href="../files/2015-02-MCFB Newsletter.pdf" download>
                    2015-02 MCFB Newsletter
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="connecting-farmers.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>