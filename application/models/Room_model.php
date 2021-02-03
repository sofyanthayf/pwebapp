<?php

class Room_model extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function roomList( $where = '' )
  {
    // semua daftar kamar
    $this->db->select('rm.room, rt.rtype, rt.rate, rv.dview, rv.addv, rate+(rate*addv) frate');
    $this->db->join('roomtype rt', 'rm.rtype = rt.kode');
    $this->db->join('views rv', 'rm.dview = rv.vcode');

    if( $where != '' ) $this->db->where( $where );

    $query = $this->db->get( 'rooms rm' );
    return $query->result_array();
  }

  public function roomrate()
  {
    $this->db->select('t.rtype, t.rate, COUNT(*) rooms');
    $this->db->from('rooms r');
    $this->db->join('roomtype t', 'ON(r.rtype=t.kode)');
    $this->db->group_by('r.rtype');

    $query = $this->db->get();
    return $query->result();
  }

}
