<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		$data['job'] = $this->Main_model->job_list();
		$data['developer'] = $this->Main_model->developer_list();
		$view['navbar'] = $this->load->view('include/navbar', '', TRUE);
		$view['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
		$view['content'] = $this->load->view('content/job/list', $data, TRUE);
		$this->load->view('layout/home', $view);
	}

	public function insert()
	{
		$data = array(
			'description'	=>	$this->input->post('deskripsi'),
			'assign'		=>	$this->input->post('developer')
		);
		$this->Main_model->insert('job_list', $data);
		redirect('job', 'refresh');
	}

	public function edit($id)
	{
		$data['job'] = $this->Main_model->get('job_list', $id);
		$data['developer'] = $this->Main_model->developer_list();
		$view['navbar'] = $this->load->view('include/navbar', '', TRUE);
		$view['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
		$view['content'] = $this->load->view('content/job/edit', $data, TRUE);
		$this->load->view('layout/home', $view);
	}

	public function update()
	{
		$data = array(
			'id'			=>	$this->input->post('id'),
			'description'	=>	$this->input->post('deskripsi'),
			'assign'		=>	$this->input->post('developer'),
		);
		$this->Main_model->update('job_list', $data);
		redirect('job', 'refresh');
	}

	public function delete($id)
	{
		$this->Main_model->delete('job_list', $id);
		redirect('job', 'refresh');
	}
}

/* End of file Job.php */
/* Location: ./application/controllers/Job.php */