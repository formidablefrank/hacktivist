<?php
class Eventuser extends CI_Model{
  function __construct(){
      parent::__construct();
  }

  function getAll(){
    return $this->db->get('event_user');
  }

  function create($eventid, $userid, $typeid){
    return $this->db->insert('event_user',
      array('event_id' => $eventid,
        'user_id' => $userid,
        'type_id' => $typeid));
  }

  function update(){

  }
}
?>
