<!DOCTYPE html>
<html>

<head>
    <!-- SEO and Metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>trojanZERO</title>

    <!-- Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/core.css">

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-database.js"></script>

    <!-- Core JS -->
    <script src="js/core.js"></script>

    <!-- Individual CSS and JS -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <!-- Insert NAVBAR template -->
    <?php
    readfile("nav.html");
    ?>

    <div id="section-header">
        <div class="container">
            <div class="main">
                <h1 class="font-weight-bold mb-4">The Hero Your City Needs, and Deserves.</h1>
                <button class="btn btn-block btn-lg btn-red-outline" onclick="window.location = 'login.php'">Login</button>
                <button class="btn btn-block btn-lg btn-red-outline" onclick="window.location = 'register.php'">Register</button>
            </div>
        </div>
    </div>

    <div id="section-about">
        <div class="container">
            <h1>About Us</h1><br>
            <p>TrojanZERO is a thermal surveillance-based security system used to prevent city-wide infiltration during times of war and/or invasion. The thermal camera system can detect intruders within the city to keep citizens safe. Positioned throughout
                the city, these cameras will be able to pick up the heat signatures of individuals within packages and modes of transportation. To ensure the system is inaccessible by enemies, administrators of the city have to personally invite members of
                their security team and give them access code to receive alerts. With the Infiltration Log, members of the city’s security council will be able to keep track of the location and times where they are most susceptible to infiltration.
            </p>
        </div>
    </div>

    <!-- Insert FOOTER template -->
    <?php
    readfile("footer.html");
    ?>

    <!-- Framework JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>

</body>

</html>
