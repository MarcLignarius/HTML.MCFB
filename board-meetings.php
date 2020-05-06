<?php $page_title = "Board Meetings"; ?>
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
<div class="banner-container" id="board-meetings-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            MCFB Board meetings and annual meeting are normally held as per the schedule below. Notices, locations, and changes to this 
            schedule are provided through mailers and on the MCFB Facebook page. Voting and Supporting members are always welcome to attend 
            any of these meetings. Associate members, members of the public, and partner representatives should <a href="contact.php">Contact Us</a> 
            if you would like to attend a meeting.
        </p>
        <ul>
            <li>Board Meetings: 3rd Thursday @ 7:00PM @ 1101 NE Burnside, Gresham</li>
            <li>Annual Meeting: TBD</li>
            <li>Holiday Gathering: TBD</li>
        </ul>
        <table class="table table-bordered text-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">
                        Board Meeting
                    </th>
                    <th scope="col">
                        Annual Meeting
                    </th>
                    <th scope="col">
                        Holiday Gathering
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">January</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">February</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">March</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">April</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">May</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">June</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">July</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">August</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">September</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">October</th>
                    <td>X</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">November</th>
                    <td></td>
                    <td>X</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">December</th>
                    <td></td>
                    <td></td>
                    <td>X</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>