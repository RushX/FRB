<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <!-- <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
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
            height: 30px;

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
            padding-left: 20px;
        }

        .message_layout {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 30px;
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

        .message_layout {
            width: 394px;
            height: 59px;

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
            width: 200px;
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
            font-size: 14px;
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
    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/dashboard.css'>
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
                    <button class="blhead_addbtn btn" onclick="showModalAddDevice()">+ Create Message</button>
                </div>
                <div class="line"></div>
                <div class="search_hold">
                    <img src="<?php echo base_url() ?>assets/images/search.svg" width='15px' height="15px" class="simimg">
                    <input type="text" placeholder="Search" class="search_bar">
                </div>
                <div class="message_layout">
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
                </div>
                <div class="message_layout">
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
                </div>
                <div class="message_layout">
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
                </div>
            </div>
            <div class="right right_active">
                <div class="modal_create_message">
                    <div class="modal_container">
                        <div class="modal_head">
                            <img src="<?php echo base_url() ?>assets/images/back.svg" onclick="closeModal('modal_add_device')" alt="" srcset="">
                            <div class="modal_head_name">
                                Create Message
                            </div>
                        </div>
                        <div class="modal_main">
                            <input type="text" placeholder="Select Reciepients">
                            <input type="text" placeholder="Select Device To Send From">
                        </div>
                        <div class="send_message">

                        </div>
                    </div>
                </div>


            </div>
            <script>
                var loader = document.getElementById("preloader");
                window.addEventListener("load", function() {
                    loader.style.display = "none";
                })
            </script>
        </div>
    </div>
</body>

</html>