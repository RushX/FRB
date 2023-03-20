<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
</head>

<body>

  <div class="login">
    <div id="login">
      <div class="head">Login</div>
      <input type="email" class="input" placeholder="Email" id="email">
      <input type="password" class="input" placeholder="Password" id="password">
      <span class="autherr" id="error"></span>
      <div class="sp" style="display:flex;width:100%;justify-content:space-between">

      <a href="<?php echo base_url()?>signup" class="fpwd">Signup</a>
        <a href="<?php echo base_url()?>forgot" id="fpwd">Forgot password?</a>
      </div>
      <button type="submit" id="loginbtn">Login</button>
      <button class="ggl" id="loginggl">
        <img src="<?php echo base_url(); ?>/assets/images/google.svg" alt="" srcset="">
        <span>Continue with google<span>
      </button>
    </div>

  </div>
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

    // document.getElementById('dashboard').style.display = "none"

    document.getElementById('loginggl').addEventListener('click', GoogleLogin)
    document.getElementById('loginbtn').addEventListener('click', EmailLogin)
    // document.getElementById('logout').addEventListener('click', LogoutUser)

    let provider = new firebase.auth.GoogleAuthProvider()

    function EmailLogin() {
      var email = document.getElementById('email').value
      var password = document.getElementById('password').value
      console.log(email, password)
      firebase.auth().signInWithEmailAndPassword(email, password)
        .then((res) => {
        delete_cookie('oauth')
          document.cookie = `oauth=${JSON.stringify(res['credential'])}`
          // console.log(res['credential'])
          window.location = ("<?php echo base_url() ?>dashboard")
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          document.getElementById("error").innerHTML = errorMessage;
        });
    }
    var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
    function GoogleLogin() {
      firebase.auth().signInWithPopup(provider).then(res => {
        delete_cookie('oauth')
        document.cookie = `oauth=${JSON.stringify(res['credential'])}`

        window.location = ("<?php echo base_url() ?>dashboard")
      }).catch(e => {
        console.log(e)
      })
    }

    // function showUserDetails(user) {
    //   document.getElementById('userDetails').innerHTML = `
    //   <p>Name: ${user.displayName}</p>
    //   <p>Email: ${user.email}</p>
    //   `
    // }

    function checkAuthState() {
      firebase.auth().onAuthStateChanged(user => {
        if (user) {
          window.location = ("<?php echo base_url() ?>dashboard")
        } else {}
      })
    }

    // function LogoutUser() {
    //   console.log('Logout Btn Call')
    //   firebase.auth().signOut().then(() => {
    //   }).catch(e => {
    //     console.log(e)
    //   })
    // }
    checkAuthState()
  </script>
</body>

</html>