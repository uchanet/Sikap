<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graphic extends CI_Controller
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
			'title' => 'Grafik Data Desa',
			// 'rumah'	=> $this->m_rumah->get_all_data(),

			'isi'	=> 'graphic/v_index'
		);
		$this->load->view('chart/v_wrapper', $data);
	}
}

/* End of file Controllername.php */
