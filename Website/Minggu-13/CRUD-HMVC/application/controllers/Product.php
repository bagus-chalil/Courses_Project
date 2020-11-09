<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Product extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $product = $this->db->get('sekolah2')->result();
        } else {
            $this->db->where('id', $id);
            $product = $this->db->get('sekolah2')->result();
        }
        $this->response($product, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post() {
        $data = array(
                    'id'       => $this->post('id'),
                    'nama'     => $this->post('nama'),
                    'alamat'    => $this->post('alamat'));
        $insert = $this->db->insert('sekolah', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'       => $this->put('id'),
                    'nama'     => $this->put('nama'),
                    'alamat'   => $this->put('alamat'));
        $this->db->where('id', $id);
        $update = $this->db->update('sekolah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('sekolah');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>