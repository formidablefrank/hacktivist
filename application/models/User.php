<?php
/**
* Model for recording user info: email, mobile number etc.
*/
class User extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function create($name, $number, $address, $email, $fbid){
        return $this->db->insert('users', array('user_name' => $name, 'user_number' => $number, 'user_lat' => $lat, 'user_lon' => $lon));
    }

    function getAll(){
      return $this->db->get('users');
    }

    function get($userid){
      return $this->db->get_where('users', array('user_id' => $userid), 1);
    }
}
?>
