<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:24
 */
class User extends CI_Controller
{
    /**
     * login page - hzy
     */
    public function login() {
        $this->session->user = array(
            'name' => 'hzycaicai2012',
            'password' => '12345',
            'id' => 1,
        );
        $data['title'] = 'test';
        $data['name'] = 'hzycaicai';
        $this->smarty3->assign('data', $data);
        $this->smarty3->display('user/test.html');
    }
}