function copyInvite(){
    let copyText = document.getElementById("invite-code");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    document.execCommand("copy");

    alert("Copied the invite code: " + copyText.value);
}

function buildTable(){
    db.ref('group').once('value')
        .then(function (snap) {
            let invited_users = snap.val();

            var i = 1;
            for(let key in invited_users){
                let temp_user_uid = invited_users[key];

                db.ref('users/' + temp_user_uid).once('value')
                    .then(function (snapshot) {
                        let temp_user_username = snapshot.val().username;
                        let temp_user_admin = snapshot.val().admin;
                        document.getElementById("tbody-users").innerHTML += "<tr id='trow-" + temp_user_uid + "'> <th scope='row'>" + i + "</th> <td id='username-" + temp_user_uid + "'>" + temp_user_username + "</td> <td style='width: 25%'> <select id='role-" + temp_user_uid + "' name='role-" + temp_user_uid + "' class='form-control custom-select-sm'> <option value='admin'>Admin</option> <option value='guard'>Guard</option> </select> </td> <td style='width: 25%'> <select id='status-" + temp_user_uid + "' name='status-" + temp_user_uid + "' class='form-control custom-select-sm'> <option value='active'>Active</option> <option value='delete'>Delete</option> </select> </td> <td style='width: 15%'> <button id='btn-" + temp_user_uid + "' type='submit' class='btn btn-success' onclick='saveUser(this.id)'><i class='far fa-save'></i></button> </td> </tr>";
                        if(!temp_user_admin){
                            document.getElementById("role-" + temp_user_uid).value = 'guard';
                        }
                        i++;
                    });
            }
        });

}

function saveUser(btnId){
    let uid = btnId.substring(4);
    let role = document.getElementById("role-" + uid).value;
    let status = document.getElementById("status-" + uid).value;
    let username = document.getElementById("username-" + uid).innerText;

    if(status == "delete"){
        db.ref('group').once('value')
            .then(function (snapshot) {
                let invited_users = snapshot.val();
                invited_users.splice(invited_users.indexOf(uid),1);
                db.ref('group').set(invited_users)
                    .then(function(){
                        if(!alert("The user @" + username + " has been removed from your panel.")){
                            window.location.reload();
                        }
                    })
                    .catch(function(error){
                        alert(error.message);
                    });
            });
    }
    else {
        db.ref('users/' + uid + "/admin").set(role == "admin")
            .then(function () {
                if (!alert("The user @" + username + " has been updated to role " + role.toUpperCase() + ".")) {
                    window.location.reload();
                }
            })
            .catch(function (error) {
                alert(error.message);
            });
    }

}


// ON LOAD
auth.onAuthStateChanged(function(user){
    // Logged in
    if(user) {
        buildTable();
    }

    // Not logged in
    else {

    }
});