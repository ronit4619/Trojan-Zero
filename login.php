<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SEO and Metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logo-sm.png">
    <title>Login - trojanZERO</title>

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
    <script src="js/authentication.js"></script>

    <!-- Individual CSS and JS -->
    <link rel="stylesheet" href="css/login.css">

</head>

<!-- Start of BODY -->
<body>

<?php
readfile("nav.html");
?>

    <div class="form-signin">
        <h3 class="mb-3 font-weight-bold text-white text-center">Get back to monitoring!</h3>

        <div class="form-label-group">
            <input type="email" name="formEmail" id="formEmail" class="form-control" placeholder="Email" required autofocus/>
        </div>

        <div class="form-label-group">
            <input type="password" name="formPassword" id="formPassword" class="form-control" placeholder="Password" required />
        </div>

        <button class="btn btn-lg btn-block btn-red mb-3" onclick="login();">LOGIN</button>
        <p class="mt-3 mb-3 text-center text-white">Don't have an account? <a href="register.php">Register</a></p>
    </div>

    <!-- Framework JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>