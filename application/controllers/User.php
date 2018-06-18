<?php
Class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('userModel');
    }

    public function tambahuser(){
    	$this->load->view('templates/header');
        $this->load->view('templates/header_form');
        $this->load->view('user/register');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_form');
    }

    public function loginuser(){
    	$this->load->view('templates/header');
        $this->load->view('templates/header_form');
        $this->load->view('user/login');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_form');
    }

    public function register(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email','required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

         if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/header_form');
            $this->load->view('user/register');
            $this->load->view('templates/footer');
            $this->load->view('templates/footer_form');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->userModel->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

            redirect('crud');
        }

	}

	public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('user/login', $data);
            $this->load->view('templates/footer');
        } else {
	        $username = $this->input->post('username');
		    $password = md5($this->input->post('password'));
		    $user_id = $this->userModel->login($username, $password);

		    if($user_id){
		        $user_data = array(
		            'user_id' => $user_id,
		            'username' => $username,
		            'logged_in' =>true,
		        	'level' =>$this->user_model->get_user_level($user_id));
			    $this->session->set_userdata($user_data);
		        $this->session->set_flashdata('user_loggedin', 'You are now logged in'.$username);
		        //redirect('crud');
		        redirect('user/dashboard');
	    	} else {
		        $this->session->set_flashdata('login_failed', 'Login is invalid');
		        redirect('user/login');
	    	}       
	    }
	}

	public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('user/loginuser');
    }

    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');
        $data['user'] = $this->user_model->get_user_details( $username );
        $this->load->view('templates/header');
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/footer');
    }

}
?>