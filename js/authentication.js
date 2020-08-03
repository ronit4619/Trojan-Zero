function register(){
    let username = document.getElementById("formUsername").value;
    let email = document.getElementById("formEmail").value;
    let password = document.getElementById("formPassword").value;
    let passwordConfirm = document.getElementById("formPassword_confirm").value;

    if(password == passwordConfirm){
        auth.createUserWithEmailAndPassword(email, password)
            .then(function(){
                let user = {
                    uid: auth.currentUser.uid,
                    username: username,
                    email: email,
                    admin: false,
                    invited_users: ["jZoZdFw5uRU5ThZD10V1DMcDWTD3"]
                }
                writeNewUserData(user);
                window.location = "panel/";
            })
            .catch(function(error){
                alert(error.message);
            });
    }
    else {
        errorAlert("The passwords did not match.");
    }
}

function login(){
    let email = document.getElementById("formEmail").value;
    let password = document.getElementById("formPassword").value;

    auth.signInWithEmailAndPassword(email, password)
        .catch(function(err){
            errorAlert(err.message);
        });
}

function logout(){
    auth.signOut()
        .then(function(){
            window.location = "../login.php";
        }).catch(function(err){
            errorAlert(err.message);
    })
}

auth.onAuthStateChanged(function(user){
    // Logged in
    if(user) {
        // Current user is trying to access login page --> Redirect
        if (window.location.pathname == "/trojan-zero/login.php") {
            window.location = "panel/";
        }
    }

    // Not logged in
    else {
        // Anonymous trying to access account page --> Redirect
        if(window.location.pathname.includes("panel")){
            window.location = "../login.php";
        }
   }
});

function writeNewUserData(user){
    db.ref('users/' + user.uid).set(user).catch(error => {
        console.log(error.message);
    });
    console.log("Created new user data for UID: " + user.uid);
}