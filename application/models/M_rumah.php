<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_rumah extends CI_Model
{

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_rumah');
		$this->db->join('tbl_icon', 'tbl_icon.id_icon = tbl_rumah.id_icon', 'left');

		$this->db->order_by('id_rumah', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tbl_rumah', $data);
	}

	public function detail($id_rumah)
	{
		$this->db->select('*');
		$this->db->from('tbl_rumah');
		$this->db->join('tbl_icon', 'tbl_icon.id_icon = tbl_rumah.id_icon', 'left');
		$this->db->where('id_rumah', $id_rumah);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id_rumah', $data['id_rumah']);
		$this->db->update('tbl_rumah', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_rumah', $data['id_rumah']);
		$this->db->delete('tbl_rumah', $data);
	}
}

/* End of file M_wisata.php */
