<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Firebase Auth: Google - TechFerment</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<style>
		.head {
			position: absolute;
			width: 88px;
			height: 42px;
			left: 548px;
			top: 238px;

			/* heading 34 bold */

			font-family: 'Lato';
			font-style: normal;
			font-weight: 700;
			font-size: 34px;
			line-height: 100%;
			/* or 34px */

			display: flex;
			align-items: center;
			letter-spacing: 0.005em;

			color: #575DFB;
		}

		.email {
			position: absolute;
			width: 343px;
			height: 56px;
			left: 548px;
			top: 312px;
			border-style: none;
			background: #F1F1F1;
			border-radius: 12px;

		}

		.password {

			position: absolute;
			width: 343px;
			height: 56px;
			left: 549px;
			top: 384px;
			border-style: none;
			background: #F1F1F1;
			border-radius: 12px;
		}

		.forgot {
			position: absolute;
			width: 126px;
			height: 20px;
			left: 766px;
			top: 460px;

			/* body 16 regular */

			font-family: 'Lato';
			font-style: normal;
			font-weight: 400;
			font-size: 16px;
			line-height: 20px;
			/* identical to box height, or 125% */
			text-decoration: none;
			display: flex;
			align-items: center;
			text-align: center;
			letter-spacing: 0.005em;

			color: #575DFB;
		}

		.login {
			position: relative;
			width: 343px;
			height: 56px;
			/* left: 548px;
			top: 500px; */

			background: #575DFB;
			border-radius: 16px;
			border-style: none;
			font-family: 'Lato';
			font-style: normal;
			color: #F1F1F1;
			font-weight: 600;
			font-size: 16px;
			line-height: 120%;
			/* or 19px */
		}
	</style>
</head>

<body>
	<!-- <h1>Welcome : Firebase Auth: Google</h1>
	<p>TechFerment: Firebase For Web</p>
dib
	<div id="LoginScreen">
		<button id="login">Login with Google</button>
	</div>

	<div id="dashboard">
		<div id="userDetails"></div>
		<button id="logout">Logout</button>
	</div> -->
<div class="head">Login</div>
<input class="email" type="text">
<input class="password" type="text">
<a href="#" class="forgot">Forgot Password</p>
	<button class="login">Login</button>













	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

	<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

	<script>
		// Your web app's Firebase configuration
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

		document.getElementById('login').addEventListener('click', GoogleLogin)
		document.getElementById('logout').addEventListener('click', LogoutUser)

		let provider = new firebase.auth.GoogleAuthProvider()

		function GoogleLogin() {
			console.log('Login Btn Call')
			firebase.auth().signInWithPopup(provider).then(res => {
				console.log(res.user)
				document.getElementById('LoginScreen').style.display = "none"
				document.getElementById('dashboard').style.display = "block"
				showUserDetails(res.user)
			}).catch(e => {
				console.log(e)
			})
		}

		// 	function showUserDetails(user) {
		// 		document.getElementById('userDetails').innerHTML = `
		//   <img src="${user.photoURL}" style="width:10%">
		//   <p>Name: ${user.displayName}</p>
		//   <p>Email: ${user.email}</p>
		// `
		// 	}

		function checkAuthState() {
			firebase.auth().onAuthStateChanged(user => {
				if (user) {
					// document.getElementById('LoginScreen').style.display = "none"
					document.getElementById('dashboard').style.display = "block"
					showUserDetails(user)
				} else {

				}
			})
		}

		// function LogoutUser() {
		// 	console.log('Logout Btn Call')
		// 	firebase.auth().signOut().then(() => {
		// 		document.getElementById('LoginScreen').style.display = "block"
		// 		document.getElementById('dashboard').style.display = "none"
		// 	}).catch(e => {
		// 		console.log(e)
		// 	})
		// }
		checkAuthState()
	</script>
	</body>

	</html> -->