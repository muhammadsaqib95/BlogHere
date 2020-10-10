<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $query=$this->db->query("SELECT * FROM `blog` order by b_Id desc");
        $data['result']=$query->result_array();
		$this->load->view('adminpanel/viewblog',$data);
    }
    public function addblog()
	{
       
        

         $this->load->view('adminpanel/addblog');
        //  $this->load->view('Adminpanel/loginview',$data);
    }
    public function addblog_post()
	{
        // print_r($_POST);
        // print_r($_FILES);
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('desc', 'Desc', 'trim|required');
     

        if($this->form_validation->run() == true){
            // $Title=$_POST['title'];
            // $Tesc=$_POST['desc'];
            // $this->session->set_flashdata('Title',$_POST['title']);
            // $this->session->set_flashdata('Desc',$_POST['desc']);

        if($_FILES){
            // for image 
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
            

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('file')) {
                        // image not passed

                        $error['img_er'] = array('error' => $this->upload->display_errors());
                        // echo "<pre>";
                        // print_r( $error);
                        // die("No Image");
                        //   $this->load->view('addblog', $error);
                          $this->session->set_flashdata('img','no');
                          $this->addblog();
                        //   $this->load->view('adminpanel/addblog');
                        //  die("ERROR");


                }
                else
                {
                         $data = array('upload_data' => $this->upload->data());
                        //    echo  "<pre>";
                        //     print_r($data);
                         
                        //    echo $data['upload_data']['file_name'];


                           $fileurl="assets/upload/".$data['upload_data']['file_name'];
                           $title=$_POST['title'];
                           $desc=$_POST['desc'];

                            $query = $this->db->query("INSERT INTO `blog`(`b_Title`, `b-Discription`, `b_Img`)
                            VALUES ('$title','$desc','$fileurl')");

                            if($query){
                                $this->session->set_flashdata('inserted','yes');
                                redirect('admin/blog');
                            }
                            else{
                                $this->session->set_flashdata('inserted','no');
                                redirect('admin/blog');
                            }



                       // $this->load->view('upload_success', $data);
                }
        }
        else{
            //image not passed
        
        }
    }
    else{

        $this->load->view('adminpanel/addblog');
    }

    }
    
    function edit_blog($id){
        // print_r($_POST);
        // die();
        $query = $this->db->query("SELECT * FROM `blog` WHERE `b_Id`='$id'");
        $data['result'] = $query->result_array();
        // echo "<pre>";
        // print_r($data);
        $this->load->view('adminpanel/editblog',$data);
    }
    function delete_blog(){
        // print_r($_POST);
        $delete_id= $_POST['delete_id'];
        $query = $this->db->query("DELETE FROM `blog` WHERE `b_Id` = '$delete_id'");
        if ($query){
            echo "deleted";
        }
        else{
            "notdeleted";
        }
    }
    function editblog_post(){
        // echo "<pre>";
        // print_r($_POST);
        // // Print_r($_FILES);
        // die();


        if ( $_FILES['file']['name'] ) {
            //image passed
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
  
                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('file')) {


                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('uploadform', $error);
                        //  die("ERROR");


                }
                else
                {
                         $data = array('upload_data' => $this->upload->data());



                           $fileurl="assets/upload/".$data['upload_data']['file_name'];
                           $title=$_POST['title'];
                           $desc=$_POST['desc'];
                           $b_id=$_POST['blog_id'];
                           $b_status=$_POST['publish-unpublish'];

                            $query = $this->db->query("UPDATE `blog` SET `b_Title`='$title',`b-Discription`='$desc',
                            `b_Img`='$fileurl', `b_Status`='$b_status'  WHERE `b_Id`='$b_id'");

                            if($query){
                                $this->session->set_flashdata('updated','yes');
                                redirect('admin/blog');
                            }
                            else{
                                $this->session->set_flashdata('updated','no');
                                redirect('admin/blog');
                            }

                }
        }
        else{
            //image not passed
            $title=$_POST['title'];
            $desc=$_POST['desc'];
            $b_id=$_POST['blog_id'];
            $b_status=$_POST['publish-unpublish'];

             $query = $this->db->query("UPDATE `blog` SET `b_Title`='$title',`b-Discription`='$desc', 
              `b_Status`='$b_status'    WHERE `b_Id`='$b_id'");

            if($query){
                $this->session->set_flashdata('updated','yes');
                redirect('admin/blog');
            }
            else{
                $this->session->set_flashdata('updated','no');
                redirect('admin/blog');
            }

        }

    }

    function search(){


        if($_POST['search']){
            // echo "<pre>";
            // print_r($_POST);
            // die();
            $value = $_POST['search'];
            $query = $this->db->query("SELECT  `b_Id`, `b_Img`,  `b_Title`, `b-Discription`,`b_Title` FROM `blog` WHERE `b_Title` LIKE '%$value%'
            or `b-Discription` LIKE '%$value%' ORDER by `b_Id` DESC ");
            $data=[];
            if($query){
                //something return
            //     echo "<pre>";
            // print_r($query->result_array());
            // die();
            $data['result']=$query->result_array();
            $this->load->view('adminpanel/viewblog',$data);

            }
            else{
                //nothing found
            }
        }
        else{
           redirect('admin/blog');
        }
    }
}
