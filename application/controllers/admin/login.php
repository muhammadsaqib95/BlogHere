<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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

        if( isset($_SESSION['user_id'])){
           redirect('admin/dashboard');
        }
        $data=[];
       
     if( isset($_SESSION['error'])){
       
            $data['error']=$_SESSION['error'];
        }
        else{
            $data['error']='no_error';
        }
        $this->load->view('Adminpanel/loginview',$data);
    }
    
    public function login_post(){
    
        if (isset($_POST)){
                $Email=$_POST['email'];
                $password=$_POST['password'];
                $query= $this->db->query("SELECT * FROM `user` WHERE `Email`= '$Email' AND`Password`= '$password'");
                if($query)
                {
                    //valid credentials
                    $result=$query->result_array();
                    $this->session->set_userdata('user_id', $result[0]['UserId']);
                    redirect('admin/Dashboard');
                }
                else{
                    //credentials invalid
                    $this->session->set_flashdata('error', 'invalid-data');
                    redirect('admin/login');
                }
        }
        else{
            die("INVALID INPUT");
        }
    }
    public function logout(){
        unset($_SESSION['user_id']);
        redirect('admin/login');
    }
    
    function signup(){
$this->load->view('adminpanel/signupview');

    }

    function signup_user(){
        // echo "<pre>";
        // print_r($_POST);
        // die();

        $this->form_validation->set_rules('first_name', 'First_name', 'trim|required|alpha');
        $this->form_validation->set_rules('last_name', 'Last_name', 'trim|required|alpha');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required|alpha');
        $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[5]|alpha');
        $this->form_validation->set_rules('country', 'Country', 'trim|required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|alpha_numeric');
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'trim|required|matches[password]|alpha_numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|numeric|min_length[11]|max_length[11]');
        if ($this->form_validation->run() == FALSE)
        {      
           
            // echo "<pre>";
            // print_r($data);
            //     
            // die("not");
                $this->load->view('adminpanel/signupview');
        }
        else
        {   
                // echo "<pre>";
                // print_r($_POST);
                // die("done");
                $F_name = $_POST['first_name'];$L_name = $_POST['last_name'];
                $email = $_POST['email'];$gender = $_POST['gender'];
                $mobile = $_POST['mobile'];$city = $_POST['city'];
                $country = $_POST['country'];$password = $_POST['password'];
                // $this->load->view('formsuccess');
                $data=  $this->db->query("SELECT * FROM `user`");
                $data=$data->result_array();
                // echo "<pre>";
                // print_r( $data);
                foreach( $data as $key => $value){
                    // print_r($value);
                    foreach( $value as $key1 => $value1){
                        print_r($value1);
                    if ($value1 == $email ){
                    // die("Already exist");
                    $this->session->set_flashdata('exist', 'yes');
                    redirect('admin/login/signup');
                        }}
                }
                // die("not exist");
                 $query = $this->db->query("INSERT INTO `user`( `FirstName`, `LastName`, `Email`, `Mobile`, `City`, `Country`, `Gender`, `Password`) 
                VALUES ('$F_name','$L_name','$email','$mobile','$city','$country','$gender','$password')");
                if($query){
                    redirect('admin/login');
                }
                else{
                    die("something goes wrong!");

                }

        }
    }
}

