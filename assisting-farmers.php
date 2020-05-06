<?php $page_title = "Assisting Farmers"; ?>
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
<div class="banner-container" id="assisting-farmers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            Farmers are resourceful and creative people, but sometimes they would like assistance solving problems or addressing issues 
            on their land. While there are many local, state, and federal entities that assist farmers in a variety of ways, many farmers 
            would prefer to engage with a local farm group, such as MCFB, to help them solve problems. Given this, MCFB undertakes projects, 
            activities, and outreach to assist local farmers and communities.
        </p>
        <p class="font-weight-bold">
            Recent efforts to assist our farmers and local communities include:
        </p>
        <ul>
            <li>Financial contributions for legal aid to defend a farmer against administrative actions.</li>
            <li>Research into the Portland Bureau of Environmental Services Water Submeter Program.</li>
            <li>Advice regarding farm equipment export for developing countries.</li>
            <li>Advice and representation regarding wetland mitigation banking.</li>
            <li>Answers to questions about agricultural conservation easements.</li>
        </ul>
        <p>
            If you are a local farmer and would like MCFB assistance with an issue, problem, or concern, <a href="contact.php">Contact Us</a>.
        </p>
    </div>
    <div class="container-fluid">
        <p class="text-center">
            <a href="our-approach.php" class="btn btn-light">Back</a>
            <a href="index.php" class="btn btn-light">Home</a>
        </p>
    </div>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>