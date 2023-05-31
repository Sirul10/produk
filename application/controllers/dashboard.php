<?php

/**
 * 
 */
class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('tamplates/footer');
	}

	public function lihat_data($id)
	{
		$data['products'] = $this->model_produk->lihat_data($id);
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('lihat_data', $data);
		$this->load->view('tamplates/footer');
	}
	 
}