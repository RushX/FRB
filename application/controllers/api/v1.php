<?php
defined('BASEPATH') or exit('No direct script access allowed');

class v1 extends CI_Controller
{


function index(){
    echo "ACCESS FORBIDDEN";
}

function sendMessage(){
    $payload = array(
        'imei' => (int)$_POST['imei'],
        'number'=> (int)($_POST['number']),
        'message'=> $_POST['message'],
        'type'=>(int)($_POST['type'])
      );
    $this->load->model('Mqtt');
    $this->Mqtt->send($payload);
}   

}   