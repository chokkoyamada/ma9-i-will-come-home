<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = '帰省日調整さん - 海士町';
		$this->load->helper(array('my_layout', 'form'));
	}

}
