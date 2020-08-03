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
    <link rel="stylesheet" href="../css/core.css">
    <link rel="stylesheet" href="css/panel.css">

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
        <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-block block text-center">
                            <div class="avatar"><img src="img/user.png" alt="User" class="img-fluid">
                            </div>
                            <div class="user-title"><h3 id="account-username" class="h5 font-weight-bold"></h3><span id="account-email"></span></div>
                            <input type="button" class="btn btn-red user-role" value="Logout" onclick="logout();"/>
                        </div>
                    </div>
                    <!-- Inline Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Change Username</strong></div>
                            <div class="block-body">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input id="username-new" type="text" placeholder="New Username" class="mr-sm-3 form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input id="username-new_confirm" type="text" placeholder="Confirm New Username" class="mr-sm-3 form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Change" class="btn btn-block btn-red" onclick="changeUsername()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inline Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Change Password</strong></div>
                            <div class="block-body">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input id="password-new" type="password" placeholder="New Password" class="mr-sm-3 form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input id="password-new_confirm" type="password" placeholder="Confirm New Password" class="mr-sm-3 form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Change" class="btn btn-block btn-red" onclick="changePass()">
                                    </div>
                                </div>
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
<script src="js/index.js"></script>

<!-- Individual JS -->
<script src="js/account.js"></script>

</body>
</html>