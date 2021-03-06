<!DOCTYPE html>
<html>
<head>
    <!-- SEO and Metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - PANEL - trojanZERO</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/panel.css">
    <link rel="stylesheet" href="../css/core.css">

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-database.js"></script>

    <!-- Core JS -->
    <script src="../js/core.js"></script>
    <script src="../js/authentication.js"></script>

    <!-- Individual CSS and JS -->
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
<!-- Insert NAVBAR template -->
<?php
readfile("../nav.html");
?>

<div class="d-flex align-items-stretch">
    <!-- Insert SIDEBAR template -->
    <?php
    readfile("sidebar.html");
    ?>
    <div class="page-content">
        <section class="margin-bottom-sm">
            <div class="container-fluid">
                <div class="row d-flex align-items-stretch">
                    <div class="col-lg-4">
                        <div class="block">
                            <div class="title"><strong><i class="fas fa-receipt"></i> Subscription</strong></div>
                            <div class="text">
                                <h1 class="d-block text-light-red" style="font-size: 102px">$80</h1>
                                <span class="d-block"><strong>Plan:</strong> City Coverage</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="checklist-block block">
                            <div class="title"><strong><i class="fas fa-sticky-note"></i> Latest Patch Notes - v1.0.1</strong></div>
                            <div class="checklist">
                                <div class="item d-flex align-items-center">
                                    <input type="checkbox" id="input-1" name="input-1" class="checkbox-template"/>
                                    <label for="input-1">Added new analytics modules.</label>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <input type="checkbox" id="input-2" name="input-2" checked class="checkbox-template"/>
                                    <label for="input-2">Removed errors in automatic camera linking system.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong><i class="fas fa-video"></i> Cameras</strong></div>
                            <div class="text-center">
                                <video id="cam-footage" width="375" autoplay="autoplay" loop muted>
                                    <source src="vid/cam3.mp4" type="video/mp4" />
                                </video>
                                <p class="dashtext-3 font-italic" style="font-size: 12px;">Camera 3</p>
                            </div>
                            <button class="btn btn-block btn-red" onclick="window.location = 'cameras.php'">Monitor live cameras</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="line-chart block chart">
                            <div class="title"><strong><i class="far fa-chart-bar"></i> Analytics</strong></div>
                            <canvas id="homeAnalytics"></canvas>
                            <button class="margin-top-sm btn btn-block btn-red" onclick="window.location = 'analytics.php'">View analytics</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong><i class="fas fa-users"></i> Users</strong></div>
                            <p style="font-size: 32px;">Invite code:</p>
                            <div class="form-inline margin-bottom-sm">
                                <div class="form-group">
                                    <input id="invite-code" type="text" value="jZoZdFw5uRU5ThZD10V1DMcDWTD3" class="form-control mr-sm-3 custom-select-lg"readonly>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Copy" class="btn btn-block btn-purple btn-lg" onclick="copyInvite();">
                                </div>
                            </div>
                            <button class="btn btn-block btn-red" onclick="window.location = 'users.php'">Manage users</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-block block">
                            <div class="title"><strong><i class="fas fa-cog"></i> My Account</strong></div>
                            <div class="avatar"><img src="img/user.png" alt="User" class="img-fluid"></div>
                            <div class="user-title text-center"><h3 id="account-username" class="h5 font-weight-bold text-purple"></h3><span id="account-email"></span></div>
                            <button class="mt-3 btn btn-block btn-red" onclick="window.location = 'account.php'">Edit account</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Framework JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>

<script src="js/index.js"></script>
<script src="js/account.js"></script>

</body>
</html>