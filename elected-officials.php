<?php $page_title = "Elected Officials"; ?>
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
<div class="banner-container" id="elected-officials-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB engages elected officials on behalf of local farmers through in-person meetings, testimonies, letters, and phone calls. 
            MCFB may host meetings specifically to engage elected officials, may invite elected officials to a previously scheduled MCFB 
            meeting, and may attend town halls and other meetings hosted by elected officials. When possible, MCFB will inform MCFB members 
            about its engagement with elected officials through email, mailers, and the MCFB Facebook page.
        </p>
        <p>
            OFB also engages elected officials on behalf of farmers. OFB advocacy-related activities and positions can be accessed through 
            <a href="https://oregonfb.org/advocacy/">its webpage</a>.
        </p>    
        <p>
            <a href="https://www.govtrack.us/congress/members/OR#map">Govtrack.us</a> maintains a map of U.S Congressional Districts. The map 
            is useful in identifying representatives for specific areas of Multnomah County and the immediate surroundings.
        </p>
        <p>
            Multnomah County maintains an <a href="https://multco.us/elections/federal-and-state-elected-officials">elected officials 
            website</a> that identifies current elected officials at the local, state, and national level who represent those living in 
            Multnomah County.
        </p>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="representing-farmers.php"   class="btn btn-light">Back</a>
        <a href="index.php"   class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>