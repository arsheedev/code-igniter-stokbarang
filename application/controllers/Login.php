<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index(){
        $this->load->view('v_login');
    }

    public function action_login(){
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        $where = array(
            'username' => $user,
            'password' => $pass
        );

        $cekLogin = $this->m_login->cek_login($where)->num_rows();
        
        if($cekLogin > 0 ) {
            $sess_data = array(
                'username' => $user,
                'login' => 'OK'
            );

            $this->session->set_userdata($sess_data);
            redirect(base_url('dashboard'));
        } else {
            echo "<script>alert('Wrong Username or Password'); let tmpURL = window.location.href; let webURL = tmpURL.replace('/action_login', ''); window.location = webURL;</script>";
        }
    }

    public function action_logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}

?>