<?php

class Dashboard extends CI_Controller{

  public function index()	{
    $this->is_login();
		$this->load->view('v_header');
    $this->load->view('v_home');
	}

  private function is_login() {
    if (!$this->session->userdata('login')) {
      return redirect(base_url());
    }
  }
}
?>