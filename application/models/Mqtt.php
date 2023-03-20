<?php
require_once FCPATH. 'vendor/autoload.php';

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

class Mqtt extends CI_Model
{
    private $mqtt;
    public function __construct()
    {


        // $server   = 'mqtt.flespi.io';
        $server   = 'broker.uniolabs.in';
        $port     = 1883;
        $clientId = "" . (rand(5, 15)) . "";
        $username = '1';
        $password = '';
        $clean_session = true;
        $mqtt_version = MqttClient::MQTT_3_1_1;

        $connectionSettings = (new ConnectionSettings)
            ->setUsername($username)
            ->setPassword($password)
            ->setKeepAliveInterval(60)
            ->setLastWillTopic('emqx/test/last-will')
            ->setLastWillMessage('client disconnect')
            ->setLastWillQualityOfService(0);


        $this->mqtt = new MqttClient($server, $port, $clientId, $mqtt_version);

        $this->mqtt->connect($connectionSettings, $clean_session);
    }

    // $mqtt->subscribe('emqx/test', function ($topic, $message) {
    //     echo "Received message on topic [%s]: %s\n", $topic, $message;
    // }, 0);
    function send($payload)
    {

        $this->mqtt->publish(
            // topic
            "unio_sms",
            json_encode($payload, JSON_UNESCAPED_SLASHES),
            // payload
            // qos
            0,
            // retain
            false
        );
        echo "msg sent\n";
    }
}
