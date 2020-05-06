<?php $page_title = "Financial Support"; ?>
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
<div class="banner-container" id="financial-support-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB provides financial support to organizations that teach and train future and current farmers. A list of currently supported 
            organizations is below. MCFB entertains requests for organizational support on an on-going basis. If you would like to request 
            support, please <a href="contact.php">Contact Us</a>.
        </p>
        <ul>
            <li><a href="https://oregonfb.org/programs/oregon-agriculture-educational-foundation-oaef/">Oregon Agricultural Education Foundation</a></li>
            <li><a href="http://realoregon.net/">REAL Oregon</a></li>
            <li><a href="http://sandyffa.theaet.com/aethome.aspx?ID=30094">Sandy FFA</a></li>
        </ul>
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