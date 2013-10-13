<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->data['me'] = array(
			false,
			false,
			false,
			false,
			true,
			true,
			true
		);

		$this->data['users'] = array(
			array(
				array("friend"=> true),
				array("friend"=> true),
				array("friend"=> true),
				array("friend"=> false)
			),
			array(
				array("friend"=> true),
				array("friend"=> true),
				array("friend"=> true)
			),
			array(
				array("friend"=> true),
				array("friend"=> false),
				array("friend"=> false)
			),
			array(),
			array(
				array("friend"=> false),
				array("friend"=> false)
			),
			array(),
			array(
				array("friend"=> true)
			)
		);
		$this->data['events'] = array(
			array(
				array("public"=> true),
				array("public"=> true),
			),
			array(
			),
			array(
				array("public"=> true),
				array("public"=> false),
				array("public"=> false)
			),
			array(
				array("public"=> true),
				array("public"=> true)
			),
			array(
				array("public"=> false),
				array("public"=> false)
			),
			array(
				array("public"=> false)
			),
			array(
				array("public"=> true)
			)
		);
		my_layout_view('main/index', $this->data);
	}

	public function create_event()
	{
		my_layout_view('main/create_event', $this->data);
	}

	public function create_schedule()
	{
		my_layout_view('main/create_schedule', $this->data);
	}

	public function select_week()
	{
		my_layout_view('main/select_week', $this->data);
	}
}
