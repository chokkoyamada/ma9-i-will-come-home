<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	public function index(){
		redirect("main");
	}
}
