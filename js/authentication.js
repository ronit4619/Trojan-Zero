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
                }
                writeNewUserData(user);
            })
            .catch(function(error){
                alert(error.message);
            });
    }
    else {
        error("The passwords did not match.");
    }
}

function login(){
    let email = document.getElementById("formEmail").value;
    let password = document.getElementById("formPassword").value;

    auth.signInWithEmailAndPassword(email, password)
        .catch(function(error){
            alert(error.message);
        });
}

auth.onAuthStateChanged(function(user){
    // Logged in
    if(user) {
        // Current user is trying to access login page --> Redirect
        if (window.location.pathname == "/trojan-zero/login.php") {
            window.location = "index.php";
        }

        updateCurrentUserData(user);
    }

    // Not logged in
    else {
        // Anonymous trying to access account page --> Redirect
        if(window.location.pathname == "/trojan-zero/account.php"){
            window.location = "login.php";
        }
   }
});

function writeNewUserData(user){
    db.ref('users/' + user.uid).set(user).catch(error => {
        console.log(error.message);
    });
    console.log("Created new user data for UID: " + user.uid);
}

// Change global user object to logged in user from DB
function updateCurrentUserData(user){
    db.ref('users/' + user.uid).once('value')
        .then(function (snapshot) {
            currentUser = {
                uid: user.uid,
                username: snapshot.val().username,
                email: snapshot.val().email
            }
        })
}