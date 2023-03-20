<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <!-- <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        .low_width {
            background-color: #FFFFFF !important;
            opacity: 1 !important;
            width: 600px !important;
        }

        .search_hold {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 8px 10px;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            height: 55px;

            margin-bottom: 20px;

            /* Inside auto layout */

            flex: none;
            order: 1;
            align-self: stretch;
            flex-grow: 0;
        }

        .search_bar {
            background: #F1F1F1;
            border-radius: 30px;
            width: 60%;
            height: 100%;
            border-style: none;
            padding-left: 20px;
        }

        .message_layout {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px 30px;
            gap: 21px;
            margin-top: 20px;
            left: 0px;
            top: 0px;
            width: 100%;
            background: #FFFFFF;
            border-radius: 12px;
        }

        .message_layout:hover {
            background-color: #D4DDFF;
            transition-duration: 0.4s;
        }

        .message_main {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 30px;
            width: 500px;
            height: 59px;


            /* Inside auto layout */

            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .small {
            width: 52px !important;
            height: 52px !important;
        }

        .sender {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 120%;
            /* or 19px */

            display: flex;
            align-items: center;
            letter-spacing: 0.005em;

            color: #242425;


            /* Inside auto layout */

            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .message_data {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 1px;



            /* Inside auto layout */

            flex: none;
            order: 1;
            flex-grow: 0;
        }

        .message {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 110%;
            /* or 15px */
            width: 395px;
            height: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #4D4D4D;
        }

        .message_footer {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 36px;


            /* Inside auto layout */

            flex: none;
            order: 2;
            flex-grow: 0;
        }

        .message_to {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 110%;
            /* or 15px */

            display: flex;
            align-items: center;
            letter-spacing: 0.005em;

            color: #4D4D4D;
        }

        .date {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 110%;
            /* or 15px */

            display: flex;
            align-items: center;
            text-align: right;
            letter-spacing: 0.005em;

            color: #4D4D4D;


            /* Inside auto layout */

            flex: none;
            order: 1;
            flex-grow: 0;
        }

        .send_message {
            position: absolute;
            width: 525px;
            height: 84px;
            left: 883px;
            top: 811px;

            background: #FFFFFF;
            box-shadow: 0px -2px 4px #E4E4E4;
            border-radius: 0px 0px 34px 34px;
        }
    </style>
    <style>
        #menu {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            border: 1px solid #d3d3d3;
            padding: 12px 16px;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1.5;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: "";
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /********************************
 Typography Style
******************************** */

        body {
            margin: 0;
            font-family: "Open Sans", sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html {
            min-height: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 26px;
        }

        h4 {
            font-size: 22px;
        }

        h5 {
            font-size: 18px;
        }

        h6 {
            font-size: 16px;
        }

        p {
            font-size: 15px;
        }

        a {
            text-decoration: none;
            font-size: 15px;
        }

        * {
            margin-bottom: 0;
        }

        /* *******************************
message-area
******************************** */

        .message-area {
            height: 100vh;
            overflow: hidden;
            padding: 30px 0;
            background: #f5f5f5;
        }

        .chat-area {
            position: relative;
            width: 100%;
            background-color: #fff;
            border-radius: 0.3rem;
            height: 90vh;
            overflow: hidden;
            min-height: calc(100% - 1rem);
        }

        .chatlist {
            outline: 0;
            height: 100%;
            overflow: hidden;
            width: 300px;
            float: left;
            padding: 15px;
        }

        .chat-area .modal-content {
            border: none;
            border-radius: 0;
            outline: 0;
            height: 100%;
        }

        .chat-area .modal-dialog-scrollable {
            height: 100% !important;
        }

        .modal-dialog-scrollable {
            height: 100% !important;
        }

        .chatbox {
            display: none;
            width: auto;
            border-radius: 40px;
            overflow: hidden;
            height: 100%;
            border-left: 1px solid #ccc;
        }

        .chatbox .modal-dialog,
        .chatlist .modal-dialog {
            max-width: 100%;
            margin: 0;
        }

        .msg-search {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .chat-area .form-control {
            display: block;
            width: 80%;
            padding: 0.375rem 0.75rem;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #222;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .chat-area .form-control:focus {
            outline: 0;
            box-shadow: inherit;
        }

        a.add img {
            height: 36px;
        }

        .chat-area .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            align-items: center;
            justify-content: space-between;
            flex-wrap: inherit;
        }

        .chat-area .nav-tabs .nav-item {
            width: 100%;
        }

        .chat-area .nav-tabs .nav-link {
            width: 100%;
            color: #180660;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            text-transform: capitalize;
            margin-top: 5px;
            margin-bottom: -1px;
            background: 0 0;
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .chat-area .nav-tabs .nav-item.show .nav-link,
        .chat-area .nav-tabs .nav-link.active {
            color: #222;
            background-color: #fff;
            border-color: transparent transparent #000;
        }

        .chat-area .nav-tabs .nav-link:focus,
        .chat-area .nav-tabs .nav-link:hover {
            border-color: transparent transparent #000;
            isolation: isolate;
        }

        .chat-list h3 {
            color: #222;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .chat-list p {
            color: #343434;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .chat-list a.d-flex {
            margin-bottom: 15px;
            position: relative;
            text-decoration: none;
        }

        .chat-list .active {
            display: block;
            content: "";
            clear: both;
            position: absolute;
            bottom: 3px;
            left: 34px;
            height: 12px;
            width: 12px;
            background: #00db75;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .msg-head h3 {
            color: #222;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .msg-head p {
            color: #343434;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .msg-head {
            padding: 15px;
            border-bottom: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .moreoption {
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .moreoption .navbar {
            padding: 0;
        }

        .moreoption li .nav-link {
            color: #222;
            font-size: 16px;
        }

        .moreoption .dropdown-toggle::after {
            display: none;
        }

        .moreoption .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: auto;
            right: 0;
            margin-top: 0.125rem;
        }

        .msg-body ul {
            overflow: hidden;
        }

        .msg-body ul li {
            list-style: none;
            margin: 15px 0;
        }

        .msg-body ul li.sender {
            display: block;
            width: 100%;
            position: relative;
        }

        .msg-body ul li.sender:before {
            display: block;
            clear: both;
            content: "";
            position: absolute;
            top: -6px;
            left: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #f5f5f5 transparent;
            -webkit-transform: rotate(-37deg);
            -ms-transform: rotate(-37deg);
            transform: rotate(-37deg);
        }

        .msg-body ul li.sender p {
            color: #000;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #f5f5f5;
            display: inline-block;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-bottom: 0;
        }

        .msg-body ul li.sender p b {
            display: block;
            color: #180660;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        .msg-body ul li.reply {
            display: block;
            width: 100%;
            text-align: right;
            position: relative;
        }

        .msg-body ul li.reply:before {
            display: block;
            clear: both;
            content: "";
            position: absolute;
            bottom: 15px;
            right: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #4b7bec transparent;
            -webkit-transform: rotate(37deg);
            -ms-transform: rotate(37deg);
            transform: rotate(37deg);
        }

        .msg-body ul li.reply p {
            color: #fff;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #4b7bec;
            display: inline-block;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-bottom: 0;
        }

        .msg-body ul li.reply p b {
            display: block;
            color: #061061;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        .msg-body ul li.reply:after {
            display: block;
            content: "";
            clear: both;
        }

        .time {
            display: block;
            color: #000;
            font-size: 12px;
            line-height: 1.5;
            font-weight: 400;
        }

        li.reply .time {
            margin-right: 20px;
        }

        .divider {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .msg-body h6 {
            text-align: center;
            font-weight: normal;
            font-size: 14px;
            line-height: 1.5;
            color: #222;
            background: #fff;
            display: inline-block;
            padding: 0 5px;
            margin-bottom: 0;
        }

        .divider:after {
            display: block;
            content: "";
            clear: both;
            position: absolute;
            top: 12px;
            left: 0;
            border-top: 1px solid #ebebeb;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .send-box {
            padding: 15px;
            border-top: 1px solid #ccc;
        }

        .send-box form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .send-box .form-control {
            display: block;
            width: 85%;
            padding: 0.375rem 0.75rem;
            font-size: 14px;
            height: 56px;
            font-weight: 400;
            line-height: 1.5;
            color: #222;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .send-box button {
            border: none;
            background: #3867d6;
            padding: 0.375rem 5px;
            color: #fff;
            border-radius: 0.25rem;
            font-size: 14px;
            font-weight: 400;
            width: 24%;
            margin-left: 1%;
        }

        .send-box button i {
            margin-right: 5px;
        }

        .send-btns .button-wrapper {
            position: relative;
            width: 125px;
            height: auto;
            text-align: left;
            margin: 0 auto;
            display: block;
            background: #f6f7fa;
            border-radius: 3px;
            padding: 5px 15px;
            float: left;
            margin-right: 5px;
            margin-bottom: 5px;
            overflow: hidden;
        }

        .send-btns .button-wrapper span.label {
            position: relative;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            cursor: pointer;
            color: #343945;
            font-weight: 400;
            text-transform: capitalize;
            font-size: 13px;
        }

        #upload {
            display: inline-block;
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .send-btns .attach .form-control {
            display: inline-block;
            width: 120px;
            height: auto;
            padding: 5px 8px;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.5;
            color: #343945;
            background-color: #f6f7fa;
            background-clip: padding-box;
            border: 1px solid #f6f7fa;
            border-radius: 3px;
            margin-bottom: 5px;
        }

        .send-btns .button-wrapper span.label img {
            margin-right: 5px;
        }

        .button-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            text-align: center;
            margin: 0 auto;
        }

        button:focus {
            outline: 0;
        }

        .add-apoint {
            display: inline-block;
            margin-left: 5px;
        }

        .add-apoint a {
            text-decoration: none;
            background: #f6f7fa;
            border-radius: 8px;
            padding: 8px 8px;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.2;
            color: #343945;
        }

        .add-apoint a svg {
            margin-right: 5px;
        }

        .chat-icon {
            display: none;
        }

        .closess i {
            display: none;
        }

        @media (max-width: 767px) {
            .chat-icon {
                display: block;
                margin-right: 5px;
            }

            .chatlist {
                width: 100%;
            }

            .chatbox {
                width: 100%;
                position: absolute;
                left: 1000px;
                right: 0;
                background: #fff;
                transition: all 0.5s ease;
                border-left: none;
            }

            .showbox {
                left: 0 !important;
                display: block;
                transition: all 0.5s ease;
            }

            .msg-head h3 {
                font-size: 14px;
            }

            .msg-head p {
                font-size: 12px;
            }

            .msg-head .flex-shrink-0 img {
                height: 30px;
            }

            .send-box button {
                width: 28%;
            }

            .send-box .form-control {
                width: 70%;
            }

            .chat-list h3 {
                font-size: 14px;
            }

            .chat-list p {
                font-size: 12px;
            }

            .msg-body ul li.sender p {
                font-size: 13px;
                padding: 8px;
                border-bottom-left-radius: 6px;
                border-top-right-radius: 6px;
                border-bottom-right-radius: 6px;
            }

            .msg-body ul li.reply p {
                font-size: 13px;
                padding: 8px;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
                border-bottom-left-radius: 6px;
            }
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/dashboard.css'>
    <script>
        function showModalChat() {
            document.getElementById('chatbox').style = "display:block";
        }
    </script>
</head>

<body>
    <div id="preloader">
        <span class="loader"></span>
    </div>
    <div class="root">
        <?php
        $data = ['active' => "messages"];
        $this->load->view('components/navbar', $data); ?>
        <div class="main">
            <div class="right low_width">
                <div class="blhead">
                    <div class="blhead_title">
                        Messages
                    </div>
                    <button class="blhead_addbtn btn" onclick="newChat()">+ Create Message</button>
                </div>
                <div class="line"></div>
                <div class="search_hold">
                    <img src="<?php echo base_url() ?>assets/images/search.svg" width='15px' height="15px" class="simimg">
                    <input type="text" placeholder="Search" class="search_bar">
                </div>
                <div class="scrollable" id="scrollable" style="height:500px !important; margin-right:1px !important">
                    <!-- <div class="message_layout">
                        <div class="message_main">
                            <div class="user_img small"></div>
                            <div class="message_data">
                                <div class="sender">Sender Name</div>
                                <div class="message">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi enim velit perspiciatis vero impedit voluptatem aut provident? Quasi qui dolorum sint expedita ea? Natus, ducimus labore. Dignissimos pariatur necessitatibus quasi.
                                </div>
                                <div class="message_footer">
                                    <div class="message_to">Device1</div>
                                    <div class="date">July 19,2023 13:43</div>
                                </div>
                            </div>
                        </div>
                        <div class="arrow">

                            <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="right right_active">
                <!-- chatbox -->
                <div class="chatbox" id='chatbox'>
                    <div class="modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="msg-head">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="d-flex align-items-center">
                                            <span class="chat-icon"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                                            <div class="flex-grow-1 ms-3">
                                                <h3 id='displayNumber'></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <ion-icon name="options-outline"></ion-icon?> -->
                            </div>

                            <div class="modal-body">
                                <div class="msg-body" style='height: 700px;'>
                                    <ul id="msg-body">
                                        <!-- <li class="sender">
                                            <p> Hey, Are you there? </p>
                                            <span class="time">10:06 am</span>
    </li>
                                        <li class="reply">
                                            <p> Last Minute Festive Packages From Superbreak</p>
                                            <span class="time">10:20 am</span>
                                       </li> -->

                                    </ul>
                                </div>
                            </div>

                            <div class="send-box">
                                <form action="">
                                    <input type="text" class="form-control sendbox" id="message" aria-label="message…" placeholder="Write message…">

                                    <button type="button" class='btn' onclick="sendMessage()"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal_create_message" id="modal_create_message" hidden>
                    <div class="modal_create_message">
                        <div class="modal_container">
                            <div class="modal_head">
                                <img src="<?php echo base_url() ?>assets/images/back.svg" onclick="closeModal('modal_create_message')" alt="" srcset="">
                                <div class="modal_head_name">
                                    Create Message
                                </div>
                            </div>
                            <div class="modal-body modal_main">
                                <label for="reciepent">Reciepent (Without 91) </label>
                                <input type="number" id="reciepent" placeholder="Reciepients">

                                <label for="device"> Select Device</label>
                                <select type="text" id="devices" placeholder="Select Device To Send From">

                                </select>
                            </div>
                            <!-- <div class="send_message"> -->
                            <div class="send-box">
                                <form action="">
                                    <input type="text" id="messagenew" class="sendbox form-control" aria-label="message…" placeholder="Write message…">

                                    <button type="button" onclick="sendNew()" class='btn'><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                                </form>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" id="imeihold" hidden>
            <input type="text" id="phonehold" hidden>


        </div>
        <div id="menu">
            <a href="#" id="deleteChat">Delete Chat</a>
            <input hidden id="deleteChatRefImei" value="">
            <input hidden id="deleteChatRefNumber" value="">
        </div>
        <!-- <?php $this->load->view('components/auth'); ?> -->
        <script>
            var loader = document.getElementById("preloader");
            window.addEventListener("load", function() {
                loader.style.display = "none";
            })
            // document.getElementById('send').addEventListener('click', () => {
            //     chat = document.getElementById('')
            // })

            //SEND MESSAGE

            //FETCH MESSAGES
        </script>
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-firestore.js"></script>
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


            firebase.initializeApp(firebaseConfig);
            var db = firebase.firestore();
            var uid;
            let uidCall = new Promise((resolve, reject) => {
                firebase.auth().onAuthStateChanged(user => {
                    if (user) {
                        resolve(user.uid);

                    } else {
                        reject(Error("User not authenticated"));
                    }
                });
            });


            var imeis = uidCall.then((uid) => {

                var docRef = db.collection("imei").doc((uid));
                return docRef.get().then((doc) => {
                    if (doc.exists) {
                        var data = doc.data();
                        return (data.imei);
                        // return data
                    } else {
                        // doc.data() will be undefined in this case
                        return ("No such document!");
                    }
                }).catch((error) => {
                    return ("Error getting document:", error);
                });
            })

            function sendMessage() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url() ?>api/v1/sendMessage",
                    data: {
                        "imei": $('#imeihold').val(),
                        "number": $('#phonehold').val(),
                        "message": `${$('#message').val()}`,
                        "type": 1
                    },
                    success: $('.sendbox').empty()
                });
            }

            function closeModal(v) {
                $(`#${v}`).attr('hidden', true);

            }

            var now = new Date();
            var cr = imeis.then((iarr) => {
                // $('#scrollable').empty();
                iarr.forEach((imei) => {
                    $('#devices').append(`<option value="${imei}">${imei}</option>`)
                    uidCall.then((uid) => {
                        var chatRef = db.collection(`users/${uid}/imei/${imei}/messages`);
                        chatRef.orderBy("timestamp", "asc").onSnapshot(async function(snapshot) {
                            // messagesDiv.innerHTML = ""; // Clear the messages div
                            // console.log(snapshot)
                            loadChats(snapshot);
                        })
                    })
                })
            })


            function timestampToTime(timestamp) {

                var date = new Date(timestamp); // Convert timestamp to milliseconds and create a new Date object
                var hours = date.getHours(); // Get hours (0-23)
                var minutes = date.getMinutes(); // Get minutes (0-59)

                // Convert hours to 12-hour format and add AM/PM suffix
                var suffix = hours >= 12 ? 'PM' : 'AM';
                hours = ((hours + 11) % 12 + 1);

                // Add leading zero to minutes if necessary
                if (minutes < 10) {
                    minutes = '0' + minutes;
                }

                var time = hours + ':' + minutes + ' ' + suffix; // Format time string
                return time;
            }

            function showMessages(number, imei) {
                $('#chatbox').attr('hidden', false)
                document.getElementById('chatbox').style = "display:block";
                $('#msg-body').empty()
                $('#imeihold').val(imei)
                $('#phonehold').val(number)
                $('#displayNumber').empty()
                $('#displayNumber').append(number)
                var call = uidCall.then((uid) => {
                    var chatRef = db.collection(`users/${uid}/imei/${imei}/messages`);
                    chatRef.orderBy("timestamp", "asc").onSnapshot(async function(snapshot) {
                        $('#msg-body').empty()
                        snapshot.forEach(function(doc) {
                            var message = doc.data();
                            if (parseInt(message.number) == parseInt(number)) {
                                if (parseInt(message.type) == 1) {
                                    $('#msg-body').append(`<li class="reply">
                                            <p> ${message.message} </p>
                                            <span class="time">${timestampToTime(message.timestamp)}</span>
                                            </li>`)
                                } else {

                                    $('#msg-body').append(`<li class="sender">
                                <p> ${message.message} </p>
                                <span class="time">${timestampToTime(message.timestamp)}</span></li>`)

                                }
                            }
                        })
                    })
                })

            }

            function getDT(ts) {
                var currentTime = new Date();
                currentTime.setTime(ts);
                var currentOffset = currentTime.getTimezoneOffset();
                var ISTOffset = 330; // IST offset UTC +5:30 
                var ISTTime = new Date(currentTime.getTime() + (ISTOffset + currentOffset) * 60000);
                // ISTTime now represents the time in IST coordinates

                var hoursIST = ISTTime.getHours()
                var minutesIST = ISTTime.getMinutes()
                console.log(ts)
                return currentTime.toString();
            }

            function loadChats(snapshot) {
                listarr = []
                snapshot.forEach(function(doc) {
                    // Create a new message element and add it to the messages div
                    var message = doc.data();
                    listarr[`${message.number}`] = (message)

                })

                for (const message in listarr) {

                    $(`#${listarr[message].number}`).length == 0 ?
                        $('#scrollable').append(`<div class="message_layout" oncontextmenu=showOptsfor(${listarr[message].number},${listarr[message].imei})  id='${listarr[message].number}' onclick=showMessages(${listarr[message].number},${listarr[message].imei})>
                    <div class="message_main">
                    <div class="user_img small"></div>
                    <div class="message_data" id='${listarr[message].number}_message_data'>
                    <div class="sender" id='${listarr[message].number}_sender'>${listarr[message].number}</div>
                    <div class="message">
                    ${listarr[message].message}
                    </div>
                    <div class="message_footer">
                    <div class="message_to" id='${listarr[message].number}_imei'>${listarr[message].imei}</div>
                    <div class="date">${getDT(listarr[message].timestamp)}</div>
                    </div>
                    </div>
                    </div>
                    <div class="arrow">
                    
                    <img src="<?php echo base_url() ?>assets/images/arrow.svg" width='15px' height="15px" class="simimg">
                    </div>
                    </div>`) : $(`#${listarr[message].number}_message_data`).empty().append(`
                    <div class="message_data" id='${listarr[message].number}_message_data'>
                    <div class="sender" id='${listarr[message].number}_sender'>${listarr[message].number}</div>
                    <div class="message">
                    ${listarr[message].message}
                    </div>
                    <div class="message_footer">
                    <div class="message_to" id='${listarr[message].number}_imei'>${listarr[message].imei}</div>
                    <div class="date">${getDT(listarr[message].timestamp)}</div>
                    </div>`)
                }
            }

            function newChat() {
                $('#chatbox').attr('hidden', true)
                $('#modal_create_message').removeAttr('hidden');

            }

            function showOptsfor(number, imei) {
                const menu = document.getElementById("menu");
                event.preventDefault();
                const delImei = document.getElementById("deleteChatRefImei");
                const delNumber = document.getElementById("deleteChatRefNumber");
                delNumber.value = number
                delImei.value = imei
                menu.style.display = "block"; // show the menu
                menu.style.left = event.pageX + "px"; // position the menu
                menu.style.top = event.pageY + "px";
            }


            $('#deleteChat').click((event) => {
                const menu = document.getElementById("menu");
                menu.style.display = "none"; // show the menu

                event.preventDefault();
                imei = $('#deleteChatRefImei').val()
                number = $('#deleteChatRefNumber').val()
                uidCall.then((uid) => {
                    const collectionRef = db.collection(`users/${uid}/imei/${imei}/messages`);

                    const query = collectionRef.where("number", "==", parseInt(number));

                    query.get().then((querySnapshot) => {
                        console.log(querySnapshot);
                        querySnapshot.forEach((doc) => {
                            doc.ref.delete().then(() => {
                                $(`#${number}`).remove()
                                $('#chatbox').attr('hidden', true)

                                // console.log("Document successfully deleted!");
                            }).catch((error) => {
                                console.error("Error removing document: ", error);
                            });
                        });
                    }).catch((error) => {
                        console.error("Error getting documents: ", error);
                    });

                })

            })


            function sendNew() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url() ?>api/v1/sendMessage",
                    data: {
                        "imei": $('#devices').val(),
                        "number": $('#reciepent').val(),
                        "message": `${$('#messagenew').val()}`,
                        "type": 1
                    },
                    success: () => {
                        $('.sendbox').empty()
                        closeModal('modal_create_message')
                        showMessages($('#reciepent').val(), $('#devices').val())
                    }
                });
            }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
    </div>
</body>

</html>