<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends MY_Controller {

	public function index()
	{
		my_layout_view('event/index', $this->data);
	}
}
