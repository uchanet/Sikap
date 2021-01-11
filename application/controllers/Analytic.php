<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analytic extends CI_Controller
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
			'title' => 'Data Analytic',
			// 'rumah'	=> $this->m_rumah->get_all_data(),

			'isi'	=> 'data_analytic/v_index'
		);
		$this->load->view('layout21/v_wrapper', $data);
	}
}

/* End of file Controllername.php */
