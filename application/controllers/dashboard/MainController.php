<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->library('firebase');
		// $firebase = $this->firebase->init();
		// $database = $firebase->createDatabase();
		// $reference = $database->getReference('/main');
		// $snapshot = $reference->getValue();
		// $this->load->model('Firebase_Model');
		// $auth=$this->Firebase_Model->Auth($email,$clearTextPassword);
		// echo ($auth);
		$this->load->view('dashboard/dash');
	}
	public function calls()
	{
		$this->load->view('dashboard/calls');
	}
	public function messages()
	{
		$this->load->view('dashboard/messages');
	}
	public function settings()
	{
		$this->load->view('dashboard/settings');
	}
	public function sendMessage(){
		
	}

}
