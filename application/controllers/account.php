<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller {

	public function index()
	{
		my_layout_view('account/index', $this->data);
	}
}
