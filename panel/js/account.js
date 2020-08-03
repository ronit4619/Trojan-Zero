auth.onAuthStateChanged(function(user){
    // Logged in
    if(user) {
        db.ref('users/' + user.uid).once('value')
            .then(function (snapshot) {
                document.getElementById("account-username").innerText = snapshot.val().username;
                document.getElementById("account-email").innerText = snapshot.val().email;
            });
    }

    // Not logged in
    else {

    }
});

function changePass(){
    let newPass = document.getElementById("password-new").value;
    let newPassConfirm = document.getElementById("password-new_confirm").value;

    if(newPass == newPassConfirm){
        auth.currentUser.updatePassword(newPass)
            .then(function() {
                alert("Your password has been changed.");
            }).catch(function(error){
                alert(error.message);
        });
    }
    else {
        errorAlert("The new passwords did not match.");
    }
}

function changeUsername(){
    let newUsername = document.getElementById("username-new").value;
    let newUsernameConfirm = document.getElementById("username-new_confirm").value;

    if(newUsername == newUsernameConfirm){
        let user = auth.currentUser;
        db.ref('users/' + user.uid + "/username").set(newUsername)
            .then(function(){
                if(!alert("Your username has been changed.")){
                    window.location.reload();
                }
            })
            .catch(function(error){
               alert(error.message);
            });
    }
    else {
        errorAlert("The new passwords did not match.");
    }
}