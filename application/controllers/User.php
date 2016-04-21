<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "BaseController.php";
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:24
 */
class User extends BaseController
{
    public function _filter() {
        return array(
            '_loginFilter' => array('login'),
        );
    }

    public function _loginFilter() {
        var_dump($_GET);
    }

    /**
     * login page - hzy
     */
    public function login() {
        $this->session->user = array(
            'name' => 'hzycaicai',
            'password' => '111',
            'isAdmin' => true,
        );
        $this->smarty3->display('user/login.html');
    }
}