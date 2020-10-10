<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
      
        $query=$this->db->query("SELECT * FROM `blog` ORDER by `b_Id` DESC");
        if ($query){
            $data['blogs']=$query->result_array();
              $this->load->view('home', $data);
            // echo "<pre>";
            // print_r($data);
            // die();

        }
        else{
            die("not data");
        }

    }
    function blogview($id){
        // echo "<pre>";
        // print_r($id);
        $query=$this->db->query("SELECT * FROM `blog` where `b_Id` = '$id'");
        if ($query){

            $data['blog']=$query->result_array();
            $this->load->view('blogview', $data);
            // echo "<pre>";
            // print_r($data);
            // die();

        }
        else{
            die("not data");
        }
       
        //print_r($result);
        // die();
        // $this->load->view('blogview');
    }

}
?>