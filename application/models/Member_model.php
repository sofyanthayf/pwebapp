<?php

class Member_model extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  function insertMember($data){
    $this->db->insert( 'members', $data );
  }



}
