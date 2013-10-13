<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->load->helper(array('my_layout'));
	}

	public function index()
	{
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
