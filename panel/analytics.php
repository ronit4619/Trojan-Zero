<!DOCTYPE html>
<html>
<head>
    <!-- SEO and Metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - MUCCI</title>

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
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="line-chart block chart">
                            <div class="title"><strong><i class="fas fa-bell"></i> Detections (Current Year)</strong></div>
                            <canvas id="lineChartCustom1"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="lin-chart block chart">
                            <div class="title"><strong><i class="far fa-hand-pointer"></i> User Data</strong></div>
                            <div class="line-chart chart margin-bottom-sm">
                                <canvas id="lineChartCustom3"></canvas>
                            </div>
                            <div class="bar-chart chart">
                                <canvas id="barChartCustom2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pie-chart chart block">
                            <div class="title"><strong><i class="fas fa-camera"></i> Camera Usage</strong></div>
                            <div class="pie-chart chart margin-bottom-sm">
                                <canvas id="pieChartCustom1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong><i class="fas fa-history"></i> Incident Logs</strong></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Incident</th>
                                        <th>Date</th>
                                        <th>Resolved</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Unverified threat</td>
                                        <td>3 days ago</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Infiltration</td>
                                        <td>1 month ago</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Multiple detections</td>
                                        <td>2 years ago</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Unverified threat</td>
                                        <td>2 years ago</td>
                                        <td>Yes</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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

<!-- Individual JS -->
<script src="js/analytics.js"></script>


</body>
</html>