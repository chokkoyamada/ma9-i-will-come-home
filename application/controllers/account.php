<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->load->helper(array('my_layout'));
	}

	public function index()
	{
		my_layout_view('account/index', $this->data);
	}
}
