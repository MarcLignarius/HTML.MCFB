<?php $page_title = "Membership"; ?>
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
<div class="banner-container" id="membership-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            There are three levels of membership:
        </p>
        <ol class="mb-4">
            <li>Voting members</li>
            <li>Supporting members</li>
            <li>Associate members</li>
        </ol>
        <h5>Voting Members</h5>
        <p>
            Farmers and ranchers with $2,500 or more per year in gross farming or ranching income
            qualify as voting members. Voting membership costs $125 per year.
        </p>
        <p>Voting members may (but are not required to):</p>
        <ul class="mb-4">
            <li>Attend all county board meetings, annual meetings, events, and outings</li>
            <li>Vote annually at the annual county meeting for Board Directors and officers</li>
            <li>Attend the annual state and national conventions</li>
            <li>Run for county and state boards and officer positions</li>
            <li>Represent the county as a voting delegate at the annual state convention</li>
            <li>Receive all <a href="https://oregonfb.org/member-discounts-2/">OFB benefits</a></li>
        </ul>
        <h5>Supporting Members</h5>
        <p>
            Farmers and ranchers with less than $2,500 per year in gross farming or ranching
            income and non-farmers qualify as supporting members. Supporting membership costs $125
            per year.
        </p>
        <p>Supporting members may (but are not required to):</p>
        <ul class="mb-4">
            <li>Attend all county board meetings, annual meetings, events, and outings</li>
            <li>Attend the annual state and national conventions</li>
            <li>Receive all <a href="https://oregonfb.org/member-discounts-2/">OFB benefits</a></li>
        </ul>
        <p>
            Voting and supporting membership can be attained by completing a hard copy membership packet, by completing the
            <a href="https://oregonfb.org/join/" target="blank">OFB's online application</a> or by signing up for OFB
            through <a href="https://www.countryfinancial.com/">Country Financial</a>. For more information, 
            <a href="contact.php">Contact Us</a>.
        </p>
        <h5>Associate Members</h5>
        <p>
            Through a <a href="https://oregonfb.org/about/ofb-country-financial/">special arrangement</a> with 
            <a href="https://www.countryfinancial.com/">Country Financial</a>, all non-farmer/non-rancher Country 
            Financial customers are automatically OFB associate members. Associate members living in Multnomah County become MCFB associate 
            members. Only Country Financial customers can be associate members. Associate members support the MCFB and OFB financially with 
            annual dues and may attend meetings, events, and outings with approval from the MCFB Board President or Executive Director.
        </p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="join-us.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>