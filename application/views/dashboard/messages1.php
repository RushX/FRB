<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily UI #013 - Direct Messaging</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        /*
 * Design Reference – https://codepen.io/juliepark/pen/QxWVPv
 */

        /* basic */
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font: 16px/1.2 "Roboto", sans-serif;
            color: #333;
        }

        .blog {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .alink {
            display: inline-block;
            text-align: center;
            cursor: pointer;
        }

        input[type="text"],
        button {
            padding: 4px 8px;
            border: 0;
            outline: 0;
        }

        button {
            background-color: transparent;
            cursor: pointer;
        }

        button:hover i {
            color: #79c7c5;
            transform: scale(1.2);
        }

        /* container */
        .container {
            width: 450px;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            border-radius: 10px;
            background-color: #f9fbff;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            overflow: hidden;
        }

        /* chat_box */
        .chat_box {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .chat_box>* {
            padding: 16px;
        }

        /* head */
        .head {
            display: flex;
            align-items: center;
        }

        .head .user {
            display: flex;
            align-items: center;
            flex-grow: 1;
        }

        .head .user .avatar {
            margin-right: 8px;
        }

        .head .user .avatar img {
            display: block;
            border-radius: 50%;
        }

        .head .bar_tool {
            display: flex;
        }

        .head .bar_tool i {
            padding: 5px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* body */
        .body {
            flex-grow: 1;
            background-color: #eee;
        }

        .body .bubble {
            display: inline-block;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 15px;
        }

        .body .bubble p {
            color: #f9fbff;
            font-size: 14px;
            text-align: left;
            line-height: 1.4;
        }

        .body .incoming {
            text-align: left;
        }

        .body .incoming .bubble {
            background-color: #b2b2b2;
        }

        .body .outgoing {
            text-align: right;
        }

        .body .outgoing .bubble {
            background-color: #79c7c5;
        }

        /* foot */
        .foot {
            display: flex;
        }

        .foot .msg {
            flex-grow: 1;
        }

        @keyframes bounce {
            50% {
                transform: translate(0, 5px);
            }

            100% {
                transform: translate(0, 0);
            }
        }

        .ellipsis {
            display: inline-block;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #b7b7b7;
        }

        .dot_1 {
            /* animation: name duration timing-function delay iteration-count */
            animation: bounce 0.8s linear 0.1s infinite;
        }

        .dot_2 {
            animation: bounce 0.8s linear 0.2s infinite;
        }

        .dot_3 {
            animation: bounce 0.8s linear 0.3s infinite;
        }
    </style>
</head>

<body>
    <!-- 	<div class="blog">Visit <a href="#" target="_blank">My Blog</a></div> -->
    <div class="container">
        <div class="chat_box">
            <div class="head">
                <div class="user">
                    <div class="avatar">
                        <img src="https://picsum.photos/g/40/40" />
                    </div>
                    <div class="name">Kai Cheng</div>
                </div>
                <ul class="bar_tool">
                    <li><span class="alink"><i class="fas fa-phone"></i></span></li>
                    <li><span class="alink"><i class="fas fa-video"></i></span></li>
                    <li><span class="alink"><i class="fas fa-ellipsis-v"></i></span></li>
                </ul>
            </div>
            <div id='body' class="body">

            </div>
            <div class="foot">
                <input type="text" class="msg" placeholder="Type a message..." />
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyDIw0AZ-QvdOCO0n5KV5jSsyhIln7upGYA",
            authDomain: "roamv-2632f.firebaseapp.com",
            databaseURL: "https://roamv-2632f-default-rtdb.firebaseio.com",
            projectId: "roamv-2632f",
            storageBucket: "roamv-2632f.appspot.com",
            messagingSenderId: "836572766971",
            appId: "1:836572766971:web:ed5197c11c401ca2b8865e",
            measurementId: "G-PXHD7T92YQ"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        // Get a reference to the Firestore database
        var db = firebase.firestore();
        // Get a reference to the chat collection in Firestore

        // Get references to the DOM elements
        // Add an event listener to the message form
        // messageForm.addEventListener("submit", function (event) {
        //     event.preventDefault(); // Prevent the form from submitting normally
        //     console.log(firebase.auth().currentUser);
        //     // Get the current date and time

        //     var now = new Date();
        //     const {
        //         uid,
        //         displayName,
        //         photoURL
        //     } = firebase.auth().currentUser;
        //     // Create a new message object with the user's name, message, and timestamp
        //     var message = {
        //         from_uid: uid,
        //         to_uid: 'n7DkjYfhJGcbUf22jV2Am97046v1',
        //         name: displayName,
        //         photoURL: photoURL,
        //         message: messageInput.value,
        //         timestamp: now.getTime()
        //     };

        //     // Add the message to Firestore
        //     usercoll = db.collection(`users/${uid}/messages/`).add(message)
        //     var chatRef = db.collection(`users/${uid}/messages/`);
        //     // retrieveMessagesForUser(uid)
        //     // Clear the message input field
        //     messageInput.value = "";
        //     chatRef.where("to_uid", "==", uid).orderBy("timestamp", "asc").onSnapshot(function (snapshot) {
        //         messagesDiv.innerHTML = ""; // Clear the messages div

        //         snapshot.forEach(function (doc) {
        //             // Create a new message element and add it to the messages div
        //             var message = doc.data();
        //             var messageElement = document.createElement("div");
        //             messageElement.innerHTML = message.name + ": " + message.message + " (" + doc.id + ")";
        //             messagesDiv.appendChild(messageElement);
        //         });
        //     });
        // });

        // setInterval(()=>{
        //     const {
        //         uid,
        //         displayName,
        //         photoURL
        //     } = firebase.auth().currentUser;
        //     chatRef.where("to_uid", "==", uid).orderBy("timestamp", "asc").onSnapshot(function(snapshot) {
        //         messagesDiv.innerHTML = ""; // Clear the messages div

        //         snapshot.forEach(function(doc) {
        //             // Create a new message element and add it to the messages div
        //             var message = doc.data();
        //             var messageElement = document.createElement("div");
        //             messageElement.innerHTML = message.name + ": " + message.message + " (" + doc.id + ")";
        //             messagesDiv.appendChild(messageElement);
        //         });
        //     });
        // },3000)



        // Listen for new messages in Firestore
        // chatRef.onSnapshot(function(snapshot) {
        //     messagesDiv.innerHTML = ""; // Clear the messages div

        //     snapshot.forEach(function(doc) {
        //         // Create a new message element and add it to the messages div
        //         var message = doc.data();
        //         var messageElement = document.createElement("div");
        //         messageElement.innerHTML = message.name + ": " + message.message;
        //         messagesDiv.appendChild(messageElement);
        //     });
        // });

        async function recieveMessage(uid) {

            // Get the current date and time

            var now = new Date();
            var imei = await rec(uid);
            var chatRef = db.collection(`users/${uid}/imei/${imei}/messages`);
            // var chatRef = db.collection(`users/677916286389/messages/`);
            chatRef.orderBy("timestamp", "asc").onSnapshot(function(snapshot) {
                // messagesDiv.innerHTML = ""; // Clear the messages div

                // console.log(snapshot.docs);
                snapshot.forEach(function(doc) {
                    // Create a new message element and add it to the messages div
                    var message = doc.data();
                    // var msg=(JSON.parse(message['message']))
                    if (message.message.type == 0) {


                        $('#body').append(`<div class="incoming">
                    <div class="bubble">
                        <p>${message.message.message}.</p>
                    </div>
                </div>`);

                    }
                    if (message.message.type == 1) {


                        $('#body').append(`<div class="outgoing">
                    <div class="bubble">
                        <p>${message.message.message}.</p>
                    </div>
                </div>`);

                    }
                    // foreach message as msg {
                    // }
                });
            });
        }

        function rec(uid) {
            return new Promise(function(resolve, reject) {
                var docRef = db.collection("imei").doc((uid));

                docRef.get().then((doc) => {
                    if (doc.exists) {
                        // console.log("Document data:", doc.data());
                        var data = doc.data();
                        resolve(data.imei);
                        // return data
                    } else {
                        // doc.data() will be undefined in this case
                        reject("No such document!");
                    }
                }).catch((error) => {
                    reject("Error getting document:", error);
                });
            })
        }

        // setInterval(() => {
        //     firebase.auth().onAuthStateChanged((user) => {
        //         // const {
        //         //     uid,
        //         //     displayName,
        //         //     photoURL
        //         // } = user
        //     });
        // }, 3000)
        recieveMessage('n7DkjYfhJGcbUf22jV2Am97046v1')
    </script>
</body>

</html>