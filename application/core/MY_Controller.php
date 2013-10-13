<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = '<small>帰郷日日調整さん:島根県津和野町</small>';
		$this->load->helper(array('my_layout', 'form'));
	}
}
