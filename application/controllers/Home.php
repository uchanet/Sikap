<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rumah');
		$this->load->model('m_json');
	}

	public function index()
	{
		$data = array(
			'title' => 'Pemetaan',
			'rumah' => $this->m_rumah->get_all_data(),
			'isi'	=> 'v_home'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function mapjson()
	{
		$data = array(
			'title' => 'Map JSON',
			'json' => $this->m_json->get_json(),
			'isi'	=> 'v_mapjson'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function rumah()
	{
		$data = array(
			'title' => 'List Rumah',
			'rumah' => $this->m_rumah->get_all_data(),
			'isi'	=> 'v_rumah'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function detail($id_rumah)
	{
		$rumah = $this->m_rumah->detail($id_rumah);
		$data = array(
			'rumah' => $rumah,
			'title' =>  $rumah->nama_tempat,
			'isi'	=> 'v_detail'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function about()
	{
		$data = array(
			'title' => 'About',
			'isi'	=> 'v_About'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
}
