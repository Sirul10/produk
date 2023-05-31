<?php

class Data_produk extends CI_Controller{
	public function index(){
		$data['products'] = $this->model_produk->tampil_data()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('data_produk', $data);
		$this->load->view('tamplates/footer');	
	}
	public function tambah_aksi()
	{
		 $title 		= $this->input->post('title');
		 $deskripsi 		= $this->input->post('deskripsi');
		 $price 		= $this->input->post('price');
		 $discountpercentage	= $this->input->post('discountpercentage');
		 $rating			= $this->input->post('rating');
		 $stock			= $this->input->post('stock');
		 $brand			= $this->input->post('brand');
		 $category			= $this->input->post('category');
		 $images 			= $_FILES['images']['name'];
		 if ($images =''){}else{
		 	$config ['upload_path'] = './uploads';
		 	$config ['allowed_types'] = 'jpg|jpeg|png|gif';

		 	$this->load->library('upload', $config);
		 	if(!$this->upload->do_upload('images')){
		 		echo "Gambar Gagal di Upload!";
		 	}else {
		 		$images = $this->upload->data('file_name');
		 	}
		  
		 }

		  $data = array (
		  	'title'   	   => $title,
		  	'deskripsi'    => $deskripsi,
		  	'price' => $price,
		  	'discountpercentage'     => $discountpercentage,
		  	'rating'	   => $rating,
		  	'stock'		=>$stock,
		  	'brand'		=>$brand,
		  	'category'	=>$category,
		  	'images'	   => $images
		  );

		  $this->model_produk->tambah_produk($data, 'products');
		  redirect('data_produk/index');
	}

	public function edit($id)
	{
		$where = array('id' =>$id);
		$data['products'] = $this->model_produk->edit_produk($where, 'products')->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('edit_produk', $data);
		$this->load->view('tamplates/footer');
	}

	public function update()
	{
		$id		= $this->input->post('id');
		$title 	= $this->input->post('title');
		$deskripsi	= $this->input->post('deskripsi');
		$price 	= $this->input->post('price');
		$discountpercentage = $this->input->post('discountpercentage');
		$rating = $this->input->post('rating');
		$stock = $this->input->post('stock');
		$brand = $this->input->post('brand');
		$category = $this->input->post('category');
		$images = $this->input->post('images');

		$data = array(
			'title'   	   => $title,
		  	'deskripsi'    => $deskripsi,
		  	'price' => $price,
		  	'discountpercentage'     => $discountpercentage,
		  	'rating'	   => $rating,
		  	'stock'		=>$stock,
		  	'brand'		=>$brand,
		  	'category'	=>$category,
		  	'images'	   => $images
		);

		$where = array(
			'id' => $id
		);

		$this->model_produk->update_data($where,$data, 'products');
		redirect('data_produk/index');
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