<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sectoral extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	//Load Dependencies
	// 	$this->load->model('m_rumah');
	// 	$this->load->model('m_icon');
	// }

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Sektoral',
			// 'rumah'	=> $this->m_rumah->get_all_data(),

			'isi'	=> 'data_sectoral/v_index'
		);
		$this->load->view('layout21/v_wrapper', $data);
	}

	public function add()
	{
		$data = array(
			'title' => 'Tambah Data Sektoral',
			// 'rumah'	=> $this->m_rumah->get_all_data(),

			'isi'	=> 'data_sectoral/v_add'
		);
		$this->load->view('layout21/v_wrapper', $data);
	}
}

/* End of file Controllername.php */
