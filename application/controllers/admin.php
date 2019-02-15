<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	
	// 	// if($this->session->userdata('status') != "login"){
	// 	// 	redirect(base_url("registration_form"));
	// 	// }
	// }

	public function index(){
		$this->load->view('homepage');
	}

	public function homepage()
	{
		$this->load->view('homepage');
	}

	public function calendar()
	{
		$this->load->view('calendar');
	}

	public function TOD_Reg()
	{
		$this->load->view('TOD_Reg');
	}

	public function ADS_table()
	{
		$this->load->view('ADS_table');
	}

	
}
