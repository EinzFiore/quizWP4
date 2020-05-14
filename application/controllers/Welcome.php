<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}

	function addData(){
		$this->load->model('dataProfile');

		$nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$this->foto = $this->dataProfile->uploadFoto();


		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = 'TRUE';
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $data_foto = $this->upload->data('file_name');

		$data  = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk,
			'foto' => $data_foto
		);

		$this->dataProfile->tambahData($data,'identitas');
		
		redirect(base_url());
		
	}
}
