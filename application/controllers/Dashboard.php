<?php

class Dashboard extends CI_Controller{

    public function index()	{
		$this->load->view('v_header');
        $this->load->view('v_home');
	}

}
?>