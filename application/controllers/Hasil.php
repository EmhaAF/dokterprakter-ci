<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {
	
	public function index()
	{
		$this->load->view('hasil');
	}

	public function beli()
	{
		$this->load->view('obat');
	}
}
