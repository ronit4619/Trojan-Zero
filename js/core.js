var firebaseConfig = {
    apiKey: "AIzaSyAoy8MhhvkoyUvBc0lxtGXiumhPsxz6JpQ",
    authDomain: "trojanzero-3ad7d.firebaseapp.com",
    databaseURL: "https://trojanzero-3ad7d.firebaseio.com",
    projectId: "trojanzero-3ad7d",
    storageBucket: "trojanzero-3ad7d.appspot.com",
    messagingSenderId: "451241857154",
    appId: "1:451241857154:web:4288fb38e6a0bb7adca49b",
    measurementId: "G-ZMRKBNWPYT"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

const db = firebase.database();
const auth = firebase.auth();

function errorAlert(message){
    alert("Error: " + message);
}