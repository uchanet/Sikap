<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rumah');
	}

	public function index()
	{
		$data = array(
			'title' => 'Admin',
			'wisata' => $this->m_rumah->get_all_data(),
			'isi'	=> 'v_admin'
		);
		$this->load->view('layout21/v_wrapper', $data, FALSE);
	}
}
