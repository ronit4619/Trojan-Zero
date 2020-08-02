function register(){
    let username = document.getElementById("formUsername").value;
    let email = document.getElementById("formEmail").value;
    let password = document.getElementById("formPassword").value;
    let passwordConfirm = document.getElementById("formPassword_confirm").value;

    if(password == passwordConfirm){
        auth.createUserWithEmailAndPassword(email, password)
            .then(function(response){
                if(response.uid){
                    let user = {
                        uid: response.uid,
                        username: username,
                        email: email,
                    }
                    writeNewUserData(user);
                }
            })
            .catch(function(error){
                alert(error.message);
            });
    }
    else {
        error("The passwords did not match.");
    }
}


function writeNewUserData(user){
    db.ref('users/' + user.uid).set(user).catch(error => {
        console.log(error.message)
    });
    console.log("Created new user data for UID: " + user.uid);
}