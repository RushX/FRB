<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

<script>
    const firebaseConfig = {
    apiKey: "AIzaSyDa31GNf8LSh-KIXXZskGl35ZE45eFFOLg",
    authDomain: "roamv-c5702.firebaseapp.com",
    projectId: "roamv-c5702",
    storageBucket: "roamv-c5702.appspot.com",
    messagingSenderId: "367918963007",
    appId: "1:367918963007:web:a65f86f8d505864ad55b8a",
    measurementId: "G-FPK7FYTPHG"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    // document.getElementById('logout').addEventListener('click', LogoutUser)

    let provider = new firebase.auth.GoogleAuthProvider()


    function showUserDetails() {
        firebase.auth().onAuthStateChanged(user => {
            if (user) {
                document.getElementById('user_name').innerHTML = user.displayName
                document.getElementById('user_email').innerHTML = user.email
            } else {
                window.location = ("<?php echo base_url()?>login")

            }
        })
    }

    function checkAuthState() {
        firebase.auth().onAuthStateChanged(user => {
            if (user) {
                // showUserDetails(user)
            } else {
                window.location = ("<?php echo base_url()?>login")

            }
        })
    }

    function logoutUser() {
        console.log('Logout Btn Call')
        firebase.auth().signOut().then(() => {}).catch(e => {
            console.log(e)
        })
    }
    checkAuthState()
</script>