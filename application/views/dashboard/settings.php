<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <!-- <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <style>
        html {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: 'Lato';
            height: 100%;
            background-repeat: no-repeat;
            background: linear-gradient(148.35deg, #BBD2FF -7.55%, #1A3470 168.79%) fixed;
        }



        .call {
            box-sizing: border-box;

            position: absolute;
            width: 533px;
            height: 778px;
            left: 879px;
            top: 105px;

            background: linear-gradient(179.33deg, #030A1B -3.88%, #420000 108.28%);
            opacity: 0.6;
            border: 4px solid #ADB0FF;
            border-radius: 40px;
        }



        .blhead {
            display: flex;
            flex-direction: row;
            justify-content: left;
            align-items: center;
            margin-top: 20px;
            padding: 0px 2px 0px 20px;
            gap: 130px;
            /* or 25px */

            display: flex;
            letter-spacing: 0.005em;

            color: #242425;
        }

        .blhead_title {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px 0px;
            gap: 10px;
            color: #575DFB;


            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-size: 34px;
            line-height: 120%;
        }

        .blhead_addbtn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px;
            gap: 8px;
            border-style: none;
            color: #FFFFFF;

            width: 226px;
            height: 40px;

            background: #575DFB;
            border-radius: 12px;

        }

        .line {
            width: 100%;
            height: 0px;
            border: 1px solid #D4DDFF;
            transform: rotate(-0.07deg);
            margin-top: 20px;

        }

        .online {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 110%;
            padding-top: 10px;
            padding-left: 50px;
            /* or 15px */

            display: flex;
            align-items: center;
            letter-spacing: 0.005em;

            color: #4D4D4D;
        }

        .user_dp {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 30px;
            gap: 20px;

        }

        .user_img {
            width: 64px;
            height: 64px;
            border-radius: 100px;
            background: #efefef;
        }

        .white {
            background-color: #FFFFFF !important;
            opacity: 1 !important;
            width: 644px !important;
        }

        .ur {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px;
            gap: 102px;
        }

        .ur p {
            margin: 0px
        }

        .user_more {
            width: 30px;
            height: 30px;
            align-content: center;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            transition-duration: 0.5s;
        }

        .user_more:hover {
            background-color: #D4DDFF;
            border-radius: 100px;
            /* opacity: 0.8; */
            transition-duration: 0.5s;

        }

        .menu {
            width: 100%;
        }

        .options {
            display: flex;
            margin-left: 30px;
            flex-direction: row;
            align-items: center;
            padding-left: 10px;
            gap: 359px;
        }

        .options:hover {
            background-color: #D4DDFF;
            border-radius: 100px;
            /* opacity: 0.8; */
            transition-duration: 0.5s;
        }

        .options_text {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            /* identical to box height, or 125% */
            width: 200px;
            display: flex;
            align-items: center;
            letter-spacing: 0.005em;

            color: #242425;
        }

        .logout {
            display: flex;
            margin-left: 30px;
            flex-direction: row;
            align-items: center;
            padding-left: 10px;
            gap: 359px;
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            padding-top: 20px;
            /* or 125% */
            letter-spacing: 0.005em;

            color: #575DFB;

        }

        .logout:hover {
            cursor: pointer;
        }

        .version {
            display: flex;
            justify-content: center;
            bottom: 0;
            ;
        }

        .version_info {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 11px;
            line-height: 110%;
            /* or 12px */

            display: flex;
            align-items: center;
            letter-spacing: 0.005em;

            color: #4D4D4D;

        }

        .red {
            color: red !important;
        }

        .btn-red {
            border-radius: 16px;
            width: 343px;
            font-family: 'Lato';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            height: 56px;
            transition: 0.6s;
            border: 1.5px solid red;
            background: #FFFF;
            color: red;
        }

        .btn-red:hover {
            background: red;
            color: #FFFF;
            border-style: none;

        }
    </style>

    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/dashboard.css'>
</head>

<body>
    <div id="preloader">
        <span class="loader"></span>
    </div>
    <div class="root">
        <?php
        $data = ['active' => "settings"];
        $this->load->view('components/navbar', $data); ?>
        <div class="main">
            <div class="right white">
                <div class="blhead">
                    <div class="blhead_title">
                        SETTINGS
                    </div>
                </div>
                <div class="line"></div>
                <div class="user_dp">
                    <div class="user_img"></div>
                    <div class="ur">
                        <div class="user_info">
                            <p class="text" id="user_name"></p>
                            <p class="user_email" id="user_email"></p>
                        </div>
                        <div class="user_more">
                            <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="options">
                        <p class="options_text">Privacy Policy</p>
                        <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                    </div>
                    <div class="options">
                        <p class="options_text">Help and Support</p>
                        <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                    </div>
                    <div class="options" onclick="showModalDelete()">
                        <p class="options_text red">Delete Account</p>
                        <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                    </div>
                </div>
                <div class="logout" onclick="logoutUser()">Logout
                </div>

                <div class="version">
                    <p class="version_info"> Current version: 1.554.1123</p>
                </div>
            </div>
            <div class="right" id='right'>
                <div class="modal_delete" id="modal_delete" style="display:none">
                    <div class="modal_container">
                        <div class="modal_head">
                            <img src="<?php echo base_url() ?>assets/images/back.svg" onclick="closeModal('modal_delete')" alt="" srcset="">
                            <div class="modal_head_name">
                                Delete Account
                            </div>
                        </div>
                        <div class="modal_main">
                            <h5 class='red'>Please type <b>CONFIRM</b> to delete your account and data</h5>
                            <input id="confirm" type="text" placeholder="CONFIRM">
                            <div class="red" id="error"></div>
                            <button class="btn-red" id="deleteAccount" onclick="deleteAccount()">Delete My Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('components/auth'); ?>
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

        <script>
            showUserDetails()
            var loader = document.getElementById("preloader");
            window.addEventListener("load", function() {
                loader.style.display = "none";
            })
            var db = firebase.firestore();

            function deleteAccount() {
                firebase.auth().onAuthStateChanged(user => {
                    if (user) {
                        // showUserDetails(user)
                    } else {
                        window.location = ("<?php echo base_url() ?>login")

                    }
                })
                if ($('#confirm').val() == "CONFIRM") {

                    const user = firebase.auth().currentUser;
                    var cook = getCookie()
                    var credential = firebase.auth.GoogleAuthProvider.credential(cook.oauthIdToken, cook.oauthAccessToken);
                    user.reauthenticateWithCredential(credential)
                        .then(function() {
                            user.delete().then(function() {
                                // User deleted successfully
                                // Now delete related data from Firebase Database or Firestore
                                var uid = user.uid;
                                db.collection('users').doc(uid).delete();
                                db.collection('imei').doc(uid).delete();
                                logoutUser()
                            }).catch(function(error) {
                                // An error happened
                                console.log(error);
                            });
                        })




                } else {
                    $('#error').append("Invalid input, Please enter CONFIRM")
                }
            }

            function closeModal(v) {
                document.getElementById(v).style = "display:none";
                document.getElementById(v).style = "display:none";
                var ele = document.getElementById('right').classList.remove("right_active")
            }

            function showModalDelete() {
                document.getElementById('modal_delete').style = "display:block";
                var ele = document.getElementById('right').classList.add("right_active")
            }

            function getCookie() {
                let name = "oauth" + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        var cook = c.substring(name.length, c.length);
                        return JSON.parse(cook)
                    }
                }
                return "";
            }
        </script>
    </div>
</body>

</html>