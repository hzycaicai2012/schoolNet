<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function login() {
        $data['title'] = 'test';
        $data['name'] = 'hzycaicai';
        $this->smarty3->assign('data', $data);
        $this->smarty3->display('user/test.html');
    }
}
