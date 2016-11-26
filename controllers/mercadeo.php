<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercadeo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Mercadeo/header');
		//$this->load->view('Mercadeo/menu');
		$this->load->view('Mercadeo/formregistro');

	}
}
