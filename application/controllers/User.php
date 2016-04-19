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
        $data['title'] = 'test';
        $data['name'] = 'hzycaicai';
        $this->cismarty->assign('data', $data);
        $this->cismarty->display('user/test.html');
    }
}