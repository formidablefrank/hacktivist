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
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$data['title'] = 'Leaflet';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/home-nav', $data);
		$this->load->view('homepage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function login()
  {
		$data['title'] = 'Login | Leaflet';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('loginpage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function register()
  {
		$data['title'] = 'Register | Leaflet';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('registerpage', $data);
		$this->load->view('templates/footer', $data);
	}

  public function dash()
  {
    $data['title'] = 'Dashboard | Leaflet';
    $data['user_id'] = 1;
    $data['title'] = 'Leaflet | Dash';
    $data['userevents'] =  $this->result_table($this->event->getAll());
    $this->load->view('templates/header', $data);
    $this->load->view('templates/main-nav', $data);
    $this->load->view('dashpage', $data);
    $this->load->view('templates/footer', $data);
  }

  public function org()
  {
    $data['title'] = 'Dashboard | Leaflet';
    $data['title'] = 'Leaflet | Org Dash';
    $data['userevents'] =  $this->result_table($this->ngo->get_events(1));
    $data['ngo'] =  $this->result_table($this->ngo->get(1));
    $this->load->view('templates/header', $data);
    $this->load->view('templates/main-nav-organizer', $data);
    $this->load->view('orgdashpage', $data);
    $this->load->view('templates/footer', $data);
  }

  public function event($eventid)
  {
		$data['user_id'] = 1;
		$data['event'] = $this->event->get($eventid);
		$data['title'] = 'Leaflet | View Event';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('eventpage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function create(){
		if($this->input->post){
			$this->event->create();
		}
		$data['title'] = 'Leaflet | Create Event';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('createevent', $data);
		$this->load->view('templates/footer', $data);
	}

	public function join($user_id, $event_id){
		$data['title'] = 'Leaflet | View Event';
		// $this->eventuser->create($userid, $eventid, 1);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('joinpage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function events(){
		$data['user_id'] = 1;
		$data['title'] = 'Events | Leaflet';
		$data['events'] = $this->result_table($this->event->getAll());
    $this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('eventlistpage', $data);
    $this->load->view('templates/footer', $data);
	}

	public function mapview(){
		$data['user_id'] = 1;
		$data['title'] = 'Map';
		$data['events'] = $this->result_table($this->event->getAll());
    $this->load->view('templates/header', $data);
     $this->load->view('templates/main-nav', $data);
		$this->load->view('mapview', $data);
    $this->load->view('templates/footer', $data);
	}

	public function leaderboard(){
		$data['title'] = 'Leaderboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/main-nav', $data);
		$this->load->view('leaderpage', $data);
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
