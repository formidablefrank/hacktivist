<?php

class Event extends CI_Model{
  function __construct(){
    parent::__construct();
  }

  function getAll(){
    return $query = $this->db->query("SELECT * FROM events NATURAL JOIN categories NATURAL JOIN ngos NATURAL JOIN statuses");
  }

  function create($name, $desc, $categoryid, $ngoid, $tokens, $start, $end, $address, $lat, $lon, $limit, $statusid){
    return $this->db->insert('events',
      array('event_name' => $name,
        'event_details' => $desc,
        'category_id' => $categoryid,
        'ngo_id' => $ngoid,
        'event_tokens' => $tokens,
        'event_start' => $start,
        'event_end' => $end,
        'event_address' => $address,
        'event_long' => $lon,
        'event_lat' => $lat,
        'event_limit' => $limit,
        'status_id' => $statusid));
  }

  function update($eventid, $name, $desc, $categoryid, $ngoid, $tokens, $start, $end, $address, $lat, $lon, $limit, $statusid, $milestone){
    return $this->db->update('events',
      array('event_name' => $name,
        'event_details' => $desc,
        'category_id' => $categoryid,
        'ngo_id' => $ngoid,
        'event_tokens' => $tokens,
        'event_start' => $start,
        'event_end' => $end,
        'event_address' => $address,
        'event_long' => $lon,
        'event_lat' => $lat,
        'event_limit' => $limit,
        'status_id' => $statusid,
        'event_milestone' => $milestone),
      array('event_id' => $eventid));
  }

  function get($eventid){
    return $this->db->query("SELECT * FROM events NATURAL JOIN categories NATURAL JOIN ngos NATURAL JOIN statuses WHERE event_id = '$eventid'")->row();
  }

}

?>
