<?php
/**
* Model for recording user info: email, mobile number and lat/lon.
*/
class User extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //store data to db then text user for appt details
    function addUser($name, $number, $lat = 0, $lon = 0){
        return $msgid = $this->db->insert('users', array('user_name' => $name, 'user_number' => $number, 'user_lat' => $lat, 'user_lon' => $lon));
    }
}
?>