<?php
require_once "BaseController.php";
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/24
 * Time: 10:55
 */
class Admin extends BaseController {
    public function _filter() {
        return array(
            '_adminFilter' => array('index'),
        );
    }

    public function _adminFilter() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0 || $user['is_admin'] <= 0) {
            redirect('/user/login');
        }
    }

    public function index() {
        $this->smarty3->assign('nav_index', 'admin');
        $this->smarty3->display('admin/index.html');
    }
}