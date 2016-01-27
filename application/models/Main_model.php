<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	
	function developer_list()
	{
		$this->db->from('developers');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function job_list()
	{
		$this->db->select('a.id, a.description, b.description AS assign_to');
		$this->db->from('job_list a');
		$this->db->join('developers b', 'a.assign = b.id', 'left');
		$this->db->order_by('a.id', 'asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function job_grafik()
	{
		$this->db->select('description AS name, COUNT(description) AS y');
		$this->db->from('job_list');
		$this->db->group_by('description');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function get($type, $id)
	{
		$this->db->where('id', $id);
		$this->db->from($type);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}

	function insert($type, $data)
	{
		$this->db->insert($type, $data);
	}

	function update($type, $data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update($type, $data);
	}

	function delete($type, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($type);
	}
}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */