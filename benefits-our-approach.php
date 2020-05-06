<?php $page_title = "Our Approach"; ?>
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
<div class="banner-container" id="our-approach-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <div class="intro-text">
        <p class="text-left">
            MCFB's approach to fulfilling its mission and vision is accomplished through five key strategies: 
        </p>
        <ol>
            <li><strong>Asking Farmers</strong> for their input on issues facing their communities, neighbors, and other individuals.</li>
            <li><strong>Assisting Farmers</strong> with issues they are facing, either on-farm or off of the farm.</li>
            <li><strong>Connecting Farmers</strong> with each other through events and communications so they benefits from being part of a network of local farmers.</li>
            <li><strong>Representing Farmers</strong> with local, state, and national officials and representatives so their voices are heard and issues addressed in laws, regulations, policies, practices, and plans.</li>
            <li><strong>Sharing Knowledge with Farmers</strong> so they have access to training and certifications they need to keep farming alive and healthy.</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="grid-container-3">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="asking-farmers.php">
                        <img class="card-image image-10">
                        <h2 class="card-title">Asking Farmers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Through the Ask a Farmer program, MCFB connects people with questions about farming with real farmers.
                    </p>
                </div>
                <div>
                    <a href="asking-farmers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="assisting-farmers.php">
                        <img class="card-image image-11">
                        <h2 class="card-title">Assisting Farmers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB undertakes projects, activities, and outreach to assist local farmers and communities.
                    </p>
                </div>
                <div>
                    <a href="assisting-farmers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="connecting-farmers.php">
                        <img class="card-image image-12">
                        <h2 class="card-title">Connecting Farmers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB strives to serve as a farmer-to-farmer uniter and communication pathway.
                    </p>
                </div>
                <div>
                    <a href="connecting-farmers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="representing-farmers.php">
                        <img class="card-image image-13">
                        <h2 class="card-title">Representing Farmers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB serves as an active voice for local farmers at the local, state, and national levels.
                    </p>
                </div>
                <div>
                    <a href="representing-farmers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="sharing-knowledge-with-farmers.php">
                        <img class="card-image image-19">
                        <h2 class="card-title">Sharing Knowledge With Farmers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                     MCFB supports students though scholarships, send farmers to conferences, sponsor learning events, and host workshops.
                    </p>
                </div>
                <div>
                    <a href="sharing-knowledge-with-farmers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="benefits.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>