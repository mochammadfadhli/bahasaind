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
		// get the form input value
		$doc = strtolower($this->input->post('teks_jawaban'));
		$doc = str_replace(array("\r", "\n", "  "), ' ', $doc);
		$doc = str_replace(str_split('~`!@#$%^&()-+[\/:*?<>|]~._='),"", $doc);
		$doc = str_replace('"', "", $doc);
		$doc = str_replace("'", "", $doc);
		$doc = explode(" ",$doc);
		$doc = array_count_values($doc);

		$term = array();
		
		// listing lagi term2 di jawaban. jika belum ada di $term, masuk. jika sudah ada, nggk usah masuk
		foreach ($doc as $key => $value) {
			if (!array_key_exists($key, $term)) {
				$term[$key] = "";
			}
		}
		
		// get kunci jawaban dari db sekalian listing term2 yang terkandung
		$kunci_jawaban_dari_db = $this->db->get("unit_".$this->input->post("nomor_unit"))->result();
		foreach ($kunci_jawaban_dari_db as $key => $value) {
			$kunci_jawaban_untuk_dikoreksi[$value->Term] = intval($value->Jumlah);
			if (!array_key_exists($value->Term, $term)) {
				$term[$value->Term] = "";
			}
		}


		// hitung TF (Q dan Doc) beserta DF nya
		$term_frequency = array("q"=>array(),"doc"=>array());
		$document_frequnecy = array();
		$key_not_exist = array("key_not_exist"=>array());
		foreach ($term as $key => $value) {
			
			// jika key term ada didalam $kunci_jawban
			if (array_key_exists($key, $kunci_jawaban_untuk_dikoreksi)) {
				$status_q = 1;
				array_push($term_frequency["q"], $kunci_jawaban_untuk_dikoreksi[$key]);
			}else{
				$status_q = 0;
				array_push($term_frequency["q"], 0);
			}


			if (array_key_exists($key, $doc)) {
				$status_doc = 1;
				array_push($term_frequency["doc"], $doc[$key]);
			}else{
				$status_doc = 0;
				array_push($term_frequency["doc"], 0);
			}

			if ($status_q && $status_doc) {
				array_push($document_frequnecy, 2);
			}else{
				array_push($document_frequnecy, 1);
			}
		}

		// hitung IDF log
		$idf_log = array();
		foreach ($document_frequnecy as $key => $value) {
			// $idf_log[$key] = $value;
			$idf_log[$key] = log(2/$value,10);
			$idf_log[$key] = $idf_log[$key] + 1;
		}

		// hitung TF*IDF
		$tf_idf = array("q"=>array(),"doc"=>array());
		foreach ($idf_log as $key => $value) {
			array_push($tf_idf["q"], $term_frequency["q"][$key]* $value);
			array_push($tf_idf["doc"], $term_frequency["doc"][$key]* $value);
		}

		// perkalian skalar antara tiap dokumen dengan kunci jawaban sekalian dengan menghitung hitung panjang vektor
		$hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban = array();
		$jumlah_hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban = 0;
		$panjang_vektor = array("q"=>array(),"doc"=>array());
		$jumlah_panjang_vektor_q = 0;
		$jumlah_panjang_vektor_doc = 0;
		foreach ($tf_idf["q"] as $key => $value) {
			$temp = ($tf_idf["q"][$key] * $tf_idf["doc"][$key]);
			array_push($hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban, $temp);
			$jumlah_hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban += $temp;
			
			$temp = pow($value, 2);
			array_push($panjang_vektor["q"], $temp);
			$jumlah_panjang_vektor_q += $temp;

			$temp = pow($tf_idf["doc"][$key], 2);
			array_push($panjang_vektor["doc"], $temp);
			$jumlah_panjang_vektor_doc += $temp;
		}
		$sqrt_jumlah_panjang_vektor_doc = sqrt($jumlah_panjang_vektor_doc);
		$sqrt_jumlah_panjang_vektor_q = sqrt($jumlah_panjang_vektor_q);

		$temp = $sqrt_jumlah_panjang_vektor_q*$sqrt_jumlah_panjang_vektor_doc;
		$hasil_cosine = array($temp,$jumlah_hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban/$temp);

		$return = array(
			"term" => $term,
			"tf" => $term_frequency,
			"df" => $document_frequnecy,
			"idf_log" => $idf_log,
			"tf-idf" => $tf_idf,
			"hasil perkalian skalar" => $hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban,
			"jumlah hasil perkalian skalar" => $jumlah_hasil_perkalian_skalar_dokumen_dgn_kunci_jawaban,
			"panjang vektor" => $panjang_vektor,
			"sqrt vektor doc" => $sqrt_jumlah_panjang_vektor_doc,
			"sqrt vektor q" => $sqrt_jumlah_panjang_vektor_q,
			"hasil cosine" => $hasil_cosine
		);
		echo json_encode($return,JSON_PRETTY_PRINT);
	}

}

/* End of file Home.php */
		/* Location: ./application/controllers/Home.php */