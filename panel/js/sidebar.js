let path = window.location.pathname;
let file = path.substring(19, path.length - 4);

switch(file){
    case "cameras":
        document.getElementById("sidebar-cameras").classList.add("active");
        break;
    case "users":
        document.getElementById("sidebar-users").classList.add("active");
        break;
    case "analytics":
        document.getElementById("sidebar-analytics").classList.add("active");
        break;
    case "account":
        document.getElementById("sidebar-account").classList.add("active");
        break;
    default:
        document.getElementById("sidebar-home").classList.add("active");
        break;
}

auth.onAuthStateChanged(function(user){
    // Logged in
    if(user) {
        db.ref('users/' + user.uid).once('value')
            .then(function (snapshot) {
                document.getElementById("panel-username").innerText = snapshot.val().username;
                let admin = snapshot.val().admin;
                if(!admin){
                    document.getElementById("panel-role").innerText = "Guard";
                    document.getElementById("sidebar-users").style.display = "none";
                    document.getElementById("sidebar-analytics").style.display = "none";
                }
            });
    }

    // Not logged in
    else {

    }
});