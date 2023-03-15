<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require __DIR__.'/../../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Firebase {

    protected $config   = array();
    protected $serviceAccount;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
    }

    
    public function init()
    {
        return $firebase = (new Factory)->withServiceAccount(__DIR__."/google-service-account.json")->withDatabaseUri('https://roamv-2632f-default-rtdb.firebaseio.com');
    }
}