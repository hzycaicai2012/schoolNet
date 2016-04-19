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
        $this->cismarty->assign('data', $data);
        $this->cismarty->display('user/test.html');
    }
}
