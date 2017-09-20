<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->pandayarjun();
	}
	/*
	function for home page
	*/		
	public function pandayarjun(){
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
	/*
	site page function
	*/
	public function microsoft_windows(){
		$this->load->view('includes/header');
		$this->load->view('microsoft_windows');
		$this->load->view('includes/footer');
	}
	public function microsoft_word(){
		$this->load->view('includes/header');
		$this->load->view('microsoft_word');
		$this->load->view('includes/footer');
	}
	public function microsoft_excel(){
		$this->load->view('includes/header');
		$this->load->view('microsoft_excel');
		$this->load->view('includes/footer');
	}
	public function microsoft_powerpoint(){
		$this->load->view('includes/header');
		$this->load->view('microsoft_powerpoint');
		$this->load->view('includes/footer');
	}
	public function email_internet(){
		$this->load->view('includes/header');
		$this->load->view('email_internet');
		$this->load->view('includes/footer');
	}
	public function html(){
		$this->load->view('includes/header');
		$this->load->view('html');
		$this->load->view('includes/footer');
	}
	public function tally(){
		$this->load->view('includes/header');
		$this->load->view('tally');
		$this->load->view('includes/footer');
	}			
			
	public function download_projects(){
		$this->load->view('includes/header');
		$this->load->view('download_projects');
		$this->load->view('includes/footer');
	}		
	public function tutorial(){
		$this->load->view('includes/header');
		$this->load->view('tutorial');
		$this->load->view('includes/footer');
	}	
	public function about_me(){
		$this->load->view('includes/header');
		$this->load->view('about_me');
		$this->load->view('includes/footer');
	}	
	public function login(){
		$this->load->view('app/includes/header');
		$this->load->view('app/login');
		$this->load->view('app/includes/footer');		
	}
}
