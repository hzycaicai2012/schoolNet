<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 0:01
 */
class Home extends CI_Controller {
    public function index() {
        if (!$this->user->isLogin()) {
            redirect('/user/login');
        } else {
            var_dump($this->user->getCurrentUser());
        }
    }
}