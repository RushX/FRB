
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Firebase_Model extends CI_Model
{
    private $firebase_init;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('firebase');
    }
    public function Auth($email, $plaintextpassword)
    { try{
            $firebase_init = $this->firebase->init();
            $auth = $firebase_init->createAuth();
            $signInResult = $auth->signInWithEmailAndPassword($email, $plaintextpassword);
            return $signInResult;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
}
