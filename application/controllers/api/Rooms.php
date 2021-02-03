<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Rooms extends REST_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model('room_model');
    $this->load->model('member_model');
  }


  public function roomrate_get()
  {
    $data = $this->room_model->roomrate();
    $this->response( [ 'roomrate' => $data ] , 200 );
  }

  public function roomlist_get()
  {
    $where = '';
    if( null !== $this->get('lt') ){
      $lantai = $this->get('lt');
      $where = "room LIKE '" . $lantai . "__%'" ;
    }

    $data = $this->room_model->roomList( $where );
    $this->response( [ 'rooms' => $data ], 200 );
  }

  public function newmember_post()
  {
    $data = [
      'member_ID' => $this->post('id'),
      'nama' => $this->post('nama'),
      'alamat' => $this->post('alamat'),
      'kota' => $this->post('kota'),
      'negara' => $this->post('negara')
    ];

    $this->member_model->insertMember( $data );
  }


  public function test_get()
  {
    $msg = $this->get('msg');

    $this->response( [ 'response' => [
                                      'status' => 'OK',
                                      'msg' => $msg
                                     ]
                              ], 200 );
  }


}



 ?>
