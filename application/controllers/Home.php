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
		$this->load->view('templates/home-nav', $data);
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

  public function register()
  {
		$data['title'] = 'Login!';
		$this->load->view('templates/header', $data);
		$this->load->view('registerpage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function dash()
  {
		$data['title'] = 'Dash!';
		$data['userevents'] = $this->result_table($this->user->get_events(1));
		$this->load->view('templates/header', $data);
		$this->load->view('dashpage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function events($param='')
  {
		if($this->input->post() && $param === 'create'){
			$name = $this->input->post();
			$result = $this->event->create();
		}
		$data['title'] = 'Events!';
		$data['events'] = $this->result_table($this->event->getAll());
		$this->load->view('templates/header', $data);
		$this->load->view('eventpage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function mapview(){
		$data['events'] = $this->result_table($this->event->getAll());
		$this->load->view('templates/header', $data);
		$this->load->view('mapview', $data);
		$this->load->view('templates/footer', $data);
	}

	function result_table($query){
      $table = array();
      foreach ($query->result() as $row) {
          $table[] = $row;
      }
      $query->free_result();
      return $table;
  }

}
