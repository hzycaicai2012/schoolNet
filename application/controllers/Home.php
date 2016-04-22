<?php
require_once "BaseController.php";
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 0:01
 */
class Home extends BaseController {
    public function index() {
        // var_dump($this->session->user);
        $type = isset($_GET['type']) ? intval($_GET['type']) : 4;
        $this->smarty3->assign('type', $type);
        $this->smarty3->display('home/index.html');
    }
}