<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('statis/header');
		$this->load->view('home/home');
		$this->load->view('statis/footer');
	}

	public function cosine()
	{
		$this->load->view('statis/header');
		$this->load->view('home/cosine');
		$this->load->view('statis/footer');
	}

	public function algoritma()
	{

		$data = $this->input->post('teks_jawaban');
		echo json_encode($data);
		// $data = str_replace(array("\r", "\n", "  "), ' ', $data); //menghilangkan enter
		// $data = strtolower($data); //merubah semua kata menjadi huruf kecil

		// $data = str_replace('"', "", $data);
		// $data = str_replace("'", "", $data);
		// $data = str_replace(str_split('~`!@#$%^&()-+[\/:*?<>|]~.'),"", $data);

		// $arr_data = explode(" ", $data);

		// echo json_encode($arr_data);

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */