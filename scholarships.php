<?php $page_title = "Scholarships"; ?>
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
<div class="banner-container" id="scholarships-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>MCFB contributes to various scholarships related to agricultural education throughout each year. Some of these contributions are 
            recurring events while others are one-time occurrences. Scholarship opportunities are noticed through our website, Facebook page, 
            mailers, and email as they become available.
        </p>
        <p>
            Scholarships that MCFB members may qualify for include, but are not limited to:</p>
        <ul>
            <li>Pacific Building Systems National Ag Day Scholarships (students from OFB member families only)</li>
            <li>OFB Memorial Scholarships (OFB voting member children or grandchildren only)</li>
            <li>Associate Member Scholarship (OFB associate members only)</li>
        </ul>
        <p>For more information on the above scholarships, see: <a href="https://oregonfb.org/scholarships/">https://oregonfb.org/scholarships/</a>.</p>
        <p>Other scholarships that MCFB has contributed to include:</p>
        <ul>
            <li><a href="https://agsci.oregonstate.edu/eoarc-union/summer-ag-institute">Oregon Agricultural Education Foundation Summer Agriculture Institute</a> (Multnomah County and Clackamas County teachers only)</li>
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