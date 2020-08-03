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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
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

    <section id="header">
        <div class="container">
            <div class="main">
                <h1 class="font-weight-bold mb-4 animate__animated animate__pulse animate__delay-1s">The Hero Your City Needs, and Deserves.</h1>
                <button class="btn btn-block btn-lg btn-red-outline" onclick="window.location = 'login.php'">Login</button>
                <button class="btn btn-block btn-lg btn-red-outline" onclick="window.location = 'register.php'">Register</button>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 about-img">
                </div>
                <div class="col-lg-6 py-5 px-5">
                    <img src="img/logo.png" style="max-height: 75px;">
                    <p class="mt-2 wow animate__animated animate__fadeIn">trojanZERO is a thermal surveillance-based security system used to prevent city-wide infiltration during times of war and/or invasion. The thermal camera system can detect intruders within the city to keep citizens safe. Positioned throughout
                        the city, these cameras will be able to pick up the heat signatures of individuals within packages and modes of transportation. To ensure the system is inaccessible by enemies, administrators of the city have to personally invite members of
                        their security team and give them an invite code to receive alerts. With the Incident Log, members of the city’s security council will be able to keep track of the location and times where they are most susceptible to infiltration.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="team" class="text-center py-5">
        <div class="container">
            <h1 class="font-weight-bold text-white mb-4"><i class="fas fa-users"></i> Our Team</h1>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member mx-auto mb-5 mb-lg-0 wow animate__animated animate__bounceIn animate__delay-1s">
                        <img class="img-fluid rounded-circle mb-3" src="img/imesh.jpg" alt="">
                        <h5>Imesh Nimsitha</h5>
                        <h6>- CEO -</h6>
                        <p class="font-weight-light mb-0">Establishing the thermal camera based company in 1177 B.C., he has helped countless towns and civilizations stop intruders from entering and attacking from within.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member mx-auto mb-5 mb-lg-0 wow animate__animated animate__bounceIn animate__delay-1s">
                        <img class="img-fluid rounded-circle mb-3" src="img/yash.jpg" alt="">
                        <h5>Yash Patel</h5>
                        <h6>- Manufacturing Manager -</h6>
                        <p class="font-weight-light mb-0">Being in charge of all manufacturing of the thermal surveillance cameras, his innovative skills in spyware have greatly progressed the functionality of the thermal cameras.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member mx-auto mb-5 mb-lg-0 wow animate__animated animate__bounceIn animate__delay-1s">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                        <h5>Arshvir Chaudary</h5>
                        <h6>- Installation Manager -</h6>
                        <p class="font-weight-light mb-0">Responsible for all installations of trojanZERO Thermal Camera Systems, he decides on the best ways to implement the thermal surveillance system in each town and city.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member mx-auto mb-5 mb-lg-0 wow animate__animated animate__bounceIn animate__delay-1s">
                        <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                        <h5>Ronit Ahuja</h5>
                        <h6>- Director of Finance -</h6>
                        <p class="font-weight-light mb-0">Managing every financial aspect of the company. he collects all payments and handles future investment to set trojanZERO up for continued future success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 wow animate__animated animate__fadeInUp">
                        <div class="card-body">
                            <h5 class="card-title text-black text-uppercase text-center">Basic</h5>
                            <h6 class="card-price text-red text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5 Entry Thermal Cameras</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Recognition Software</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Advanced Analytics</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Increased Range</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Installation Costs</li>
                            </ul>
                            <button class="btn btn-block btn-red text-uppercase mb-2">ORDER</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="card-body">
                            <h5 class="card-title text-black text-uppercase text-center">Sixth Sense</h5>
                            <h6 class="card-price text-red text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>10 Advanced Thermal Cameras</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Recognition Software</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Advanced Analytics</li>
                                <li><span class="fa-li"><i class="fas fa-times"></i></span>Increased Range</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Installation Costs</li>
                            </ul>
                            <button class="btn btn-block btn-red text-uppercase mb-2">ORDER</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 wow animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="card-body">
                            <h5 class="card-title text-black text-uppercase text-center">City Coverage</h5>
                            <h6 class="card-price text-red text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>20 Pro Thermal Cameras</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Recognition Software</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Advanced Analytics</li>
                                <li><span class="fa-li"><i class="fas fa-times"></i></span>Increased Range</li>
                                <li><span class="fa-li"><i class="fas fa-times"></i></span>Free Installation Costs</li>
                            </ul>
                            <button class="btn btn-block btn-red text-uppercase mb-2">ORDER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insert FOOTER template -->
    <?php
    readfile("footer.html");
    ?>

    <!-- Framework JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script src="js/index.js"></script>

</body>

</html>
