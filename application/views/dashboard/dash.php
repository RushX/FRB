<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <!-- <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/dashboard.css'>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>


    <title>Dashboard</title>
</head>

<body>
    <div id="preloader">
        <span class="loader"></span>
    </div>
    <!-- <a id="logout">Logout</a>
    <span id="userDetails"></span> -->

    <div class="root">
        <?php
        $data = ['active' => "home"];
        $this->load->view('components/navbar', $data); ?>
        <div class="main">
            <div class="left">
                <div class="sub">
                    <div class="blhead">
                        <div class="blhead_title">
                            SUBSCRIPTIONS
                        </div>
                    </div>
                    <div class="sub_root scrollable-x">

                        <div class="sub_box_holder" id="subscriptions">
                            <div class="sub_box">
                                <div class="sub_plan_head">
                                    <div class="plan_name">
                                        Unlimited Plan
                                    </div>
                                    <div class="plan_status pactive">
                                    </div>
                                </div>
                                <div class="sub_plan_body">
                                    <div class="plan_body_left">
                                        <div class="plan_body_price">₹0</div>
                                        <div class="gst">+ GST excluded</div>
                                        <span class="sub_data">Unlimited international calls & massages</span>
                                    </div>
                                    <div class="plan_body_right">
                                        <div class="single-chart">
                                            <svg viewBox="0 0 36 36" class="circular-chart">
                                                <path class="circle-bg" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                <path class="circle" stroke-dasharray="50, 100" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                <text x="18" y="20.35" class="percentage">∞ Days Left </text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub_plan_foot">
                                    <button class="sub_buy btn" disabled>Recharge</button>
                                    <div class="plan_expiry">Expires On N/A
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="bottom-left">
                    <div class="blhead">
                        <div class="blhead_title">
                            Connected Devices
                        </div>
                        <button class="blhead_addbtn btn" onclick="showModalAddDevice()">+ Add Devices</button>
                    </div>
                    <div class="line"></div>
                    <div class="online">{#} Devices Online</div>
                    <div class="scrollable" id="devices">
                    <div class=" skeleton devices">
                    </div>
                    <div class="skeleton devices">
                    </div>
                        <div class="skeleton devices ">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div id="right" class="right">
            <div id="modal_loading" style="display:none">
                        <span id="loader" class="loader"></span>
                        <span id="success" class="success" >Success</span>
            </div>
                <div id="modal_add_device" style="display:none">
                    <div class="modal_container">
                        <div class="modal_head">
                            <img src="<?php echo base_url() ?>assets/images/back.svg" onclick="closeModal('modal_add_device')" alt="" srcset="">
                            <div class="modal_head_name">
                            Add New Device
                            </div></div>
                        <div class="modal_main">
                            <ol>
                                <li>Open Your Dialer</li>
                                <li>Type <b>*#06#</b></li>
                                <li>Enter the IMEI Number Displayed</li>
                            </ol>
                            <input id="imei" type="text" placeholder="Enter the IMEI Number">
                            <input id="name" type="text" placeholder="Enter the Device Name">
                            <input id="pnum" type="text" placeholder="Enter the Phone Number">
                            <input id="snum" type="text" placeholder="Enter the Sim Number">
                            <button class="btn" id="addDevice" onclick="addImei(document.getElementById('imei').value)">Add Device</button>
                        </div>
                    </div>
                    <script>

                    </script>
                </div>
                <div id="modal_device_info"  style="display:none">
                        <div class="modal_container">
                            <div class="modal_head">
                                <img src="<?php echo base_url() ?>assets/images/back.svg" onclick="closeModal('modal_device_info')" alt="" srcset="">
                                        <div class="modal_head_name">
                                        Device Info
                                        </div>
                            </div>
                        <div class="modal_main">
                            <div class="deviceinfo">
                            
                                <div class="devices_upper">
                                    <div style="display: flex;gap: 20px;">

                                        <div class="countryimage"></div>
                                        <div class="deviceinfo">
                                            <div class="devicename">Device Name</div>
                                            <div class="imei">IMEI No.:715178587516</div>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <input  type="text" placeholder="Enter Device Name">
                            <select  type="text" placeholder="Enter Device Name">
                            <option value="in">India</option>    
                            </select>
                                <button class="btn" id="updateData" >Update Details</button>
                        </div>
                    </div>
                    
                    </div>
                    <!-- <div class="dd_head">
                        <img src="<?php echo base_url() ?>assets/images/back.svg" alt="" srcset="">
                        <div class="dd_head_name">
                            {{Device Name}}
                        </div>
                    </div>
                    <div class="devices_upper">
                        <div class="countryimage"></div>
                        <div class="deviceinfo">
                            <div class="devicename">Device Name</div>
                            <div class="imei">IMEI No.:715178587516</div>
                        </div>
                        <div class="status">Device is {ON}
                                <label class="switch">
                                    <input id='state' value='checked' type="checkbox">
                                    <span class="slider round"></span>
                                    </label>
                        </div>
                    </div>
                        <br>
                        <br>
                        <br>
                        <div class="devices_lower_left">
                                <div class="siminfo">
                                    <img src="<?php echo base_url() ?>assets/images/sim1.svg" class="simimg">
                                    <div class="simnumber">1239096</div>
                                </div>
                                <div class="phonenumber">Phone No.:7620661886 |&nbsp; <div class="isp"> Airtel</div></div>
                            </div>
                                <div class="line1"></div> 
                            <div class="tower">
                                <img src="<?php echo base_url() ?>assets/images/anteena.svg" class="anteena">
                                <div class="signal-icon strong ">
                                    <div class="signal-bar"></div>
                                    <div class="signal-bar"></div>
                                    <div class="signal-bar"></div>
                                </div>

                            </div>
                            <br>
                        <br>
                        <br> <br>
                        <br>
                        <br>
                        <div class="dd_edit">
                            <label class='dd_label' for="dd_name">Change Device Name</label>   
                            <input type="text" id="dd_name" class="dd_name">  
                        </div>
                        <br>
                        <br>
                        <div class="dd_edit">
                            <label class='dd_label' for="dd_name">Change Country</label>   
                            <select type="text" id="dd_name" class="dd_name"><option>India</option></select>
                            </div>
                        </div> -->
                <!-- </div> -->
        <!-- </div> -->
    </div>
    <?php $this->load->view('components/auth'); ?>

    <!-- <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script> -->
        <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>


        <script>
            var db = firebase.firestore();

            function init(){
                document.getElementById('right').classList.add="right_active"
                document.getElementById('rightint').hidden=false
            }
            function showModalAddDevice(){
                document.getElementById('modal_device_info').style="display:none";
                document.getElementById('modal_add_device').style="display:block";
                var ele=document.getElementById('right').classList.add("right_active")
            }

            
            // window.addEventListner('addDevice',()=>{
            // })
            function showModalDeviceInfo(){
                document.getElementById('modal_device_info').style="display:block";
                document.getElementById('modal_add_device').style="display:none";
                var ele=document.getElementById('right').classList.add("right_active")
            }
            
            function closeModal(v){
                document.getElementById(v).style="display:none";
                document.getElementById(v).style="display:none";
                var ele=document.getElementById('right').classList.remove("right_active")
            }
        </script>
    <!-- <div class="info skeleton"> -->

    <!-- </div> -->
    <script>
        var loader =document.getElementById("preloader");
        window.addEventListener("load",function(){
            loader.style.display="none";
            
        })
        //ADD DEVICE API FUNCTION
        // document.getElementById("addDevice").addEventListener("click", function (){
        //         document.getElementById('modal_loading').style="display:flex";
        //         $.ajax({
        //             type: "POST",
        //             url: "<?php echo base_url() ?>api/device/add",
        //             data: {
        //                 imei:document.getElementById('imei')
        //             },
        //             success: function(){
        //                 console.log("added");
        //             },
        //             dataType: dataType
        //             });
        //     });
        //UPDATE DEVICE API FUNCTION
        document.getElementById("updateData").addEventListener("click", function (){
                document.getElementById('modal_loading').style="display:flex";

            });

            async function getSubs(uid){
                return new Promise(function(resolve, reject) {
                    var as =getUid().then(function () {
                        var url=db.collection(`users/${uid}/subscriptions`);
                        url.get().then((querySnapshot) => {
                            querySnapshot.forEach((doc) => {
                                if (doc.exists) {
                                    $('#subscriptions').empty()
                                    // console.log("Document data:", doc.data());
                                    var data = doc.data();
                                    console.log(data);
                                    
                                    $('#subscriptions').append(`<div class="devices">
                            <div class="devices_upper">
                            <div style="display: flex;gap: 20px;">
                            
                            <div class="countryimage"></div>
                            <div class="deviceinfo">
                            <div class="devicename"  onclick="showModalDeviceInfo()">${data.name}</div>
                            <div class="imei">IMEI No.:${data.imei}</div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="devices_lower">
                            <div class="devices_lower_left">
                            <div class="siminfo">
                            <img src="<?php echo base_url() ?>assets/images/sim1.svg" class="simimg">
                            <div class="simnumber">${data.snum}</div>
                            </div>
                            <div class="phonenumber">Phone No.:${data.pnum} |&nbsp; <div class="isp"> Airtel</div></div>
                            </div>
                                <div class="line1"></div> 
                                <div class="tower">
                                <img src="<?php echo base_url() ?>assets/images/anteena.svg" class="anteena">
                                <div class="signal-icon strong ">
                                <div class="signal-bar"></div>
                                <div class="signal-bar"></div>
                                <div class="signal-bar"></div>
                                </div>
                                </div>
                                </div>
                                </div>`)
                                // return data
                                resolve(data);

                            } else {
                                // doc.data() will be undefined in this case
                                reject("No such document!");
                            }
                        })
                    });
                })
            });
            }
            
            async function getImei(uid){
                return new Promise(function(resolve, reject) {
                    var as =getUid().then(function () {
                        var url=db.collection(`users/${uid}/devices`);
                        url.get().then((querySnapshot) => {
                            $('#devices').empty() 
                            querySnapshot.forEach((doc) => {
                                if (doc.exists) {
                                    // console.log("Document data:", doc.data());
                                    var data = doc.data();
                                    console.log(data);
                                    
                                    $('#devices').append(`<div class="devices">
                            <div class="devices_upper">
                            <div style="display: flex;gap: 20px;">
                            
                            <div class="countryimage"></div>
                            <div class="deviceinfo">
                            <div class="devicename"  onclick="showModalDeviceInfo()">${data.name}</div>
                            <div class="imei">IMEI No.:${data.imei}</div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="devices_lower">
                            <div class="devices_lower_left">
                            <div class="siminfo">
                            <img src="<?php echo base_url() ?>assets/images/sim1.svg" class="simimg">
                            <div class="simnumber">${data.snum}</div>
                            </div>
                            <div class="phonenumber">Phone No.:${data.pnum} |&nbsp; <div class="isp"> Airtel</div></div>
                            </div>
                                <div class="line1"></div> 
                                <div class="tower">
                                <img src="<?php echo base_url() ?>assets/images/anteena.svg" class="anteena">
                                <div class="signal-icon strong ">
                                <div class="signal-bar"></div>
                                <div class="signal-bar"></div>
                                <div class="signal-bar"></div>
                                </div>
                                </div>
                                </div>
                                </div>`)
                                // return data
                                resolve(data);

                            } else {
                                // doc.data() will be undefined in this case
                                reject("No such document!");
                            }
                        })
                    });
                })
            });
            }
            async function getUid(){
                const user = firebase.auth().currentUser;
                return user.uid;
            }
            async function addImei(imei){
                
                // var uid=getUid()
                document.getElementById('modal_loading').style="display:flex";
                imei=parseInt(imei)
                addDetails();
                var uid = await getUid().then(function (response) {
			var url=`imei`;
			usercoll = db.collection(url).doc(response).update({
            imei: firebase.firestore.FieldValue.arrayUnion(imei)
        }).catch((error)=>{
			usercoll = db.collection(url).doc(response).set({
            imei: firebase.firestore.FieldValue.arrayUnion(imei)
        })})
        document.getElementById('loader').style="display:none";
        document.getElementById('success').style="display:flex";
        document.getElementById('imei').value="";
        setTimeout(() => {
            document.getElementById('modal_loading').style="display:none";
        }, 3000);
			console.log(usercoll)
		});
            }
            async function addDetails(){ {
		var now = new Date();
		// Create a new message object with the user's name, message, and timestamp
		var message = {
			imei: parseInt(document.getElementById('imei').value),
			name: document.getElementById('name').value,
			snum: parseInt(document.getElementById('snum').value),
			pnum: parseInt(document.getElementById('pnum').value)
		};
		var uid = await getUid().then(function (response) {
			var url=`users/${response}/devices/`;
			usercoll = db.collection(url).doc().set(message)
			console.log(usercoll)
            
		});
	};
}
        

firebase.auth().onAuthStateChanged( (user) => {
                if (user) {
                    var msg = getImei(user.uid).then(function(data) {
                        
                    })
                } else {
                    window.location = ("<?php echo base_url() ?>login")

                }
            })
    </script>

    
</body>

</html>