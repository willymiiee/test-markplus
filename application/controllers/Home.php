<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		$data['job'] = json_encode($this->Main_model->job_grafik(), JSON_NUMERIC_CHECK);
		$view['navbar'] = $this->load->view('include/navbar', '', TRUE);
		$view['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
		$view['content'] = $this->load->view('content/grafik', $data, TRUE);
		$this->load->view('layout/home', $view);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */