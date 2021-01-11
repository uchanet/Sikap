<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_rumah');
		$this->load->model('m_icon');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Spatial',
			'rumah'	=> $this->m_rumah->get_all_data(),

			'isi'	=> 'rumah/v_index'
		);
		$this->load->view('layout21/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('alamat', 'alamat', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('kec', 'Kecamatan', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('kab', 'Kabupaten', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('prov', 'Provinsi', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'title' => 'Input Data Rumah',
					'icon'	=> $this->m_icon->get_all_data(),
					'error_upload' => $this->upload->display_errors(),
					'isi'	=> 'rumah/v_add'
				);
				$this->load->view('layout21/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_tempat' => $this->input->post('nama_tempat'),
					'alamat' => $this->input->post('alamat'),
					'desa' => $this->input->post('desa'),
					'kec' => $this->input->post('kec'),
					'kab' => $this->input->post('kab'),
					'prov' => $this->input->post('prov'),
					'deskripsi' => $this->input->post('deskripsi'),
					'latitude' => $this->input->post('latitude'),
					'longitude' => $this->input->post('longitude'),
					'id_icon' => $this->input->post('id_icon'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_rumah->add($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan !!!');
				redirect('rumah');
			}
		}
		$data = array(
			'title' => 'Input Data Rumah',
			'icon'	=> $this->m_icon->get_all_data(),
			'isi'	=> 'rumah/v_add'
		);
		$this->load->view('layout21/v_wrapper', $data, FALSE);
	}

	public function edit($id_rumah)
	{
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('alamat', 'alamat', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('kec', 'Kecamatan', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('kab', 'Kabupaten', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('prov', 'Provinsi', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'title' => 'Edit Data Rumah',
					'icon'	=> $this->m_icon->get_all_data(),
					'rumah' => $this->m_rumah->detail($id_rumah),
					'error_upload' => $this->upload->display_errors(),
					'isi'	=> 'rumah/v_edit'
				);
				$this->load->view('layout21/v_wrapper', $data, FALSE);
			} else {
				// jika ada pergantian diganti
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_rumah'	=> $id_rumah,
					'nama_tempat' => $this->input->post('nama_tempat'),
					'alamat' => $this->input->post('alamat'),
					'desa' => $this->input->post('desa'),
					'kec' => $this->input->post('kec'),
					'kab' => $this->input->post('kab'),
					'prov' => $this->input->post('prov'),
					'deskripsi' => $this->input->post('deskripsi'),
					'latitude' => $this->input->post('latitude'),
					'longitude' => $this->input->post('longitude'),
					'id_icon' => $this->input->post('id_icon'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_rumah->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
				redirect('rumah');
			}
			// jika foto tidak diganti
			$data = array(
				'id_rumah'	=> $id_rumah,
				'nama_tempat' => $this->input->post('nama_tempat'),
				'alamat' => $this->input->post('alamat'),
				'desa' => $this->input->post('desa'),
				'kec' => $this->input->post('kec'),
				'kab' => $this->input->post('kab'),
				'prov' => $this->input->post('prov'),
				'deskripsi' => $this->input->post('deskripsi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'id_icon' => $this->input->post('id_icon'),
			);
			$this->m_rumah->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
			redirect('rumah');
		}
		$data = array(
			'title' => 'Edit Data User',
			'rumah' => $this->m_rumah->detail($id_rumah),
			'isi'	=> 'rumah/v_edit'
		);
		$this->load->view('layout21/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_rumah)
	{
		$data = array('id_rumah' => $id_rumah);
		$this->m_rumah->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('rumah');
	}
}

/* End of file Controllername.php */
