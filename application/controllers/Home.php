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
		$data['title'] = 'Welcome!';
		$this->load->view('templates/header', $data);
		$this->load->view('homepage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function login()
  {
		$data['title'] = 'Login!';
		$this->load->view('templates/header', $data);
		$this->load->view('loginpage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function dash()
  {
		$data['title'] = 'Login!';
		$this->load->view('templates/header', $data);
		$this->load->view('dashpage', $data);
		$this->load->view('templates/footer', $data);
	}

}
