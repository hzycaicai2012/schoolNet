<?php
require_once "BaseController.php";
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 0:01
 */
class Home extends BaseController {
    public function _filter() {
        return array(
            '_loginFilter' => array('index'),
        );
    }

    public function _loginFilter() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0) {
            redirect('/user/login');
        }
    }

    public function index() {
        if (!isset($_GET['type'])) {
            $this->smarty3->assign('nav_index', 'home');
        } else {
            $this->smarty3->assign('nav_index', 'my');
        }
        $type = isset($_GET['type']) ? intval($_GET['type']) : 4;
        $this->smarty3->assign('type', $type);
        $this->smarty3->display('home/index.html');
    }
}