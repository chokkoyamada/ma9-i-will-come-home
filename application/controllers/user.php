<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{
		my_layout_view('user/index', $this->data);
	}
}
