<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		$data['developer'] = $this->Main_model->developer_list();
		$view['navbar'] = $this->load->view('include/navbar', '', TRUE);
		$view['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
		$view['content'] = $this->load->view('content/developer/list', $data, TRUE);
		$this->load->view('layout/home', $view);
	}

	public function insert()
	{
		$data = array(
			'description'	=>	$this->input->post('nama')
		);
		$this->Main_model->insert('developers', $data);
		redirect('developer', 'refresh');
	}

	public function edit($id)
	{
		$data['developer'] = $this->Main_model->get('developers', $id);
		$view['navbar'] = $this->load->view('include/navbar', '', TRUE);
		$view['sidebar'] = $this->load->view('include/sidebar', '', TRUE);
		$view['content'] = $this->load->view('content/developer/edit', $data, TRUE);
		$this->load->view('layout/home', $view);
	}

	public function update()
	{
		$data = array(
			'id'			=>	$this->input->post('id'),
			'description'	=>	$this->input->post('nama')
		);
		$this->Main_model->update('developers', $data);
		redirect('developer', 'refresh');
	}

	public function delete($id)
	{
		$this->Main_model->delete('developers', $id);
		redirect('developer', 'refresh');
	}
}

/* End of file Developer.php */
/* Location: ./application/controllers/Developer.php */