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
        $this->smarty3->display('home/index.html');
    }
}