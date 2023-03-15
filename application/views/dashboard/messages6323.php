<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chat App</title>
</head>

<body>
    <div id="chat-window">
        <div id="messages"></div>
        <form id="message-form">
            <input type="text" id="message-input">
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
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
        var chatRef = db.collection("users");

        // Get references to the DOM elements
        var messageForm = document.getElementById("message-form");
        var messageInput = document.getElementById("message-input");
        var messagesDiv = document.getElementById("messages");
        // Add an event listener to the message form
        messageForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            console.log(firebase.auth().currentUser);
            // Get the current date and time

            var now = new Date();
            const {
                uid,
                displayName,
                photoURL
            } = firebase.auth().currentUser;
            // Create a new message object with the user's name, message, and timestamp
            var message = {
                from_uid: uid,
                to_uid: 'n7DkjYfhJGcbUf22jV2Am97046v1',
                name: displayName,
                photoURL: photoURL,
                message: messageInput.value,
                timestamp: now.getTime()
            };

            // Add the message to Firestore
            usercoll = db.collection(`users/${uid}/messages/`).add(message)
            // retrieveMessagesForUser(uid)
            // Clear the message input field
            messageInput.value = "";
            chatRef.where("to_uid", "==", uid).orderBy("timestamp", "asc").onSnapshot(function(snapshot) {
                messagesDiv.innerHTML = ""; // Clear the messages div
    
                snapshot.forEach(function(doc) {
                    // Create a new message element and add it to the messages div
                    var message = doc.data();
                    var messageElement = document.createElement("div");
                    messageElement.innerHTML = message.name + ": " + message.message + " (" + doc.id + ")";
                    messagesDiv.appendChild(messageElement);
                });
            });
        });

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
    </script>
</body>

</html>